<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend extends CI_Controller {
    public function __construct(){
        parent::__construct();
        // Include the facebook api php libraries
        include_once APPPATH . "libraries/facebook-api/facebook.php";
        # load user model
        $this->load->model('users_model','user');
		$this->load->helper('mailer');
    }
    
    # function for home page
    function index(){
        $data[]=array();
        $this->template->load('frontend_login','frontend/default',$data);
    }
   
    # function for login page
    function signin(){
        //Call Facebook API
        $facebook = new Facebook(array(
            'appId' => FB_APP_ID,
            'secret' => FB_APP_SECRET
        ));
        $data['fbauthUrl'] = $facebook->getLoginUrl(array('redirect_uri' => base_url('fb_auth.html'), 'scope' => FB_PERMISSIONS));
        $this->template->load('frontend_login','frontend/signin',$data);
    }

    function new_home(){
        //Call Facebook API
        $this->template->load('frontend_login','frontend/new_home');
    }
    
    # function for user sign up page
    function user_signup(){
        $data[]=array();
        $this->template->load('frontend_login','frontend/user_signup',$data);
    }
    
    #function for change password
    function change_password(){
        $data[]=array();
        if(!empty($this->input->post())){
            $this->form_validation->set_rules('curr_password', 'Password', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|matches[conf_password]');
            $this->form_validation->set_rules('conf_password', 'Password Confirmation', 'required');
            if ($this->form_validation->run() == FALSE){
                $this->template->load('frontend_login','frontend/change_password',$data);
            }
            else{
                $status=$this->user->change_password();
                if($status){
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
                else{
                    redirect('change_password');
                }
            }
        }
        else{
            $this->template->load('educational','frontend/change_password',$data);
        }
        
    }
    
    #function validate username
    function validate_username($str){
        if($this->user->validate_username($str)){
            return FALSE;
        }
        return TRUE;
    }
    
    #function validate email
    function validate_email($str){
        if($this->user->validate_email($str)){
            return FALSE;
        }
        return TRUE;
    }
    
    # add student
    function add_student(){
        # load model
        $this->load->model('student_model','stu');
        $data['post_data']=$this->input->post();
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('current_institute', 'Current Institute', '');
        $this->form_validation->set_rules('prepairing_for', 'Prepairing For', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
        
        if(empty($this->input->post('id'))){
            $this->form_validation->set_rules('username', 'Username', 'callback_validate_username');
            $this->form_validation->set_rules('email', 'Email', 'callback_validate_email');
            $this->form_validation->set_message('validate_username','Username already exists');
            $this->form_validation->set_message('validate_email','Email already exists');
        }
        
        $this->form_validation->set_rules('password', 'Password', 'required|matches[conf_password]');
        $this->form_validation->set_rules('conf_password', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('zip', 'Zip Code', 'required');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $this->template->load('frontend_login','frontend/user_signup',$data);
        }
        else{
            $this->stu->add_student();
			
			/// Send Mail to Student
			
			$name = $this->input->post('first_name').' '.$this->input->post('last_name');
			
			$username = $this->input->post('username');
			$password = md5(clean_variable($this->input->post('password')));
			
			$link = base_url("student-mail-login/".$username."/".$password);
			
			$sendMailTo = $this->input->post('email');
			
			// studentMailer($name = NULL,$username = NULL,$link = NULL, $password = NULL)
			
			$MailBody = studentMailer($name,$username,$link, $this->input->post('password'));
			
			$mailSender = $this->send_email($sendMailTo, 'Absolutprep.com : Account Login Details.', $MailBody);

			
            redirect('sign-in','refresh');
        }
    }
    
	public function send_email($to,$subject,$message)
	{
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= 'From: <info@absolutprep.com>' . "\r\n";
		// $headers .= 'Cc: myboss@example.com' . "\r\n";

		return mail($to,$subject,$message,$headers);
	}
	
	
    # add Institute    
    function add_institute(){
        # load model
        $this->load->model('educational_model','edu');
        $data['post_data']=$this->input->post();
        $this->form_validation->set_rules('name', 'Institute Name', 'required');
        $this->form_validation->set_rules('branchurl', 'Url', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[conf_password]');
        $this->form_validation->set_rules('conf_password', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('zip', 'Zip Code', 'required');
        $this->form_validation->set_rules('examsmodel', 'City', 'required');
        $this->form_validation->set_rules('coursedetail', 'Cicoursedetailty', 'required');
        $this->form_validation->set_rules('history', 'City', 'required');
        $this->form_validation->set_rules('registerdinstitutes', 'Registerd Institutes', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $this->template->load('frontend_login','frontend/institute_signup',$data);
        }
        else{
            $this->edu->add_institute();
            redirect('educational','refresh');
        }
    }
    
    # add student
    function add_tutor(){
        # load model
        $this->load->model('educational_model','edu');
        $data['post_data']=$this->input->post();
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[conf_password]');
        $this->form_validation->set_rules('conf_password', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('zip', 'Zip Code', 'required');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
        $this->form_validation->set_rules('subjects', 'Subjects', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $this->template->load('frontend_login','frontend/tutor_signup',$data);
        }
        else{
            $this->edu->add_tutor();
			
			/// Tutor Mail to Student
			
			$name = $this->input->post('first_name').' '.$this->input->post('last_name');
			
			$username = $this->input->post('username');
			$password = md5(clean_variable($this->input->post('password')));
			
			$link = base_url("student-mail-login/".$username."/".$password);
			
			$sendMailTo = $this->input->post('email');
			
			// studentMailer($name = NULL,$username = NULL,$link = NULL, $password = NULL)
			
			$MailBody = tutorMailer($name,$username,$link, $this->input->post('password'));
			
			$mailSender = $this->send_email($sendMailTo, 'Absolutprep.com : Account Login Details.', $MailBody);
			
			
			
            redirect('educational','refresh');
        }
    }
    
    # function for login page
    function tutor_signup(){
        $data[]=array();
        $this->template->load('frontend_login','frontend/tutor_signup',$data);
    }
    
    # function for login page
    function institute_signup(){
        $data[]=array();
        $this->template->load('frontend_login','frontend/institute_signup',$data);
    }
    
    function logout(){
        $this->session->sess_destroy();
        //redirect to login page for login again
        redirect(base_url(), 'refresh');	
    }
	
	
	function testMail()
	{
		
		$MailBody = studentMailer("Lokesh","info1","http://google.com", "123456");
			
		$mailSender = $this->send_email("web.lokesh@gmail.com", 'Absolutprep.com : Account Login Details.', $MailBody);
			
	}
}