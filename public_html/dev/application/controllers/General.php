<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class General extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('users_model');
    }
    
    public function forget_password(){
        if((clean_variable($this->input->post('user_forget'))=='Send Request') || (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')) {
            if((!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')){
                
                $result=$this->users_model->forget_password();
                
                if($result){
                    
                    $this->output->set_output(json_encode(['result' => 1,'message' =>  'A password recovery email has been sent to your registered email address.', 'hash'=>$this->security->get_csrf_hash()]));
                
                }else{
                    
                    $this->output->set_output(json_encode(['result' => 0, 'message' =>  'This email is not registered with us.', 'hash'=>$this->security->get_csrf_hash()]));
                    
                }
            }
        }
    }
    
    public function change_password($userid,$token){
        $query=$this->db->get_where('forget_password',array('token'=>$token,'userid'=>$userid));
        if($query->num_rows()>0){            
            $data['user_details']=array('userid'=>$userid,'token'=>$token);
            $this->template->load('login','login/change_password',$data);
        }
        else{
            $this->not_found('Unauthorized User');
        }
    }
    
    public function reset_password(){
        $token=clean_variable($this->input->post('token'));
        $userid=clean_variable($this->input->post('userid'));
        if(clean_variable($this->input->post('new_password'))==clean_variable($this->input->post('conf_password'))){
            $this->users_model->reset_password($userid,clean_variable($this->input->post('new_password')));
            $this->message->set('Your Password has been changed.Please Login', 'success', TRUE, ''); 
            redirect('login','refresh');
        }
        else{
            $this->message->set('Password did not match', 'warning', TRUE, ''); 
            redirect('change_password/'.$userid.'/'.$token);
        }
    }
    
    public function not_found($msg=''){
        $data['msg']=$msg;
        $this->template->load('login','errors/cli/error_404',$data);
    }
    
}

