<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Educational extends CI_Controller {
    public function __construct(){
        parent::__construct();
		
		$this->load->helper('mailer');
		$this->load->helper('pagination');
		$this->load->library("pagination");
		
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
    function test_categories()
	{
		
        $page=0;
        if(!empty($this->input->get('per_page'))){
            $page=$this->input->get('per_page');
        }
        
		 
		
		$userid=$this->getCurrentUserId();
        $data['test_cat']=$this->edu->get_exam_categories($page,$userid);
        $data['pages']= get_froentend_pagination('educational/test_categories.html',$this->edu->get_total_exam_categories($userid));
			
 
		$data['exam_list'] = $this->edu->loadExamListAll($userid);
		
        $this->template->load('educational','frontend/educational/test_categories',$data);
    }
    
    #function for test categories 
    function add_test_categories(){
        // $userid=$this->session->userdata('userdata')['userid'];
		
		$userid=$this->getCurrentUserId();
		
		$data['exam_list'] = $this->edu->loadExamListAll($userid);
		
        $data['test_cat_opt']=$this->edu->get_parent_module(0,$userid);
        $this->template->load('educational','frontend/educational/add_test_categories',$data);
    }
	
	function getSubModule(){
        
		echo $this->input->post('parent');
		die;
		$userid=$this->getCurrentUserId();

        $subModule = $this->edu->get_parent_module(0,$userid);
        
    }
	
    
    
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    function exam_list(){
        $page=0;
        if(!empty($this->input->get('per_page'))){
            $page=$this->input->get('per_page');
        }
		$userId = $this->getCurrentUserId();
		
        $data['test_cat']=$this->edu->loadExamList($page,$userId);
		
        $data['pages']=get_froentend_pagination('test_categories',$this->edu->totalExamList($userId));

        $this->template->load('educational','frontend/educational/exam_list_page',$data);
    }
	
    #function for test categories 
    function create_new_exam()
	{	
		$userId = $this->getCurrentUserId();

		$data['course_listing']=$this->edu->getAllCourse($userId);
		
        $this->template->load('educational','frontend/educational/add_exam',$data);
    }
	
	    #function for test categories 
    function delete_exam($id){
        $this->message->set('Exam has been deleted successfully.', 'success', TRUE);
        $this->db->delete('exam_list',array('exam_id'=>  urldecrypt($id)));
        redirect('educational/exam_list');
    }
    
	    #function for test categories 
    function save_new_exam()
	{
		$userId = $this->getCurrentUserId();
		
        $data['test_cat']=$this->input->post();
		
        $this->form_validation->set_rules('course', 'Course', 'required');
        $this->form_validation->set_rules('subject[]', 'Subject', 'required');
        $this->form_validation->set_rules('tutor_name', 'Tutor/Institute Name', 'required');
        $this->form_validation->set_rules('title', 'Exam Name', 'required|is_unique[exam_list.exam_name]');
        $this->form_validation->set_rules('total_question', 'Total Question', 'required');
        $this->form_validation->set_rules('start_date', 'Start Date', 'required');
        $this->form_validation->set_rules('end_date', 'End Date', 'required');
        $this->form_validation->set_rules('test_time', 'Test Time', 'required');
        $this->form_validation->set_rules('correct_answer', 'Marks for Correct Answer', 'required');
        $this->form_validation->set_rules('wrong_answer', 'Marks for Wrong Answer', 'required');
        $this->form_validation->set_rules('unattempted_answer', 'Marks for Unattempted Answer', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
		
		
        if ($this->form_validation->run() == FALSE)
		{			
			$data['course_listing']=$this->edu->getAllCourse($userId);
			
            $this->template->load('educational','frontend/educational/add_exam',$data);
        }
        else{
			
            $cat_id=$this->edu->saveNewExam($userId);
           // redirect('educational/edit_test_exam/'.$cat_id,'refresh');
            redirect('educational/exam_list/','refresh');
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
		$userid=$this->getCurrentUserId();
		
        $data['test_ques']=$this->edu->get_test_questions($page,$userid);
		
		 
        $data['pages']=get_froentend_pagination('educational/test_questions',$this->edu->total_test_question($userid));
        $this->template->load('educational','frontend/educational/test_questions',$data);
    }
    
    #function for test questions 
    function add_test_questions(){
		
		$userid=$this->getCurrentUserId();
		
		// $data['exam_list'] = $this->edu->loadExamListAll($userid);
		$data['subject_listing']=$this->edu->getSubjectList($userid);
		
        $data['test_cat_opt']=$this->edu->get_exam_category_opt($userid,0);

        $this->template->load('educational','frontend/educational/add_test_questions',$data);
    }
    
    #function for test questions 
    function edit_test_questions($id){
		
		$userid=$this->getCurrentUserId();
		
		$data['exam_list'] = $this->edu->loadExamListAll($userid);
        $data['test_cat_opt']=$this->edu->get_exam_category_opt($userid);
		
        $data['test_ques']=$this->edu->get_test_question($id);
        $this->template->load('educational','frontend/educational/add_test_questions',$data);
    }
    
    #function for test questions 
    function save_test_questions()
	{
 
        $data['test_ques']=$this->input->post();
		
		$userid=$this->getCurrentUserId();
		$data['subject_listing']=$this->edu->getSubjectList($userid);
		
		$data['exam_list'] = $this->edu->loadExamListAll($userid);
		 $data['test_cat_opt']=$this->edu->get_test_category_opt($userid);
	 
        
        $this->form_validation->set_rules('subject_id', 'Subject', 'required');
        $this->form_validation->set_rules('module', 'Module', 'required');
        $this->form_validation->set_rules('question_type', 'Question Type', 'required');
		
       
		
		$this->form_validation->set_rules('option_type_1', 'Option Type 1', 'required');
		$this->form_validation->set_rules('option_type_2', 'Option Type 2', 'required');
		$this->form_validation->set_rules('option_type_3', 'Option Type 3', 'required');
		$this->form_validation->set_rules('option_type_4', 'Option Type 4', 'required');
		
		if (($_FILES['ques_img']['size']==0) && ($this->input->post("question_type"))==1)
		{
			$this->form_validation->set_rules('ques_img', 'Question Image', 'required');
		}
		else
		{
			// $this->form_validation->set_rules('title', 'Title', 'required');
		}	
		
		if($this->input->post("option_type_1")==0)
		{
			$this->form_validation->set_rules('option1', 'Option 1', 'required');
		}	
		else
		{
			if (($_FILES['option1_img']['size']==0) && ($this->input->post("option_type_1"))==1)
			{
				$this->form_validation->set_rules('option1_img', 'Option 1 Image', 'required');
			}
		}
		
		if($this->input->post("option_type_2")==0)
		{
			$this->form_validation->set_rules('option2', 'Option 2', 'required');
		}	
		else
		{
			if (($_FILES['option2_img']['size']==0) && ($this->input->post("option_type_2"))==1)
			{
				$this->form_validation->set_rules('option2_img', 'Option 2 Image', 'required');
			}
		
		}
		if($this->input->post("option_type_3")==0)
		{
			 $this->form_validation->set_rules('option3', 'Option 3', 'required');
		}	
		else
		{
			if (($_FILES['option3_img']['size']==0) && ($this->input->post("option_type_3"))==1)
			{
				$this->form_validation->set_rules('option3_img', 'Option 3 Image', 'required');
			}
		}
		
		if($this->input->post("option_type_4")==0)
		{
			 $this->form_validation->set_rules('option4', 'Option 4', 'required');
		}		
		else
		{
			if (($_FILES['option4_img']['size']==0) && ($this->input->post("option_type_4"))==1)
			{
				$this->form_validation->set_rules('option4_img', 'Option 4 Image', 'required');
			}
		}
		
        $this->form_validation->set_rules('correct_ans', 'Correct Answer', 'required');
 
        if ($this->form_validation->run() == FALSE){
			
			$this->template->load('educational','frontend/educational/add_test_questions',$data);
        }
        else
		{
			 
			if ($this->input->post("question_type")==1 || $this->input->post("question_type")==2)
			{
				$questionImage = $this->upload("ques_img");
			}
			else
			{
				$questionImage = "";
			}
			
			if ($this->input->post("option_type_1")==1)
			{
				$option1_img= $this->upload("option1_img");
			}
			else
			{
				$option1_img ="";
			}
			
			if ($this->input->post("option_type_2")==1)
			{
				$option2_img= $this->upload("option2_img");
			}
			else
			{
				$option2_img= "";
			}
			
			if ($this->input->post("option_type_3")==1)
			{
				$option3_img= $this->upload("option3_img");
			}
			else
			{
				$option3_img="";
			}
			
			if ($this->input->post("option_type_4")==1)
			{
				$option4_img= $this->upload("option4_img");
			}
			else
			{
				$option4_img= "";
			}
			
			$ques_id=$this->edu->save_test_questions($userid,$questionImage,$option1_img,$option2_img,$option3_img,$option4_img);
			 
			$saveType = $this->input->post("save"); 
			
			if($saveType=="save_add")
			{
				$data['subject_id']= $this->input->post("subject_id");
				$data['module_id']= $this->input->post("module");
				if($this->input->post("sub_module"))
				{
					$data['sub_module_id']= $this->input->post("sub_module");
				}
				else
				{
					$data['sub_module_id']= "";
				}
				
				reset($_POST);
				
				$this->template->load('educational','frontend/educational/add_test_questions_more',$data);
			}
			else
			{
				 redirect('test_questions/','refresh');
			}
			 
           
        }
    }
    
    #function for test questions 
    function delete_test_questions($id){
        $this->message->set('Test Question has been deleted successfully.', 'success', TRUE);
        $this->db->delete('test_questions',array('id'=>  urldecrypt($id)));
        redirect('educational/test_questions');
    }
    
    #function for educatioanl students listing page
    function students()
	{
		$userId = $this->getCurrentUserId();
		
        $page=0;
        if(!empty($this->input->get('per_page'))){
            $page=$this->input->get('per_page');
        }
        $this->load->model('student_model','stu');
        $data['student_listing']=$this->edu->get_students($page,$userId);
        $data['pages']=get_froentend_pagination('educational/students',$this->edu->total_student($this->session->userdata('userdata')['userid']));
        $this->template->load('educational','frontend/educational/students',$data);
    }
    
    # function for add student
    function add_student(){
        $data=array('');
		$userId = $this->getCurrentUserId();
		$data['course_listing']=$this->edu->getAllCourse($userId);
        $this->template->load('educational','frontend/educational/add_student',$data);
    }
    
    # function for edit student
    function edit_student($id){
		$userId = $this->getCurrentUserId();
		$data['course_listing']=$this->edu->getAllCourse($userId);
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
    function save_student()
	{
		
		$userId = $this->getCurrentUserId();
		$data['course_listing']=$this->edu->getAllCourse($userId);
		
        $data['post_data']=$this->input->post();
 
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
        $this->form_validation->set_rules('course_name', 'Course', 'required');
        
        
        if(empty($this->input->post('id'))){
            $this->form_validation->set_rules('email', 'Email', 'callback_validate_email');
            $this->form_validation->set_message('validate_email','Email is already exist..!');
        }
     
        if ($this->form_validation->run() == FALSE){
            $this->template->load('educational','frontend/educational/add_student',$data);
        }
        else
		{
            $rowId = $this->edu->add_student($userId);
			
			$sendMailTo = $this->input->post('email');
			$username = $sendMailTo;
			$password = md5(clean_variable($this->input->post('password')));
			$link = base_url("student-mail-login/".urlencrypt($username)."/".urlencrypt($rowId));
			
			$courseTitle = $this->edu->getcourse($this->input->post("course_name"))->course_title;
			$instituteName =  $this->session->userdata('userdata')['name'];
			
			$MailBody = mailerHtml("",$username,$link,$courseTitle,$instituteName,$this->input->post('password'));
			$mailSender = $this->send_email($sendMailTo, 'Vprep.in : Account Login Details.', $MailBody);
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
			
			
			
			echo $mailSender = $this->send_email($sendMailTo, 'vprep.in : Account Login Details.', $MailBody);
			
			die;
		
	}
	
	public function send_email($to,$subject,$message)
	{
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= 'From: <info@vprep.in>' . "\r\n";
		// $headers .= 'Cc: myboss@example.com' . "\r\n";

		return mail($to,$subject,$message,$headers);
	}
	
	///////////////////////////////////////////////////////////////
	
   public function edit_course($courseId)
   {
	    $courseId = urldecrypt($courseId);
	    $user_id=$this->getCurrentUserId();
	   
		$data['getCourse']=$this->edu->getcourse($courseId);
		$this->template->load('educational','frontend/educational/edit_course',$data);
   }
	
	function update_course()
	{
		$user_id=$this->getCurrentUserId();
		 
		$data['course_listing']=$this->edu->getAllCourse($user_id);
		$saveFor = $user_id;
 
        $this->form_validation->set_rules('course_name', 'Course Name', 'required');
        $this->form_validation->set_rules('course_desc', 'Course Description', 'required');
		
        if($this->form_validation->run() == FALSE)
		{
            $this->template->load('educational','frontend/educational/edit_course',$data);
        }
        else
		{
            $this->edu->update_course();
            redirect('educational/course','refresh');
        }
    }
 
		
		
   public function add_course()
   {
		if($this->session->userdata('userdata')['usertype']==3)
		{
			$userId = $this->session->userdata('userdata')['userid'];
			$instituteData = $this->edu->getInstitute($userId);
			$data['course_listing']=$this->edu->getAllCourse($instituteData->institute_id);
		}
		else
		{
			$userId = $this->session->userdata('userdata')['userid'];
			$data['course_listing']=$this->edu->getAllCourse($userId);
		}

 
		$this->template->load('educational','frontend/educational/add_course',$data);
   }
   
   public function course_list()
   {
		if($this->session->userdata('userdata')['usertype']==3)
		{
			$userId = $this->session->userdata('userdata')['userid'];
			$instituteData = $this->edu->getInstitute($userId);
			$data['course_listing']=$this->edu->getAllCourse($instituteData->institute_id);
		}
		else
		{
			$userId = $this->session->userdata('userdata')['userid'];
			$data['course_listing']=$this->edu->getAllCourse($userId);
		}

 
		$this->template->load('educational','frontend/educational/course_list',$data);
   }
   
    function save_course()
	{
		
		if($this->session->userdata('userdata')['usertype']==3)
		{
			$userId = $this->session->userdata('userdata')['userid'];
			$instituteData = $this->edu->getInstitute($userId);
			$data['course_listing']=$this->edu->getAllCourse($instituteData->institute_id);
			
			$saveFor = $instituteData->institute_id;
		}
		else
		{
			$userId = $this->session->userdata('userdata')['userid'];
			$data['course_listing']=$this->edu->getAllCourse($userId);
			$saveFor = $userId;
		}
		
		
		
        $data['post_data']=$this->input->post();
		
        $this->form_validation->set_rules('course_name', 'Course Name', 'required');
        $this->form_validation->set_rules('course_desc', 'Course Description', 'required');
 
		
        if ($this->form_validation->run() == FALSE){
            $this->template->load('educational','frontend/educational/add_course',$data);
        }
        else
		{
 
            $this->edu->save_course($saveFor);
 
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
	/////////////////////////////////////////////////////////////////////////////////////////////////////////
	
   public function subject_list()
   {
		$userId = $this->getCurrentUserId();

		$data['course_listing']=$this->edu->getAllCourse($userId);
		$data['subject_listing']=$this->edu->getAllSubject($userId);


		$this->template->load('educational','frontend/educational/list_subject',$data);
   }
   
   public function add_subject()
   {
		$userId = $this->getCurrentUserId();

		$data['course_listing']=$this->edu->getAllCourse($userId);
		$data['subject_listing']=$this->edu->getAllSubject($userId);


		$this->template->load('educational','frontend/educational/add_subject',$data);
   }
 
    function save_subject()
	{
		$userId = $this->getCurrentUserId();

		$data['course_listing']=$this->edu->getAllCourse($userId);
		$data['subject_listing']=$this->edu->getAllSubject($userId);


		$data['post_data']=$this->input->post();

		$this->form_validation->set_rules('course_name', 'Course Name', 'required');
		$this->form_validation->set_rules('subject_name[]', 'Subject Name', 'required');
		$this->form_validation->set_rules('subject_desc[]', 'Subject Description', 'required');


		if ($this->form_validation->run() == FALSE)
		{
			$this->template->load('educational','frontend/educational/add_subject',$data);
		}
		else
		{
			$this->edu->insertSubject($userId);
			redirect('educational/subject','refresh');
		}
		
    }
 
   
    function delete_subject($id=NULL)
	{
 
		$id = urldecrypt($id);
 		
        $this->db->delete('course_subject',array('subject_id'=>$id));
 
		$this->message->set('Subject has been deleted successfully.', 'success', TRUE);
		
        redirect('educational/subject');
    }
	
	function edit_subject($id)
	{
	    $id = urldecrypt($id);
		$userId = $this->getCurrentUserId();

		$data['course_listing']=$this->edu->getAllCourse($userId);
		$data['subject_listing']=$this->edu->getAllSubject($userId);
		$data['subject_detail'] = $this->edu->getSubject($id);


		$this->template->load('educational','frontend/educational/edit_subject',$data);
		
	}
	
	
	function update_subject()
	{
		$userId = $this->getCurrentUserId();

		$data['course_listing']=$this->edu->getAllCourse($userId);
		$data['subject_listing']=$this->edu->getAllSubject($userId);


		$data['post_data']=$this->input->post();

		$this->form_validation->set_rules('course_name', 'Course Name', 'required');
		$this->form_validation->set_rules('subject_name', 'Subject Name', 'required');


		if ($this->form_validation->run() == FALSE)
		{
			$this->template->load('educational','frontend/educational/edit_subject',$data);
		}
		else
		{
			$this->edu->updateSubject($userId);
			redirect('educational/subject','refresh');
		}
	}
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////
	
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
    function student_score($id)
	{
		$id = urldecrypt($id);
  
        $data['my_score']=$this->edu->my_score($id);

        $this->template->load('educational','frontend/educational/my_score',$data);
    }
    
    # function for show result
    function show_result($result_id){
 
        $this->stu->unset_test_variable();
        $data['result']=$this->stu->showExamResult(urldecrypt($result_id));
 
		
        $this->template->load('educational','frontend/educational/exam_result',$data);
    }
    
    # function for show result
    function exam_result_chart($result_id){
		  
        $this->stu->unset_test_variable();
        $data['result']=$this->stu->showExamResult(urldecrypt($result_id));
		
	 
        $this->template->load('educational','frontend/exam/exam_result_chart',$data);
    }
	
	
	function searchstudent()
	{
		$getData = $this->edu->searchStudent();
		
		if($this->input->post("set_search_email")!="")
		{
			$userid=$this->getCurrentUserId();
			
			$this->edu->addStudentInstitute($userid);
			
			$sendMailTo = $this->input->post('set_search_email');
			$name = $getData->name;
			$username = $getData->username;
			$password = $getData->password;
			
			// $link = base_url("student-mail-login/".$username."/".$password);
			
			
			$link = base_url("sign-in.html");
 
			$instituteName =  $this->session->userdata('userdata')['name'];
			
			$MailBody = studentJoinedInstMailer($name,$username,$link,$instituteName);

			$mailSender = $this->send_email($sendMailTo, 'vprep.in : Congrats You are added With Institute.', $MailBody);
			
			
			$this->message->set('Student has been Added successfully.', 'success', TRUE);
		
			redirect('educational/students');
			
		}
		else
		{
			if(count($getData)>0)
			{
				$userId = $this->getCurrentUserId();
				$data['course_listing']=$this->edu->getAllCourse($userId);
				
				$data['setEmail'] = $getData->email;
				$data['setUserId'] = $getData->id;
				$data['studentDetail'] = $getData;
				
				
				$data['response_message'] = "Student Found , Click on Add Student Button to Add the Student.";
				
				
				 $this->template->load('educational','frontend/educational/add_student',$data);
				
			}
			else
			{
				 $data['course_listing']=$this->edu->getAllCourse($userId);
				 $data['setEmail'] = "";
				 $data['setUserId'] = "";
				 $data['response_message'] = "Student does not exists with this Email ID.";
				 
				 
				 $this->template->load('educational','frontend/educational/add_student',$data);
			}
		}
		
	}
	
	
	function getCurrentUserId()
	{
		if($this->session->userdata('userdata')['usertype']==3)
		{
			$userId = $this->session->userdata('userdata')['userid'];
			$instituteData = $this->edu->getInstitute($userId);
			return $instituteData->institute_id;
		}
		else
		{
			$userId = $this->session->userdata('userdata')['userid'];
			return $userId;
		}
	}
	
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


# function for check student profile
    function intitute_profile(){
        $data[]=array();
        $this->template->load('educational','frontend/educational/profile',$data);
    }
	
	function update_profile(){
        $data[]=array();
		
        $this->template->load('educational','frontend/educational/update_profile',$data);
    }
	
	function save_profile_update(){
        $data[]=array();
		
		$this->load->library('form_validation');

		$this->form_validation->set_rules('first_name', 'first_name', 'trim|required');
		$this->form_validation->set_rules('phone', 'phone', 'trim|required');
		$this->form_validation->set_rules('address', 'address', 'trim|required');
		$this->form_validation->set_rules('city', 'city', 'trim|required');
		$this->form_validation->set_rules('state', 'state', 'trim|required');
		$this->form_validation->set_rules('zip', 'zip', 'trim|required');
	
		$this->form_validation->set_rules('gender', 'gender', 'trim|required');
 
		 
		 
		if ($this->form_validation->run() == FALSE)
		{
			 $this->template->load('educational','frontend/educational/update_profile',$data);			
		}
		else
		{
			if ( ! empty($_FILES['userfile']['name']))
			{
					$config['upload_path'] = './uploads/profile_pic/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']	= '2000';
					$config['max_width']  = '1024';
					$config['max_height']  = '768';

					$this->load->library('upload', $config);

					if (! $this->upload->do_upload())
					{
						$data['error'] = "<span class='text-danger'>".$this->upload->display_errors()."</span>";

 
						$this->template->load('frontend','frontend/educational/update_profile',$data);
						
						 
					}
					else
					{
						$imageData = $this->upload->data();
						$picName = $imageData['file_name'];
						
						$data['msg'] = "Profile Updated Successfully !!";
						$this->edu->updateInstituteInfo($picName);

					}
			}
			else
			{
				$data['msg'] = "Profile Updated Successfully !!";
				 $this->edu->updateInstituteInfo();
			}
			
			
			
			 $this->template->load('educational','frontend/educational/update_profile',$data);
		}	
		
		
       
    }
	
 
	
	function getSubject()
	{
		$courseId = $this->input->post("course");
		$option = '';
		
		$response = $this->edu->loadSubject($courseId);
		
		if(count($response)>0)
		{
			$option = '<div class="col-md-6"><label class="pull-left">Select Subject</label>
			<select name="subject[]" class="form-control" required="required" id="subject_id" onchange="getExam(this.value)" >
			<option value="" selected="selected">Choose Subject</option>';
			
			foreach($response as $res)
			{
				$option.= '<option value="'.$res->subject_id.'">'.$res->subject_title.'</option>';
			}
			
			$option.= '</select></div><div class="col-md-3"><label class="pull-left">Number of Question</label><input type="number" min="1" value="" name="subject_ques_num[]" required class="form-control" ></div><div class="col-md-3"><a href="javascript:;" class="btn btn-primary btn-lg" style="margin-top:21px;" id="add_dynamic_subject" onclick="getMoreSubjectData();"><i class="fa fa-plus-square"></i></a></div>';
		}
		
		echo json_encode($option);
		
	}
	
		
	function getMoreSubject()
	{
		$courseId = $this->input->post("course");
		$option = '';
		
		$response = $this->edu->loadSubject($courseId);
		
		$randNum = rand(111111,999999);
		
		if(count($response)>0)
		{
			$option = '<div id="'.$randNum.'"><div class="col-md-6" ><label class="pull-left">Select Subject</label>
			<select name="subject[]" class="form-control" required="required" id="subject_id" onchange="getExam(this.value)" >
			<option value="" selected="selected">Choose Subject</option>';
			
			foreach($response as $res)
			{
				$option.= '<option value="'.$res->subject_id.'">'.$res->subject_title.'</option>';
			}
			
			$option.= '</select></div><div class="col-md-3"><label class="pull-left">Number of Question</label><input type="number" min="1" value="" name="subject_ques_num[]" required class="form-control" ></div><div class="col-md-3"><a href="javascript:;" class="btn btn-danger btn-lg" style="margin-top:21px;" onclick="removeSubjectBox('.$randNum .');"><i class="fa fa-trash"></i></a></div></div><div class="clearfix"><br>&nbsp;</div>';
		}
		
		echo json_encode($option);
		
	}
	
	function getExamList()
	{
		$subjectId = $this->input->post("subject");
		$option = '';
		
		$response = $this->edu->loadExam($subjectId);
		
		if(count($response)>0)
		{
			$option = '<label class="pull-left">Select Exam</label><select name="exam" class="form-control" required="required" id="exam_id" onchange="getModule(this.value)"><option value="" selected="selected">Choose Exam</option>';
			foreach($response as $res)
			{
				$option.= '<option value="'.$res->exam_id.'">'.$res->exam_name.'</option>';
			}
			$option.= '</select>';
		}
	
		echo json_encode($option);
		
	}
	
	function getModuleList()
	{
		 $subject_id = $this->input->post("subject_id");
		 
		$response = $this->edu->getModuleBySubject($subject_id);
		 
		$option = '';
		
		if(count($response)>0)
		{
			$option = '<label class="pull-left">Select Module</label><select name="module" class="form-control" required="required" id="module_id" onchange="getSubModule(this.value)" ><option value="" selected="selected">Choose Module</option>';
			foreach($response as $res)
			{
			$option.= '<option value="'.$res->module_id.'">'.$res->module_title.'</option>';
			}

			$option.= '</select>';
		}
		
		echo json_encode($option);
		
	}
	
	
	function getSubModuleList()
	{
		 $moduleId = $this->input->post("module");
		 
		$response = $this->edu->getSubModuleList($moduleId);
		
		$option ='';
		
		if(count($response)>0)
		{
			$option = '<label class="pull-left">Select Sub Module</label><select name="sub_module" class="form-control" required="required" id="sub_module_id"><option value="" selected="selected">Choose Module</option>';

			foreach($response as $res)
			{
				$option.= '<option value="'.$res->module_id.'">'.$res->module_title.'</option>';
			}

			$option.= '</select>';
		}
 
		
		echo json_encode($option);
		
	}
	
	
	function upload($fileName)
    {
		
     

        //set preferences
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'png|jpg|gif|jpeg';
        $config['max_size']    = '2000';
		$config['file_name'] = "ques_".time().rand(999,9999);

        //load upload class library
        $this->load->library('upload', $config);

		  
		$this->upload->initialize($config);
		
        if (!$this->upload->do_upload("$fileName"))
        {
            // case - failure
           return  json_encode(array('status'=> 0,'error' => $this->upload->display_errors()));
           
        }
        else
        {
            // case - success
            $upload_data = $this->upload->data();
			return $upload_data['file_name'];
			
			/*
            $data['success_msg'] = '<div class="alert alert-success text-center">Your file <strong>' . $upload_data['file_name'] . '</strong> was successfully uploaded!</div>';
            $this->load->view('upload_file_view', $data);
			*/
			
        }
    }
 
//// 31, March 2017 Module Section 	////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	 
    function moduleList()
	{
		
        $page=0;
        if(!empty($this->input->get('per_page')))
		{
            $page=$this->input->get('per_page');
        }
 
		$userid=$this->getCurrentUserId();
 
      //  $data['test_cat']=$this->edu->getModuleList($page,$userid);
      //  $data['pages']= get_pagination('educational/module.html',$this->edu->getTotalModuleList($userid));
		
		$config = array();
        $config["base_url"] = base_url() . "educational/module.html";
        $config["total_rows"] = $this->edu->getTotalModuleList($userid);
        $config["per_page"] = 10;
		 $config['use_page_numbers'] = TRUE;
        
		$config['page_query_string'] = TRUE;

        $this->pagination->initialize($config);

       
        $data["test_cat"] = $this->edu->getModuleList($page,$userid);
        $data["pages"] = $this->pagination->create_links();
		
		
        $this->template->load('educational','frontend/educational/module_list',$data);
    }
    
    function addModule()
	{
		$userid=$this->getCurrentUserId();
		$data['subject_list'] = $this->edu->getSubjectList($userid);
        $this->template->load('educational','frontend/educational/add_module',$data);
    }
 
    function saveModule()
	{
        
		$userid=$this->getCurrentUserId();
		$data['subject_list'] = $this->edu->getSubjectList($userid);
		
        $this->form_validation->set_rules('subject_id', 'Subject', 'required');
        $this->form_validation->set_rules('module_name[]', 'Module Name', 'required');
        
        if ($this->form_validation->run() == FALSE)
		{
            $this->template->load('educational','frontend/educational/add_module',$data);
        }
        else
		{
            $cat_id=$this->edu->addModule($userid);
            redirect('educational/module','refresh');
        }
    }
    
 

	function deletemodule($modId)
	{
		$modId = urldecrypt($modId);
		$userid=$this->getCurrentUserId();
		
		$this->edu->deleteModule($userid,$modId);
	    
		redirect('educational/module','refresh');
		
	}
	
	function editmodule($moduleId)
	{
		$modId = urldecrypt($moduleId);
		
		$userid=$this->getCurrentUserId();
		$data['subject_list'] = $this->edu->getSubjectList($userid);
		$data['module_info'] = $this->edu->getModuleInfo($modId);
		
        $this->template->load('educational','frontend/educational/edit_module',$data);
    }
 
    function updateModule()
	{
        
		$userid=$this->getCurrentUserId();
		
		$modId = urldecrypt($this->input->post("module_id"));
		$data['subject_list'] = $this->edu->getSubjectList($userid);
		$data['module_info'] = $this->edu->getModuleInfo($modId);
		
        $this->form_validation->set_rules('module_id', 'Module', 'required');
        $this->form_validation->set_rules('subject_id', 'Subject', 'required');
        $this->form_validation->set_rules('module_name', 'Module Name', 'required');
        
        if ($this->form_validation->run() == FALSE)
		{
            $this->template->load('educational','frontend/educational/edit_module',$data);
        }
        else
		{
            $cat_id=$this->edu->updateModule($userid,$modId);
            redirect('educational/module','refresh');
        }
    }
	
/// Sub Module //////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	
	function submoduleList()
	{
		
        $page=0;
        if(!empty($this->input->get('per_page')))
		{
            $page=$this->input->get('per_page');
        }
 
		$userid=$this->getCurrentUserId();
		
     //    $data['test_cat']=$this->edu->getSubModuleData($page,$userid);
     //   $data['pages']= get_froentend_pagination('educational/submodule.html',$this->edu->getTotalSubModuleData($userid));
		
		$config = array();
        $config["base_url"] = base_url() . "educational/submodule.html";
        $config["total_rows"] = $this->edu->getTotalSubModuleData($userid);
        $config["per_page"] = 10;
		 $config['use_page_numbers'] = TRUE;
        
		$config['page_query_string'] = TRUE;

        $this->pagination->initialize($config);

       
        $data["test_cat"] = $this->edu->getSubModuleData($page,$userid);
        $data["pages"] = $this->pagination->create_links();
 
        $this->template->load('educational','frontend/educational/sub_module_list',$data);
    }	
 
	    
    function addSubModule()
	{
		$userid=$this->getCurrentUserId();
		$data['module_list'] = $this->edu->getModuleSubjectWiseList($userid);
		$data['subject_list'] = $this->edu->getSubjectList($userid);
        $this->template->load('educational','frontend/educational/add_sub_module',$data);
    }
 
    function saveSubModule()
	{
        
		$userid=$this->getCurrentUserId();
		$data['subject_list'] = $this->edu->getSubjectList($userid);
		
        $this->form_validation->set_rules('subject_id', 'Subject', 'required');
        $this->form_validation->set_rules('module_id', 'Module', 'required');
        $this->form_validation->set_rules('module_name[]', 'Module Name', 'required');
        
        if ($this->form_validation->run() == FALSE)
		{
            $this->template->load('educational','frontend/educational/add_sub_module',$data);
        }
        else
		{
            $cat_id=$this->edu->addSubModule($userid);
		   
		   
            redirect('educational/submodule','refresh');
        }
    }
	
	function editsubmodule($moduleId)
	{
		$modId = urldecrypt($moduleId);
		
		$userid=$this->getCurrentUserId();
		$data['subject_list'] = $this->edu->getSubjectList($userid);
		$data['module_info'] = $this->edu->getModuleInfo($modId);
		$data['module_list'] = $this->edu->getModuleSubjectWiseList($userid);
		
        $this->template->load('educational','frontend/educational/edit_sub_module',$data);
    }
 
    function updateSubModule()
	{
        
		$userid=$this->getCurrentUserId();
		
		$modId = urldecrypt($this->input->post("module_id"));
		$data['subject_list'] = $this->edu->getSubjectList($userid);
		$data['module_info'] = $this->edu->getModuleInfo($modId);
		$data['module_list'] = $this->edu->getModuleSubjectWiseList($userid);
		
        $this->form_validation->set_rules('parent_module_id', 'Parent Module', 'required');
        $this->form_validation->set_rules('module_id', 'Module', 'required');
        $this->form_validation->set_rules('subject_id', 'Subject', 'required');
        $this->form_validation->set_rules('module_name', 'Module Name', 'required');
        
        if ($this->form_validation->run() == FALSE)
		{
            $this->template->load('educational','frontend/educational/edit_sub_module',$data);
        }
        else
		{
            $cat_id=$this->edu->updateSubModule($userid,$modId);
            redirect('educational/submodule','refresh');
        }
    }
	
	function deletesubmodule($modId)
	{
		$modId = urldecrypt($modId);
		$userid=$this->getCurrentUserId();
		
		$this->edu->deleteModule($userid,$modId);
	    
		redirect('educational/submodule','refresh');
		
	}
	
	function questionbank()
	{
        $page=0;
        if(!empty($this->input->get('per_page'))){
            $page=$this->input->get('per_page');
        }
		$userid=$this->getCurrentUserId();
		
        $data['test_ques']=$this->edu->get_test_questions($page,$userid);
		
		 
        $data['pages']=get_froentend_pagination('educational/test_questions',$this->edu->total_test_question($userid));
        $this->template->load('educational','frontend/educational/test_questions',$data);
    
	}
	
	
	function addExamQuestion()
	{
		$userid=$this->getCurrentUserId();
		
		$data['exam_list']=$this->edu->loadExamListAll($userid);
		
		$this->template->load('educational','frontend/educational/select_exam',$data);
	}
	
	function chooseExamQuestion()
	{
		$userid=$this->getCurrentUserId();
		$data['course_list']=$this->edu->getAllCourse($userid);
		
		$data['exam_id'] = $this->input->post("exam_id");
		$this->template->load('educational','frontend/educational/add_question_filter',$data);
	}
	
	function getSubjectFilter()
	{
		$courseId = $this->input->post("course");
		$option = '';
		
		$response = $this->edu->loadSubject($courseId);
		
		if(count($response)>0)
		{
			$option = '<label class="pull-left">Select Subject</label>
			<select name="subject_id" class="form-control" required="required" id="subject_id" onchange="getModuleFilter()" >
			<option value="" selected="selected">Choose Subject</option>';
			
			foreach($response as $res)
			{
				$option.= '<option value="'.$res->subject_id.'">'.$res->subject_title.'</option>';
			}
			
			$option.= '</select></div>';
		}
		
		echo json_encode($option);
		
	}
 
	
	function filterQuestion()
	{
		$userid=$this->getCurrentUserId();
		$data['course_list']=$this->edu->getAllCourse($userid);
		
		$data['exam_id'] = $this->input->post("exam_id");
		$data['course'] = $this->input->post("course");
		$data['subject_id'] = $this->input->post("subject_id");
		$data['module'] = $this->input->post("module");
		
		$page=0;
		$data['test_ques']=$this->edu->getFilterQuestions($page,$userid);
		 
		$this->template->load('educational','frontend/educational/add_question_inexam',$data);
	}
	
	function saveExamQuestion()
	{
		$userid=$this->getCurrentUserId();
		
		$data['exam_id'] = $this->input->post("exam_id");
		$data['course'] = $this->input->post("course");
		$data['subject_id'] = $this->input->post("subject_id");
		$data['module'] = $this->input->post("module");
		
        $this->form_validation->set_rules('exam_id', 'Parent Module', 'required');
        $this->form_validation->set_rules('course', 'Module', 'required');
        $this->form_validation->set_rules('subject_id', 'Subject', 'required');
        $this->form_validation->set_rules('module', 'Module Name', 'required');
        
        if ($this->form_validation->run() == FALSE)
		{
            $this->template->load('educational','frontend/educational/add_question_inexam',$data);
        }
        else
		{
            $cat_id=$this->edu->addQuestionToExam($userid);
            redirect('educational/addExamQuestion','refresh');
        }
		
		
	}
	
	function ebooklist()
	{
		$userid=$this->getCurrentUserId();
		$data['book_list'] = $this->edu->getBooksList($userid);
        $this->template->load('educational','frontend/educational/ebook_list',$data);
    }
 
 	function newBook()
	{
		$userid=$this->getCurrentUserId();
		$data['book_list'] = $this->edu->getBooksList($userid);
        $this->template->load('educational','frontend/educational/add_book',$data);
    }
 
	function deleteBook($bookId)
	{
		$bookId = urldecrypt($bookId);

		$this->db->where("book_id",$bookId);
		$this->db->delete("vprep_book");
		$this->message->set('Book has been Deleted Successfully !!', 'success', TRUE, '');
		redirect('educational/ebooklist');	
			
	}
 
    function addBook()
	{
        
		$userid=$this->getCurrentUserId();
		$data['subject_list'] = $this->edu->getSubjectList($userid);
		
        $this->form_validation->set_rules('book_name', 'Book Name', 'required');
 
        $this->form_validation->set_rules('book_author', 'Book File', 'required');
        $this->form_validation->set_rules('book_publisher', 'Book File', 'required');
        $this->form_validation->set_rules('book_mrp', 'Book File', 'required');
        $this->form_validation->set_rules('book_sale_price', 'Book File', 'required');
        
	 
		if($_FILES['cover_image']['size']==0)
		{
			$this->form_validation->set_rules('cover_image', 'Cover Image', 'required');
		}
		if ($_FILES['ebook_file']['size']==0)
		{
			$this->form_validation->set_rules('ebook_file', 'Book File', 'required');
		}
		
        if ($this->form_validation->run() == FALSE)
		{
            $this->template->load('educational','frontend/educational/add_book',$data);
        }
        else
		{
			
			$uploadCover = $this->do_upload("cover_image","ebook/cover/");
			$coverImage = $uploadCover['upload_data']['file_name'];
			
			$uploadFile = $this->do_upload("ebook_file","ebook");
			$bookFile = $uploadFile['upload_data']['file_name'];
			
			
            $this->edu->addNewBook($userid,$coverImage,$bookFile);
			
			  redirect('educational/ebooklist','refresh');
        }
    }
	
	
	function do_upload($fileName,$path)
	{
	 
		$config['upload_path'] = './uploads/'.$path;
		$config['allowed_types'] = 'gif|jpg|png|pdf';
		$config['max_size']	= '2000';
	//	$config['max_width']  = '160';
	//	$config['max_height']  = '190';
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload($fileName))
		{
			return $error = array('error' => $this->upload->display_errors(),'upload_data' => "");
		}
		else
		{
			return $data = array('upload_data' => $this->upload->data(),'error' =>"");
		}
	}
	
 
	
	function examstatusupdate($examId,$status)
	{
		$examId = urldecrypt($examId);

		$this->db->where("exam_id",$examId);
		$this->db->set("exam_status",$status);
		$this->db->update("exam_list");
		$this->message->set('Exam Status has been Updated Successfully !!', 'success', TRUE, '');
		redirect('educational/exam_list');	
			
	}
	
	function deleteStudent($id=NULL)
	{
		$id = urldecrypt($id);

        $this->db->delete('vprep_student_institute',array('si_row_id'=>$id));
		
		$this->message->set('Student has been deleted successfully.', 'success', TRUE);
		
        redirect('educational/students');
    }
	
}
