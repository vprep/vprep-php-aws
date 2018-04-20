<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Educational extends CI_Controller {
    public function __construct(){
        parent::__construct();		$this->load->helper('mailer');
        # load user model
        $this->load->model('users_model','user');
        #load educational model
        $this->load->model('educational_model','edu');
        # load student model
        $this->load->model('student_model','stu');
        if(!check_educational_login()){
            redirect(base_url());
        }
    }
    function index(){
        $data[]=array();
        $this->template->load('educational','frontend/educational/home',$data);
    }
    #function for test categories 
    function test_categories(){
        $page=0;
        if(!empty($this->input->get('per_page'))){
            $page=$this->input->get('per_page');
        }
        $userid=$this->session->userdata('userdata')['userid'];
		
        $data['test_cat']=$this->edu->get_test_categories($page,$userid);
        $data['pages']=get_froentend_pagination('test_categories',$this->edu->total_test_categories());
        $this->template->load('educational','frontend/educational/test_categories',$data);
    }
    
    #function for test categories 
    function add_test_categories(){
        $userid=$this->session->userdata('userdata')['userid'];
        $data['test_cat_opt']=$this->edu->get_test_category_opt($userid,0);
        $this->template->load('educational','frontend/educational/add_test_categories',$data);
    }

	#function for test question bank 
    function test_question_bank(){
        $userid=$this->session->userdata('userdata')['userid'];
        $data['test_cat_opt']=$this->edu->get_test_category_opt($userid,0);

        $page=0;
        if(!empty($this->input->get('per_page'))){
            $page=$this->input->get('per_page');
        }
        $userid=$this->session->userdata('userdata')['userid'];

        $data['test_cat']=$this->edu->get_exam_categories($page,$userid);
        $data['pages']=get_froentend_pagination('test_categories',$this->edu->total_exam_categories());

        $this->template->load('educational','frontend/educational/test_question_bank',$data);
    }
	
	#function for test question bank 
    function test_add_question(){
        $userid=$this->session->userdata('userdata')['userid'];
        $data['test_cat_opt']=$this->edu->get_test_category_opt($userid,0);
        $this->template->load('educational','frontend/educational/test_add_test_questions',$data);
    }
	
	#function for test select create exam
    function test_create_exam(){
        $userid=$this->session->userdata('userdata')['userid'];
        $data['test_cat_opt']=$this->edu->get_test_category_opt($userid,0);
        $this->template->load('educational','frontend/educational/test_create_exam',$data);
    }
	
	#function for test create exam 
    function test_create_exam_select(){
        $userid=$this->session->userdata('userdata')['userid'];
        $data['test_cat_opt']=$this->edu->get_test_category_opt($userid,0);
        $this->template->load('educational','frontend/educational/test_add_exam_questions',$data);
    }
    
    #function for test categories 
    function edit_test_categories($id){
        $userid=$this->session->userdata('userdata')['userid'];
        $data['test_cat']=$this->edu->get_test_category($id);
        $data['test_cat_opt']=$this->edu->get_test_category_opt($userid,0);
        $this->template->load('educational','frontend/educational/add_test_categories',$data);
    }
    
    #function for test categories 
    function save_test_categories(){
        $data['test_cat']=$this->input->post();
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run() == FALSE){
			$userid=$this->session->userdata('userdata')['userid'];
            $data['test_cat_opt']=$this->edu->get_test_category_opt($userid);
            $this->template->load('educational','frontend/educational/add_test_categories',$data);
        }
        else{
            $cat_id=$this->edu->save_exam_categories();
            redirect('edit_test_categories/'.$cat_id,'refresh');
        }
    }
    
    #function for test categories 
    function delete_test_category($id){
        $this->message->set('Test Category has been deleted successfully.', 'success', TRUE);
        $this->db->delete('exam_category',array('id'=>  urldecrypt($id)));
        redirect('educational/test_categories');
    }
    
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    function exam_list(){
        $page=0;
        if(!empty($this->input->get('per_page'))){
            $page=$this->input->get('per_page');
        }
        $userid=$this->session->userdata('userdata')['userid'];

        $data['test_cat']=$this->edu->get_exam_categories($page,$userid);
        $data['pages']=get_froentend_pagination('test_categories',$this->edu->total_exam_categories());

        $this->template->load('educational','frontend/educational/exam_list_page',$data);
    }
	
    #function for test categories 
    function create_new_exam(){	
 
        $userid=$this->session->userdata('userdata')['userid'];
        $data['test_cat_opt']=$this->edu->get_test_category_opt($userid,0);
        $this->template->load('educational','frontend/educational/add_exam',$data);
    }
	
	    #function for test categories 
    function delete_exam($id){
        $this->message->set('Exam has been deleted successfully.', 'success', TRUE);
        $this->db->delete('test_category',array('id'=>  urldecrypt($id)));
        redirect('educational/exam_list');
    }
    
	    #function for test categories 
    function save_new_exam(){
        $data['test_cat']=$this->input->post();
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run() == FALSE){
			$userid=$this->session->userdata('userdata')['userid'];
            $data['test_cat_opt']=$this->edu->get_test_category_opt($userid);
            $this->template->load('educational','frontend/educational/add_exam',$data);
        }
        else{
            $cat_id=$this->edu->save_test_categories();
            redirect('educational/edit_test_exam/'.$cat_id,'refresh');
        }
    }
	
	    
    #function for test categories 
    function edit_test_exam($id){
        $userid=$this->session->userdata('userdata')['userid'];
        $data['test_cat']=$this->edu->get_test_category($id);
        $data['test_cat_opt']=$this->edu->get_test_category_opt($userid,0);
        $this->template->load('educational','frontend/educational/add_exam',$data);
    }
	
	
	
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	
    #function for test questions 
    function test_questions(){
        $page=0;
        if(!empty($this->input->get('per_page'))){
            $page=$this->input->get('per_page');
        }
        $data['test_ques']=$this->edu->get_test_questions($page);
        $data['pages']=get_froentend_pagination('test_questions',$this->edu->total_test_question());
        $this->template->load('educational','frontend/educational/test_questions',$data);
    }
    
    #function for test questions 
    function add_test_questions(){
		
		$userid=$this->session->userdata('userdata')['userid'];
        $data['test_cat_opt']=$this->edu->get_exam_category_opt($userid);
        $this->template->load('educational','frontend/educational/add_test_questions',$data);
    }
    
    #function for test questions 
    function edit_test_questions($id){
		
		 $userid=$this->session->userdata('userdata')['userid'];
        $data['test_cat_opt']=$this->edu->get_exam_category_opt($userid);
		
        $data['test_ques']=$this->edu->get_test_question($id);
        $this->template->load('educational','frontend/educational/add_test_questions',$data);
    }
    
    #function for test questions 
    function save_test_questions(){
//dilshan - pass the exam ID here
        $this->template->load('educational','frontend/educational/test_add_exam_questions');
        return;
//dilshan

        $data['test_ques']=$this->input->post();
        $this->form_validation->set_rules('question_type', 'Test Category', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('option1', 'Option 1', 'required');
        $this->form_validation->set_rules('option2', 'Option 2', 'required');
        $this->form_validation->set_rules('option3', 'Option 3', 'required');
        $this->form_validation->set_rules('option4', 'Option 4', 'required');
        $this->form_validation->set_rules('correct_ans', 'Correct Answer', 'required');
		
		
        if ($this->form_validation->run() == FALSE){
			$userid=$this->session->userdata('userdata')['userid'];
			
            $data['test_cat_opt']=$this->edu->get_test_category_opt($userid);
            $this->template->load('educational','frontend/educational/add_test_questions',$data);
        }
        else{
            $ques_id=$this->edu->save_test_questions();
            redirect('edit_test_questions/'.$ques_id,'refresh');
        }
    }
    
    #function for test questions 
    function delete_test_questions($id){
        $this->message->set('Test Question has been deleted successfully.', 'success', TRUE);
        $this->db->delete('test_question',array('id'=>  urldecrypt($id)));
        redirect('educational/test_questions');
    }
    
    #function for educatioanl students listing page
    function students(){
        $page=0;
        if(!empty($this->input->get('per_page'))){
            $page=$this->input->get('per_page');
        }
        $this->load->model('student_model','stu');
        $data['student_listing']=$this->stu->get_students($page,$this->session->userdata('userdata')['userid']);
        $data['pages']=get_froentend_pagination('educational/students',$this->stu->total_student($this->session->userdata('userdata')['userid']));
        $this->template->load('educational','frontend/educational/students',$data);
    }
    
    # function for add student
    function add_student(){
        $data=array('');
        $this->template->load('educational','frontend/educational/add_student',$data);
    }
    
    # function for edit student
    function edit_student($id){
        $data['post_data']=$this->stu->get_student_detail(urldecrypt($id));
        $this->template->load('educational','frontend/educational/add_student',$data);
    }
    
    # function for delete student
    function delete_student($id=NULL){
		
		if($id==NULL)
		{
			$getUrl = $this->uri->segment(2);
			$id = urldecrypt($getUrl);
		}
 
        
        $this->db->delete('users',array('id'=>$id));
        $this->db->delete('student',array('user_id'=>$id));
		
		$this->message->set('Student has been deleted successfully.', 'success', TRUE);
		
        redirect('educational/students');
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
    function save_student(){
		
		
        $data['post_data']=$this->input->post();
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
      //  $this->form_validation->set_rules('current_institute', 'Current Institute', '');
      //  $this->form_validation->set_rules('prepairing_for', 'Prepairing For', '');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('course_name', 'Course', 'required');
        
        
        if(empty($this->input->post('id'))){
            $this->form_validation->set_rules('username', 'Username', 'callback_validate_username');
            $this->form_validation->set_rules('email', 'Email', 'callback_validate_email');
            $this->form_validation->set_message('validate_username','User name is already exist..!');
            $this->form_validation->set_message('validate_email','Email is already exist..!');
        }
        
		/*
			$this->form_validation->set_rules('password', 'Password', 'required|matches[conf_password]');
			$this->form_validation->set_rules('conf_password', 'Password Confirmation', 'required');
			$this->form_validation->set_rules('phone', 'Phone', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('city', 'City', 'required');
			$this->form_validation->set_rules('state', 'State', 'required');
			$this->form_validation->set_rules('zip', 'Zip Code', 'required');
			$this->form_validation->set_rules('dob', 'Date of Birth', 'required');
		*/
		
		
        if ($this->form_validation->run() == FALSE){
            $this->template->load('educational','frontend/educational/add_student',$data);
        }
        else
		{
            $this->stu->add_student($this->session->userdata('userdata')['userid']);
			
			/*
			$this->input->post('first_name').' '.$this->input->post('last_name')
			
			md5(clean_variable($this->input->post('password')));
			$this->input->post('email')
			$this->input->post('username')
			
			*/
			
			$name = $this->input->post('first_name').' '.$this->input->post('last_name');
			
			$username = $this->input->post('username');
			$password = md5(clean_variable($this->input->post('password')));
			
			$link = base_url("student-mail-login/".$username."/".$password);
			
			$sendMailTo = $this->input->post('email');
			
			$courseTitle = $this->edu->getcourse($this->input->post("course_name"))->course_title;
			
			$instituteName =  $this->session->userdata('userdata')['name'];
			
			$MailBody = mailerHtml($name,$username,$link,$courseTitle,$instituteName,$this->input->post('password'));
			
			
			
			$mailSender = $this->send_email($sendMailTo, 'Absolutprep.com : Account Login Details.', $MailBody);
			
			 
			
            redirect('educational/students','refresh');
        }
    }
	
	public function testMail()
	{
		$name = "Lokesh Singh";
			
			$username = "Lokesh7676";
			
			$link = base_url("student-mail-login/".$username."/".md5(clean_variable(123456)));
			
			$sendMailTo = "web.lokesh@gmail.com";
			
			$MailBody = mailerHtml($name,$username,$link);
			
			
			
			echo $mailSender = $this->send_email($sendMailTo, 'Absolutprep.com : Account Login Details.', $MailBody);
			
			die;
		
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
	
	///////////////////////////////////////////////////////////////



    // created 23/03/2017 dilshan for new UI requirement
   public function view_course()
   {
 
	    $userId = $this->session->userdata('userdata')['userid'];
		$instituteData = $this->edu->getInstitute($userId);
	   
	    $data['course_listing']=$this->edu->getAllCourse($instituteData->institute_id);
		
		$this->template->load('educational','frontend/educational/view_course',$data);
   }


   public function add_course()
   {

	    $userId = $this->session->userdata('userdata')['userid'];
		$instituteData = $this->edu->getInstitute($userId);

	    $data['course_listing']=$this->edu->getAllCourse($instituteData->institute_id);

		$this->template->load('educational','frontend/educational/add_course',$data);
   }

    function save_course()
	{
 
 	    $userId = $this->session->userdata('userdata')['userid'];
		$instituteData = $this->edu->getInstitute($userId);
	   
	    $data['course_listing']=$this->edu->getAllCourse($instituteData->institute_id);
		
        $data['post_data']=$this->input->post();
		
        $this->form_validation->set_rules('course_name', 'Course Name', 'required');
 
		
        if ($this->form_validation->run() == FALSE){
            $this->template->load('educational','frontend/educational/add_course',$data);
        }
        else
		{
			$userId = $this->session->userdata('userdata')['userid'];
			
			$instituteData = $this->edu->getInstitute($userId);
			
            $this->edu->save_course($instituteData->institute_id);
 
            redirect('educational/course','refresh');
        }
    }

    function delete_course($id=NULL)
    {

        $id = urldecrypt($id);

        $this->db->delete('institute_course',array('course_id'=>$id));


        $this->message->set('Course has been deleted successfully.', 'success', TRUE);

        redirect('educational/course');
    }

    // created 23/03/2017 dilshan for new UI requirement
   public function view_subject()
   {

	//    $userId = $this->session->userdata('userdata')['userid'];
	//	$instituteData = $this->edu->getInstitute($userId);

	  //  $data['course_listing']=$this->edu->getAllCourse($instituteData->institute_id);

	//	$this->template->load('educational','frontend/educational/view_subject',$data);
		$this->template->load('educational','frontend/educational/view_subject');
   }

    // created 23/03/2017 dilshan for new UI requirement
   public function add_subject()
   {

//	    $userId = $this->session->userdata('userdata')['userid'];
//		$instituteData = $this->edu->getInstitute($userId);

//	    $data['course_listing']=$this->edu->getAllCourse($instituteData->institute_id);

//		$this->template->load('educational','frontend/educational/add_subject',$data);

		$this->template->load('educational','frontend/educational/add_subject');
   }

    // created 23/03/2017 dilshan for new UI requirement
    function save_subject()
	{
        redirect('educational/subject','refresh');
    }


    function delete_subject($id=NULL)
    {
        redirect('educational/subject');
    }

    public function view_module()
    {

        //    $userId = $this->session->userdata('userdata')['userid'];
        //	$instituteData = $this->edu->getInstitute($userId);

        //  $data['course_listing']=$this->edu->getAllCourse($instituteData->institute_id);

        //	$this->template->load('educational','frontend/educational/view_subject',$data);
        $this->template->load('educational','frontend/educational/view_module');
    }

    #function for test modules
    function add_module(){
        $userid=$this->session->userdata('userdata')['userid'];
        $data['test_cat_opt']=$this->edu->get_test_category_opt($userid,0);
        $this->template->load('educational','frontend/educational/add_module',$data);
    }

    #function for test modules
    function test_add_module(){
        $userid=$this->session->userdata('userdata')['userid'];
        $data['test_cat_opt']=$this->edu->get_test_category_opt($userid,0);
        $this->template->load('educational','frontend/educational/test_add_module',$data);
    }


    public function view_submodule()
    {

        //    $userId = $this->session->userdata('userdata')['userid'];
        //	$instituteData = $this->edu->getInstitute($userId);

        //  $data['course_listing']=$this->edu->getAllCourse($instituteData->institute_id);

        //	$this->template->load('educational','frontend/educational/view_subject',$data);
        $this->template->load('educational','frontend/educational/view_submodule');
    }

    #function for test question bank
    function add_submodule(){
        $userid=$this->session->userdata('userdata')['userid'];
        $data['test_cat_opt']=$this->edu->get_test_category_opt($userid,0);
        $this->template->load('educational','frontend/educational/add_submodule',$data);
    }

    #function for test submodules
    function test_add_submodule(){
        $userid=$this->session->userdata('userdata')['userid'];
        $data['test_cat_opt']=$this->edu->get_test_category_opt($userid,0);
        $this->template->load('educational','frontend/educational/test_add_submodule',$data);
    }




    function resultList()
	{
		// print_r($this->session->userdata());
		$page=0;
        if(!empty($this->input->get('per_page'))){
            $page=$this->input->get('per_page');
        }
		
		$data['student_listing']=$this->stu->get_students($page,$this->session->userdata('userdata')['userid']);
		$data['pages']=get_froentend_pagination('educational/students',$this->stu->total_student($this->session->userdata('userdata')['userid']));
		$this->template->load('educational','frontend/educational/student_test_list',$data);
	}
	
	    # function for sumit full test
    function exam_result(){
        $result_id=$this->stu->exam_result();
        redirect("show_result/".urlencrypt($result_id));
    }
    
    #function my score page
    function student_score($id){
		$id = urldecrypt($id);
 
        $data['my_score']=$this->edu->my_score($id);
		
		
        $this->template->load('educational','frontend/educational/my_score',$data);
    }
    
    # function for show result
    function show_result($result_id){
 
        $this->stu->unset_test_variable();
        $data['result']=$this->stu->show_result(urldecrypt($result_id));
 
		
        $this->template->load('educational','frontend/educational/exam_result',$data);
    }
    
    # function for show result
    function exam_result_chart($result_id){
        $this->stu->unset_test_variable();
        $data['result']=$this->stu->show_result(urldecrypt($result_id));
        $this->template->load('educational','frontend/exam/exam_result_chart',$data);
    }
	
	
	function searchstudent()
	{
		$getData = $this->edu->searchStudent();
		if($this->input->post("set_search_email")!="")
		{
			$this->edu->addStudentInstitute();
			
			$sendMailTo = $this->input->post('set_search_email');
			$name = $getData->name;
			$username = $getData->username;
			$password = $getData->password;
			
			$link = base_url("student-mail-login/".$username."/".$password);
 
			$instituteName =  $this->session->userdata('userdata')['name'];
			
			$MailBody = studentJoinedInstMailer($name,$username,$link,$instituteName);

			$mailSender = $this->send_email($sendMailTo, 'Absolutprep.com : Congrats You are added With Institute.', $MailBody);
			
			
			$this->message->set('Student has been Added successfully.', 'success', TRUE);
		
			redirect('educational/students');
			
		}
		else
		{
			if(count($getData)>0)
			{
				$data['setEmail'] = $getData->email;
				$data['setUserId'] = $getData->id;
				$data['response_message'] = "Student Found , Click on Add Student to Add the Student.";
				 $this->template->load('educational','frontend/educational/add_student',$data);
				
			}
			else
			{
				 $data['setEmail'] = "";
				 $data['setUserId'] = "";
				 $data['response_message'] = "Student does not exists with this Email ID.";
				 $this->template->load('educational','frontend/educational/add_student',$data);
			}
		}
		
	}
	
}
