<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model 
{
    function __construct()
    {
        parent::__construct();        
    }
    /** 
        * Retrive all user from database
    **/
    function get_all_users($page=0){
        $this->db->select('t1.*,t2.user_type as user_type_name');
        $this->where_users();
        $offset = ($page != 0) ? ((int) ($page-1) * DEFAULT_PER_PAGE) : 0;
        $this->db->limit(DEFAULT_PER_PAGE,$offset);
        $this->db->order_by('id','desc');
        return $this->db->get()->result_array();
    }
    
    function where_users(){
        $this->db->from('users t1');
        $this->db->join('user_type t2','t1.user_type=t2.id','left');
    }
    
    function total_users(){
        $this->where_users();
        return $this->db->get()->num_rows();
    }
    
    /** 
        * Retrieve individual users details
    **/
    public function get_user_details($userid){
        return $this->db->get_where('users',array('id'=>$userid))->row_array();
    }
    
    /** 
        * Get post values form profile form
    **/
    public function get_post_value(){
        return array(
            'id'       => $this->session->record_id,
            'username' => $this->input->post('username'),
            'email'    => $this->input->post('email'),
            'name'     => clean_variable($this->input->post('name')),
            'address'  => clean_variable($this->input->post('address')),
            'phone'    => clean_variable($this->input->post('phone')),           
            'user_type'=> $this->input->post('user_type'),
            'is_active'=> $this->input->post('is_active')
        );
    }
    /** 
        * recieve post values 
        * Save record to the database
    **/
    public function save_record(){
        $rcd_data=$this->get_post_value();
        $query=$this->db->get_where('users',array('id'=>$this->session->record_id));
        if($query->num_rows()==0){
            $rcd_data['username']=clean_variable($this->input->post('username'));
            $rcd_data['password']=md5(clean_variable($this->input->post('new_password')));
            $rcd_data['created_at']=time();            
        }
//        elseif((clean_variable($this->input->post('old_password'))!='') && (clean_variable($this->input->post('new_password'))!='') && (clean_variable($this->input->post('conf_password'))!='')){
//            $pass_check=$query->row_array();
//            if(md5(clean_variable($this->input->post('old_password')))==($pass_check['password'])){
//                if(clean_variable($this->input->post('new_password'))==clean_variable($this->input->post('conf_password'))){
//                $rcd_data['password']=md5(clean_variable($this->input->post('new_password')));
//                }
//                else{
//                    $this->message->set('New Password did not match', 'warning', TRUE, ''); 
//                    return false;
//                }
//            }
//            else{
//                $this->message->set('Old Password did not match', 'warning', TRUE, ''); 
//                return false;
//            }
//           
//        }
        
        if($query->num_rows()==1){
           $this->db->update('users', $rcd_data, array('id' => $this->session->record_id));
           $this->message->set('User Profile Updated', 'success', TRUE, ''); 
        }
        else{
            $this->db->insert('users',$rcd_data);
            $this->message->set('New User Profile Created', 'success', TRUE, ''); 
        }
        return true;
    }
    /**
     * delete user from database
     * @param type $id
     */
    function delete_record($id){
        if($id!=1){
            $this->db->where('id', $id);
            $this->db->delete('users');
            $this->message->set('User Has Been Successfully Deleted', 'success', TRUE, '');  
        }
        else{
            $this->message->set('User is super admin & cannot be deleted ', 'warning', TRUE, ''); 
        }
    }
    
    /**
     * reset password of individual user requested
     * @param type $userid
     * @param type $password
     */
    public function reset_password($userid,$password){
        $this->db->update('users', array('password'=>md5($password)), array('id' => $userid));
    }
    
    /**
     * Send link to user to reset new password
     * @return boolean
     */
    function forget_password(){
        $email=clean_variable($this->input->post('user_email'));
        $query=$this->db->get_where('users',array('email'=>$email));
        $user_dtl=$query->row_array();
        // generate random string
        $this->load->helper('string');
        $forget_token=random_string('alnum', 16);
        
        if($query->num_rows()>0){
            $this->load->library('Mail_settings');
            // create message boody
           
            $body='<p>Hello '.$user_dtl['name']. '</p><p>A request for username/password recovery was generated on our website pertaining to this account. </p><p>Your username is : '.$user_dtl['username'].'</p><p>Please follow this link to reset your password.</p> '.  base_url().'change_password/'.$user_dtl['id'].'/'.$forget_token . '<p>If this request was not generated by you, kindly report to info@29kreativ.com</p><p><b>Events Calender Team</b><br>29Kreativ<br>www.29kreativ.com<br>info@29kreativ.com</p>';
            // call mail function 
            $this->mail_settings->send_mail(array($user_dtl['name']=>$user_dtl['email']),'','Events Calender - Password recovery',$body);
            // insert token for change password
            $this->db->insert('forget_password',array('token'=>$forget_token,'userid'=>$user_dtl['id']));
        }        
        else{
            return false;
        }
        return true;
    }
    
    # function for getting user type listing
    function get_all_users_type_list(){
        return $this->db->get('user_type')->result_array();
    }
    
    # function for getting user type list in options
    function get_user_type_list_opt(){
        $return_arr=array();
        foreach($this->get_all_users_type_list() as $key=>$val){
            $return_arr[$val['id']]=$val['user_type'];
        }
        return $return_arr;
    }
    
    # function user type detail
    function get_user_type_details($user_type_id){
        return $this->db->get_where('user_type',array('id'=>$user_type_id))->row_array();
    }
    
    # function for saving user type
    function save_user_type(){
        $rcd_data=$this->input->post();
        unset($rcd_data['save_rcd']);
        $rcd_data['updated_by']=$this->session->userdata('userid');
        $rcd_data['updated_at']=time();
        $this->db->where('id',$rcd_data['id']);
        $this->db->update('user_type',$rcd_data);
        $this->message->set('User Type Has Been Successfully Updated', 'success', TRUE, '');
    }
    
    # function for check user in database via social login
    public function check_user($data = array()){
        $data['user_type']=4;
        $this->db->select('id');
        $this->db->from('users');
        $this->db->where(array('oauth_provider'=>$data['oauth_provider'],'oauth_uid'=>$data['oauth_uid']));
        $prevQuery = $this->db->get();
        $prevCheck = $prevQuery->num_rows();
        $userID=0;
        if($prevCheck > 0){
            $prevResult = $prevQuery->row_array();
            $data['updated_at'] = time();
            $update = $this->db->update('users',$data,array('id'=>$prevResult['id']));
            $userID = $prevResult['id'];
        }else{
            $data['created_at'] = time();
            $data['updated_at'] = time();
            $insert = $this->db->insert('users',$data);
            $userID = $this->db->insert_id();
        }
        
        $this->session->set_userdata('userdata',array(
            'userid'    =>  $userID,
            'name'      =>  $data['name'],
            'email'     =>  $data['email'],
            'gender'    =>  $data['gender'],
            'validated' =>  true,
            'usertype' =>  $data['user_type']
        ));
        
        return $userID?$userID:FALSE;
    }
    
    # function for change password
    function change_password(){
        $query=$this->db->get_where('users',array('id'=>$this->session->userdata('userdata')['userid']));
        $pass_check=$query->row_array();
        if(md5($this->input->post('curr_password'))==($pass_check['password'])){
            if($this->input->post('password')==$this->input->post('conf_password')){
                $up_arr=array(
                    'password'  =>  md5(clean_variable($this->input->post('password'))),
                    'updated_by'=>  $this->session->userdata('userdata')['userid'],
                    'updated_at'=>  time()
                    );
                $this->db->where('id',$this->session->userdata('userdata')['userid']);
                $this->db->update('users',$up_arr);
                $this->message->set('Password has been changed successfully.', 'warning', TRUE, ''); 
                return true;
            }
            else{
                $this->message->set('New Password did not match.', 'warning', TRUE, ''); 
                return false;
            }
        }
        else{
            $this->message->set('Old Password did not match.', 'warning', TRUE, ''); 
            return false;
        }
    }
    
    # function validate username
    function validate_username($username){
        $this->db->where('username',$username);
        $query=$this->db->get('users');
        # check num rows
        if($query->num_rows()>0){
            return true;
        }
        else{
            return false;
        }
    }
    
    # function validate username
    function validate_email($email){
        $this->db->where('email',$email);
        $query=$this->db->get('users');
        # check num rows
        if($query->num_rows()>0){
            return true;
        }
        else{
            return false;
        }
    }
    
}
