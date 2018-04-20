<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
    public function __construct(){
        parent::__construct();
        /** 
                * Check user is valid or not
                * File: helper/login_helper.php			
        **/
    }
    /**
            * Index Page for this controller.
    **/
    public function index($data=null){
        /* Validate weather user is authorised or not
       by login_helper */
        if(check_login()==true){
            // if validate is true then redirect to home page
            redirect('home', 'refresh');	 
        }
        $this->template->load('login', 'login/default',$data);
    }
    # check user login 
    public function checkLogin(){
       // $this->load->helper('cf_validate');
	   $this->load->library('form_validation');
        // form validation using CI
		// custom_rules()
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password is not valid', 'required');
        if($this->input->post('signin')){
            if ($this->form_validation->run() == FALSE){
				$this->index();
            }
            else{
                //	load login_model
                $this->load->model('login_model');
                /**
                    *	login_model validate for validate user is valid or not
                    *	file:model/login_model.php	
                **/
                $result = $this->login_model->validate();
				// print_r($result);
				// die;
                if($result){
                    if($this->session->userdata('userdata')['usertype']==1){
                        redirect('home','refresh');
                    }
                    elseif($this->session->userdata('userdata')['usertype']==2 || $this->session->userdata('userdata')['usertype']==3){
                        redirect('educational','refresh');
                    }
                    else{
                        redirect('student_home','refresh');
                    }
                }
                elseif($result==false && ($_SERVER['HTTP_REFERER']==base_url('login.html') || $_SERVER['HTTP_REFERER']==base_url('login'))){
                    // 	set message for user
                    $this->message->set('Invalid username or password.', 'danger', TRUE);
                    //	redirect to login page
                    redirect('login','refresh');
                }
                else{
                    // 	set message for user
                    $this->message->set('Invalid username or password.', 'danger', TRUE);
                    //	redirect to login page
                    redirect('sign-in','refresh');
                }
            }
        }
    }
    # forget password
    public function forget_password(){
        $this->template->load('login', 'login/forget');
    }
    public function change_password(){
    }
    /**
        *	login_model do_logout for logodd user
        *	file:model/login_model.php	
    **/
    public function logout(){
        do_logout();
    }
	 # check user login 
    public function loginByEmail()
	{
			 $getUserName = urldecrypt($this->uri->segment(2));
			 $rowId =  urldecrypt($this->uri->segment(3));
			 
			
                //	load login_model
                $this->load->model('login_model');
                $result = $this->login_model->UserValidateByEmail($getUserName,$rowId);
                if($result){
                    if($this->session->userdata('userdata')['usertype']==1){
                        redirect('home','refresh');
                    }
                    elseif($this->session->userdata('userdata')['usertype']==2 || $this->session->userdata('userdata')['usertype']==3){
                        redirect('educational','refresh');
                    }
                    else{
                        redirect('student_profile','refresh');
                    }
                }
                elseif($result==false && ($_SERVER['HTTP_REFERER']==base_url('login.html') || $_SERVER['HTTP_REFERER']==base_url('login'))){
                    // 	set message for user
                    $this->message->set('Invalid username or password.', 'danger', TRUE);
                    //	redirect to login page
                    redirect('login','refresh');
                }
                else{
                    // 	set message for user
                    $this->message->set('Invalid username or password.', 'danger', TRUE);
                    //	redirect to login page
                    redirect('sign-in','refresh');
                }
    }
}