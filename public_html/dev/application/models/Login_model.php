<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('encrypt');
    }
    public function validate()
    {
        $username 	= $this->security->xss_clean($this->input->post('username'));
        $password 	= $this->security->xss_clean($this->input->post('password'));
        
        $this->session->set_userdata('username',$username);
        // Run the query
        $query = $this->db->get_where('users',array('username'=>$username,  'is_active'=>'1'));
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
                return true;
            }            
        }
        else{
            $this->message->set('Your account is not active. Please check your activation email for details.', 'danger', TRUE);
            //redirect to login page
            return false;
        }
    }	
    
	
	public function UserValidateByEmail($username,$password)
    {
 
 
        $this->session->set_userdata('username',$username);
        // Run the query
        $query = $this->db->get_where('users',array('username'=>$username,'user_type' =>'4'));
		
		 
        // Let's check if there are any results
        if($query->num_rows() == 1)
        {
            $row=$query->row_array();
            if($password == $row['password'])
            {
				/*
				$this->db->set("is_active",1);
				$this->db->where("id", $row['id']);
				$this->db->update("users");
				*/
				
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
        }
        else{
            $this->message->set('Your account is not active. Please check your activation email for details.', 'danger', TRUE);
            //redirect to login page
            return false;
        }
    }	
	
	
}