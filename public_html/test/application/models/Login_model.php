<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('encrypt');
    }
    
      public function validate_log($username, $password)
    {
        $username 	= $this->security->xss_clean($username);
        $password 	= $this->security->xss_clean($password);
        
        $this->session->set_userdata('username',$username);
        // Run the query
        $query = $this->db->get_where('users',array('username'=>$username,'is_active'=>'1'));
		
		if($query->num_rows()==0)
		{
			 $query = $this->db->get_where('users',array('email'=>$username,'is_active'=>'1'));
		}
		
        // Let's check if there are any results
        if($query->num_rows() == 1)
        {
            $row=$query->row_array();
            if(md5($password) == $row['password'])
            {
                // If there is a user, then create session data
                $data = array(
                    'userid'    => $row['id'],
                    'name'      => $row['name'],
                    'usertype'  => $row['user_type'],
                    'email'     => $row['email'],
                    'gender'    => $row['gender'],
                    'validated' => true,
                    );
                $this->session->set_userdata('userdata',$data);
                echo "here";
                return true;
            }            
        }
        else{
            $this->message->set('Your account is not active. Please check your activation email for details.', 'danger', TRUE);
            //redirect to login page
            return false;
        }
    }
    
    public function validate_phone(){
    $phone = $_GET['phone'];
    
    $this->session->set_userdata('phone',$phone);
    
    
    $query = $this->db->get_where('users',array('phone' => $phone));
    if($query->num_rows()==1)
    {
    	echo 'true';
    
    } else {
    	
    	echo 'false';

    }
    }
    
    
    
    
    
    
    
    
    public function validate()
    {
        $username 	= $this->security->xss_clean($this->input->post('username'));
        $password 	= $this->security->xss_clean($this->input->post('password'));
        
        $this->session->set_userdata('username',$username);
        // Run the query
        $query = $this->db->get_where('users',array('username'=>$username,'is_active'=>'1'));
		
		if($query->num_rows()==0)
		{
			 $query = $this->db->get_where('users',array('email'=>$username,'is_active'=>'1'));
		}
		
        // Let's check if there are any results
        if($query->num_rows() == 1)
        {
            $row=$query->row_array();
            if(md5($password) == $row['password'])
            {
                // If there is a user, then create session data
                $data = array(
                    'userid'    => $row['id'],
                    'name'      => $row['name'],
                    'usertype'  => $row['user_type'],
                    'email'     => $row['email'],
                    'gender'    => $row['gender'],
                    'engineering_college_id' => $row['engineering_college_id'],
                    'validated' => true,
                    );
                $this->session->set_userdata('userdata',$data);
                return true;
            }            
        }
        else{
            $this->message->set('Your account is not active. Please check your activation email for details.', 'danger', TRUE);
            //redirect to login page
            return false;
        }
    }	
    
	public function updateEmailVerification($userId)
	{
		$userId = $this->session->userdata('userdata')['id'];
		
		$this->db->where("id",$userId);
		$this->db->set("is_active",1);
		$this->db->update("users");
		
	}
	
	public function updatePassword(){
	$phone = $this->input->post('phone');
	$password = md5(clean_variable($this->input->post('password')));
	

	


	$result = $this->db->query("update users set password = '$password' where phone = '$phone' ");
	
	if($result)
	
        {
        	
        	$query = $this->db->get_where('users',array('phone'=>$phone,'is_active'=>'1'));
        	if($query->num_rows() == 1)
        {
            $row=$query->row_array();
           
                // If there is a user, then create session data
                $data = array(
                    'userid'    => $row['id'],
                    'name'      => $row['name'],
                    'usertype'  => $row['user_type'],
                    'email'     => $row['email'],
                    'gender'    => $row['gender'],
                    'validated' => true,
                    );
                $this->session->set_userdata('userdata',$data);
                return true;
                       
        }
        else{
            $this->message->set('Your account is not active. Please check your activation email for details.', 'danger', TRUE);
            //redirect to login page
            return false;
        }
        
        
        
        } else {
        
        	echo 'false';
        }
	
	
	
	
	}
	
	public function UserValidateByEmail($username,$rowId)
    {

				
 
        $this->session->set_userdata('username',$username);
        // Run the query

		$query = $this->db->get_where('users',array('username'=>$username));
		 
        // Let's check if there are any results
        if($query->num_rows() == 1)
        {
            $row=$query->row_array();
            
				 

			 
                // If there is a user, then create session data
                $data = array(
                    'userid'    => $row['id'],
                    'name'      => $row['name'],
                    'usertype'  => $row['user_type'],
                    'email'     => $row['email'],
                    'gender'    => $row['gender'],
                    'validated' => true,
                    );
                $this->session->set_userdata('userdata',$data);
				
				$this->verifyStudent($row['id']);
				if($rowId!="")
				{
					$this->verifyInstStudent($rowId);
				}
				

                return true;
		           
        }
        else{
            $this->message->set('Your account is not active. Please check your activation email for details.', 'danger', TRUE);
            //redirect to login page
            return false;
        }
    }	
	
	
	
	function verifyStudent($id)
	{
				$this->db->set("is_active",1);
				$this->db->where("id", $id);
				$this->db->update("users");
	}
	
	function verifyInstStudent($rowId)
	{
				$this->db->set("si_status",1);
				$this->db->where("si_row_id", $rowId);
				$this->db->update("vprep_student_institute");
	}
	
}