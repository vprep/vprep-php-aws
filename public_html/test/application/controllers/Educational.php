<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");
ini_set('memory_limit', '2048M');

class Educational extends CI_Controller {
    public function __construct()
	{
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
          //  redirect(base_url());
        }
        $data['test'] = '';
		
		

    }
    function add_new_college(){
    
    $name = $this->input->post('name');
    $city = $this->input->post('city');
    $approved_by = $this->input->post('approved_by');
    $other_info = $this->input->post('other_info');

    
    
    
    $this->edu->add_new_college($name,$city,$approved_by,$other_info);
    
    
    
    
    
    }
      function add_new_student(){
    
   
$userId = $this->getCurrentUserId();
    
    $data[]=array();
    $data["student"]=$this->edu->add_new_student_user($userId);
    
        $this->template->load('educational','frontend/educational/add_new_student',$data);
    
     
    
    
   }
    function add_new_student_only(){
    
   

    
    $data[]=array();
        $this->template->load('educational','frontend/educational/add_new_student_only',$data);
        
    
    // $this->edu->add_new_college($name,$city,$approved_by,$other_info);
    
    
    
    
    
    }
    
    function add_new_post(){
     
    
    $this->edu->add_new_post();
       
    }
    
    function add_new_poll(){
    	$this->edu->add_new_poll();
    }
    
    function add_test_post(){
     
    
    $this->edu->add_test_post();
       
    }
    
    function get_weekly_post(){
    
    $this->edu->get_weekly_post();
    }
    
    function add_post_reply(){
    	$this->edu->add_post_reply();
    }
    
    function get_post_detail(){
    		$this->edu->get_post_detail();
    }
    
    function add_vote() {
    	$this->edu->add_vote();
    }
    
    function get_engineering_college(){
    
    

    
    
   
    echo json_encode($this->edu->get_engineering_college());
    
    
    
    
    
    }
    
    function index(){
        $data[]=array();
        $this->template->load('educational','frontend/educational/home',$data);
    }
    function store_college_data(){
        $data[]=array();
        $this->template->load('educational','frontend/educational/store_college_data',$data);
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
      function addstudymaterial(){
        // $userid=$this->session->userdata('userdata')['userid'];
		
		$userid=$this->getCurrentUserId();
		
		// $data['exam_list'] = $this->edu->loadExamListAll($userid);
		$data['subject_listing']=$this->edu->getSubjectList("1");
		
        $data['test_cat_opt']=$this->edu->get_exam_category_opt($userid,0);

        $this->template->load('educational','frontend/educational/add_study_material',$data);
    }
    
    function save_test_questions_material(){
          
    $ques_id=$this->edu->save_study_material();
    $userid=$this->getCurrentUserId();
		
		// $data['exam_list'] = $this->edu->loadExamListAll($userid);
		$data['subject_listing']=$this->edu->getSubjectList("1");
		
        $data['test_cat_opt']=$this->edu->get_exam_category_opt($userid,0);
        $this->template->load('educational','frontend/educational/add_study_material',$data);
    
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
		
        $data['test_cat']=$this->edu->loadExamList($page,$userId,0);
		
        $data['pages']=get_froentend_pagination('educational/exam_list',$this->edu->totalExamList($userId,0));

        $this->template->load('educational','frontend/educational/exam_list_page',$data);
    }
    
  
    
    function exam_leaderboard($exam_id, $page){
    	
    	$data["exam_data"]=$this->edu->top_ten_scorer($exam_id,$page);  
    	$current = $page;
    	$previous = $page;
    	if ($current > 0) {
    	$data["previous_page"] = $previous-10;
	}
    	if(sizeof($data["exam_data"])>8){
    	$data["next_page"] = $page+10;
    	}
    	
    	$data["exam_id"] = $exam_id;
    	$data["page"] = $page;
//echo json_encode($data["exam_data"]);

        $this->template->load('educational','frontend/educational/leaderboard',$data);
    }
	
    #function for test categories 
    function create_new_exam()
	{	
		$userId = $this->getCurrentUserId();

		$data['course_listing']=$this->edu->getAllCourse(1);
		
        $this->template->load('educational','frontend/educational/add_exam',$data);
    }
    function create_new_exam_mock()
	{	
		$userId = $this->getCurrentUserId();

		$data['course_listing']=$this->edu->getAllCourse($userId);
		$data['is_mock'] = true;
		
        $this->template->load('educational','frontend/educational/add_exam',$data);
    }
	
	    #function for test categories 
    function delete_exam($id){
        $this->message->set('Exam has been deleted successfully.', 'success', TRUE);
        $this->db->delete('exam_list',array('exam_id'=>  $id));
        echo urldecrypt($id);
        redirect('educational/exam_list');
    }
    
	    #function for test categories 
    function save_new_exam()
	{
		$userId = $this->getCurrentUserId();
		
        $data['test_cat']=$this->input->post();
		
        $this->form_validation->set_rules('course', 'Course', 'required');
        $this->form_validation->set_rules('subject[]', 'Subject', 'required');
        $this->form_validation->set_rules('title', 'Exam Name', 'required|is_unique[exam_list.exam_name]');
        $this->form_validation->set_rules('total_question', 'Total Question', 'required');
        $this->form_validation->set_rules('start_date', 'Start Date', 'required');
        $this->form_validation->set_rules('end_date', 'End Date', 'required');
        $this->form_validation->set_rules('test_time', 'Test Time', 'required');
        $this->form_validation->set_rules('correct_answer', 'Marks for Correct Answer', 'required');
        $this->form_validation->set_rules('wrong_answer', 'Marks for Wrong Answer', 'required');
        $this->form_validation->set_rules('unattempted_answer', 'Marks for Unattempted Answer', 'required');
       	
		$this->form_validation->set_message('is_unique', '%s is Already Added, Choose another name.');
		
		$sd = $this->input->post('start_date');
		$ed = $this->input->post('end_date');
		
		$sdate = date('Y-m-d', strtotime($sd));
		$edate = date('Y-m-d', strtotime($ed));
		
		if($sdate > $edate){
			$this->form_validation->set_message('Start date is invalid');
		}
		
        if ($this->form_validation->run() == FALSE)
		{			
			$data['course_listing']=$this->edu->getAllCourse($userId);
			
            $this->template->load('educational','frontend/educational/add_exam',$data);
        }
        else{
			
            $cat_id=$this->edu->saveNewExam($userId);
           // redirect('educational/edit_test_exam/'.$cat_id,'refresh');
                if($this->input->post("is_mock")){
                $data['subject_listing']=$this->edu->getSubjectList("1");
                $data['is_mock']=1;
                
                $data['course_id']=$this->input->post("course");
                $data['eid']= $cat_id;
                $data['total_number_question'] = $this->edu->getExamMaxQuestion($cat_id)[0]['exam_max_ques']; 
                $data['total_number_question_added'] = $this->edu->getExamMaxQuestionAdded($cat_id);
		
        $data['test_cat_opt']=$this->edu->get_exam_category_opt($userId,0);

        $this->template->load('educational','frontend/educational/add_test_questions',$data);
                }
                else {
		$data['exam_list']=$this->edu->loadExamListAll($userId);
		$this->template->load('educational','frontend/educational/select_exam',$data);
		}
        }
    }
	
	    
    #function for test categories 
    function edit_test_exam($id){
        $userid=$this->session->userdata('userdata')['userid'];
        
		$data['test_cat']=$this->edu->get_test_category($id);
        $data['test_cat_opt']=$this->edu->get_test_category_opt($userid,0);
		
		$data['eid'] = $id;
		$data['course_listing']=$this->edu->getAllCourse($userid);
		$data['exam_details'] = $this->edu->getSavedExam($id);
		$data['exam_subjects'] = $this->edu->getSavedExamSubjects($id);
		
        $this->template->load('educational','frontend/educational/edit_exam',$data);
    }
	
	function save_edited_exam()
	{
		$userId = $this->getCurrentUserId();
		
        $data['test_cat']=$this->input->post();
		
		$id = $this->input->post('eid');
		
		$data['course_listing']=$this->edu->getAllCourse($userId);
		$data['exam_details'] = $this->edu->getSavedExam($id);
		$data['exam_subjects'] = $this->edu->getSavedExamSubjects($id);
		
        $this->form_validation->set_rules('course', 'Course', 'required');
        $this->form_validation->set_rules('subject[]', 'Subject', 'required');
        
        $this->form_validation->set_rules('total_question', 'Total Question', 'required');
        $this->form_validation->set_rules('start_date', 'Start Date', 'required');
        $this->form_validation->set_rules('end_date', 'End Date', 'required');
        $this->form_validation->set_rules('test_time', 'Test Time', 'required');
        $this->form_validation->set_rules('correct_answer', 'Marks for Correct Answer', 'required');
        $this->form_validation->set_rules('wrong_answer', 'Marks for Wrong Answer', 'required');
        $this->form_validation->set_rules('unattempted_answer', 'Marks for Unattempted Answer', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
		
		if($data['exam_details']['exam_name'] != $this->input->post('title')){
			$this->form_validation->set_rules('title', 'Exam Name', 'required|is_unique[exam_list.exam_name]');
			$this->form_validation->set_message('is_unique', '%s is Already Added, Choose another name.');
		}
		
        if ($this->form_validation->run() == FALSE)
		{			
			$data['course_listing']=$this->edu->getAllCourse($userId);
            $this->template->load('educational','frontend/educational/edit_exam',$data);
        }
        else{
            $cat_id=$this->edu->saveEditedExam($userId, $id);
            redirect('educational/exam_list/','refresh');
        }
    }
	
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	
    #function for test questions 
    function test_questions(){
        $page=0;
        if(!empty($this->input->get('per_page'))){
            $page=$this->input->get('per_page');
        }
		$userid=$this->getCurrentUserId();
		$data['subject_listing']=$this->edu->getSubjectList("1");
		
        $data['test_ques']=$this->edu->get_test_questions($page,$userid,"","","");
       
        
		
		 
        $data['pages']=get_froentend_pagination('educational/test_questions',$this->edu->total_test_question($userid,"","",""));
        $this->template->load('educational','frontend/educational/test_questions',$data);
    }
    
    #function for test questions 
    function add_test_questions(){
		
		$userid=$this->getCurrentUserId();
		
		// $data['exam_list'] = $this->edu->loadExamListAll($userid);
		$data['subject_listing']=$this->edu->getSubjectList("1");
		
        $data['test_cat_opt']=$this->edu->get_exam_category_opt($userid,0);

        $this->template->load('educational','frontend/educational/add_test_questions',$data);
    }
     function add_test_questions_mock($eid,$course){
    
		$userid=$this->getCurrentUserId();
		// $data['exam_list'] = $this->edu->loadExamListAll($userid);
		$data['subject_listing']=$this->edu->getSubjectList("1");
		$data['is_mock']=1;
		$data['eid']=$eid;
		$data['course_id']=$course;
		$data['total_number_question'] = $this->edu->getExamMaxQuestion($eid)[0]['exam_max_ques']; 
                $data['total_number_question_added'] = $this->edu->getExamMaxQuestionAdded($eid);
     	        $data['test_cat_opt']=$this->edu->get_exam_category_opt($userid,0);
                $this->template->load('educational','frontend/educational/add_test_questions',$data);
    }
    
    #function for test questions 
    function edit_test_questions($id){
		
		$userid=$this->getCurrentUserId();
		
		//$data['exam_list'] = $this->edu->loadExamListAll($userid);
        //$data['test_cat_opt']=$this->edu->get_exam_category_opt($userid);
		
		$data['subject_listing']=$this->edu->getSubjectList($userid);
        $data['test_cat_opt']=$this->edu->get_exam_category_opt($userid,0);
		
        //$data['test_ques']=$this->edu->get_test_question($id);
		$tarr = $this->edu->getTQ($id);
        $data['test_ques'] = $tarr;
		$data['qid'] = $id;
		
		$data['ssmods'] = $this->edu->getSML($tarr['module'], $tarr['subject_id']);
		$data['smods'] = $this->edu->getMByS($tarr['subject_id']);
		
        $this->template->load('educational','frontend/educational/edit_test_question',$data);
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
        
        $this->form_validation->set_rules('question_type', 'Question Type', 'required');
		$this->form_validation->set_rules('option_type_1', 'Option Type 1', 'required');
		$this->form_validation->set_rules('option_type_2', 'Option Type 2', 'required');
		$this->form_validation->set_rules('option_type_3', 'Option Type 3', 'required');
		$this->form_validation->set_rules('option_type_4', 'Option Type 4', 'required');
		
		if(!empty($_FILES['ques_img']))
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
			
			if(!empty($this->input->post('module'))){
				$data['ssmods'] = $this->edu->getSubModuleList($this->input->post('module'));
				if(!empty($this->input->post('subject_id'))){
					$data['smods'] = $this->edu->getModuleBySubject($this->input->post('subject_id'));
				}
			}
			
			$this->template->load('educational','frontend/educational/add_test_questions',$data);
        }
       else{
			 
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
			if ($this->input->post("solution_type")==1||$this->input->post("solution_type")==2)
			{
				$solution_img= $this->upload("solution_img");
			}
			else
			{
				$solution_img= "";
			}
			
			$ques_id=$this->edu->save_test_questions($userid,$questionImage,$option1_img,$option2_img,$option3_img,$option4_img,$solution_img);
			 
			$saveType = $this->input->post("save"); 
			
			if($saveType=="save_add")
			{
				$data['subject_id']= $this->input->post("subject_id");
				$data['module_id']= $this->input->post("module");
				
				$data['ssmods'] = $this->edu->getSubModuleList($this->input->post('module'));
				$data['smods'] = $this->edu->getModuleBySubject($this->input->post('subject_id'));
				
				
				if($this->input->post("is_mock")){
				$course_id = $this->input->post("course_id");
				$eid = $this->input->post("eid");
				$uid = $userid=$this->getCurrentUserId();
				$module_id = $data['module_id'];
				$subject_id = $data['subject_id'];
				$qid= $ques_id;
				$this->edu->add_exam_question($eid,$course_id,$subject_id,$module_id,$qid,$uid);
				
				
				}
				
				if($this->input->post("sub_module"))
				{
					$data['sub_module_id']= $this->input->post("sub_module");
				}
				else
				{
					$data['sub_module_id']= "";
				}
				
				reset($_POST);
				
				$data['test_ques']['correct_ans'] = '';
				if($this->input->post("is_mock")){
					$data['is_mock']=1;
					$data['eid']=$this->input->post("eid");
					$data['course_id']=$this->input->post("course_id");
					$data['total_number_question'] = $this->edu->getExamMaxQuestion($this->input->post("eid"))[0]['exam_max_ques']; 
			                $data['total_number_question_added'] = $this->edu->getExamMaxQuestionAdded($this->input->post("eid"));
                }
				
				$this->template->load('educational','frontend/educational/add_test_questions_more',$data);
				//$this->template->load('educational','frontend/educational/add_test_questions',$data);
				
			}
			else
			{
				 redirect('test_questions/','refresh');
			}
			}
			
				
    }
    
    
    #function for test questions 
    function save_study_material()
	{
	
	
        $data['test_ques']=$this->input->post();
		
		$userid=$this->getCurrentUserId();
		$data['subject_listing']=$this->edu->getSubjectList($userid);
		
		$data['exam_list'] = $this->edu->loadExamListAll($userid);
		$data['test_cat_opt']=$this->edu->get_test_category_opt($userid);
        
        $this->form_validation->set_rules('subject_id', 'Subject', 'required');
        
        $this->form_validation->set_rules('question_type', 'Question Type', 'required');
		$this->form_validation->set_rules('option_type_1', 'Option Type 1', 'required');
		$this->form_validation->set_rules('option_type_2', 'Option Type 2', 'required');
		$this->form_validation->set_rules('option_type_3', 'Option Type 3', 'required');
		$this->form_validation->set_rules('option_type_4', 'Option Type 4', 'required');
		
		if(!empty($_FILES['ques_img']))
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
			
			if(!empty($this->input->post('module'))){
				$data['ssmods'] = $this->edu->getSubModuleList($this->input->post('module'));
				if(!empty($this->input->post('subject_id'))){
					$data['smods'] = $this->edu->getModuleBySubject($this->input->post('subject_id'));
				}
			}
			
			$this->template->load('educational','frontend/educational/add_test_questions',$data);
        }
       else{
			 
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
				
				$data['ssmods'] = $this->edu->getSubModuleList($this->input->post('module'));
				$data['smods'] = $this->edu->getModuleBySubject($this->input->post('subject_id'));
				
				
				if($this->input->post("is_mock")){
				$course_id = $this->input->post("course_id");
				$eid = $this->input->post("eid");
				$uid = $userid=$this->getCurrentUserId();
				$module_id = $data['module_id'];
				$subject_id = $data['subject_id'];
				$qid= $ques_id;
				$this->edu->add_exam_question($eid,$course_id,$subject_id,$module_id,$qid,$uid);
				
				
				}
				
				if($this->input->post("sub_module"))
				{
					$data['sub_module_id']= $this->input->post("sub_module");
				}
				else
				{
					$data['sub_module_id']= "";
				}
				
				reset($_POST);
				
				$data['test_ques']['correct_ans'] = '';
				if($this->input->post("is_mock")){
					$data['is_mock']=1;
					$data['eid']=$this->input->post("eid");
					$data['course_id']=$this->input->post("course_id");
					$data['total_number_question'] = $this->edu->getExamMaxQuestion($this->input->post("eid"))[0]['exam_max_ques']; 
			                $data['total_number_question_added'] = $this->edu->getExamMaxQuestionAdded($this->input->post("eid"));
                }
				
				$this->template->load('educational','frontend/educational/add_test_questions_more',$data);
				//$this->template->load('educational','frontend/educational/add_test_questions',$data);
				
			}
			else
			{
				 redirect('test_questions/','refresh');
			}
			}
			
				
    }
    
    
    
    
    
	function save_edited_test_questions(){
				
        $data['test_ques']=$this->input->post();
		
		$tarr = $this->edu->getTQ($this->input->post('id'));
		
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
		
		$qb = false;
		$o1b = false;
		$o2b = false;
		$o3b = false;
		$o4b = false;
		
		if($this->input->post("question_type")==0)
		{
			$this->form_validation->set_rules('title', 'Question title', 'required');
		}	
		else
		{
			if($this->input->post("question_type") == 1 && ($tarr['question_type'] == 1 || $tarr['question_type'] == 2)){
				if($this->input->post("question_type") == 2)
					$this->form_validation->set_rules('title', 'Question title', 'required');
			}else{		
				
				if($this->input->post("question_type") == 2 && ($tarr['question_type'] == 2 || $tarr['question_type'] == 1)){
					if($this->input->post("question_type") == 2)
							$this->form_validation->set_rules('title', 'Question title', 'required');
				}else{	
					$qb = true;				
					if($this->input->post("question_type") == 1 || $this->input->post("question_type") == 2){
						if($this->input->post("question_type") == 2)
							$this->form_validation->set_rules('title', 'Question title', 'required');
						if(!empty($_FILES['ques_img']) && $_FILES['ques_img']['size'] == 0){
							$this->form_validation->set_rules('ques_img', 'Question Image', 'required');
						}
					}
				}
			}
		}	
		
		/*
		if(!empty($_FILES['ques_img']))
			if (($_FILES['ques_img']['size']==0) && ($this->input->post("question_type"))==1)
			{
				if($tarr['ques_img'] != $this->input->post('ques_img'))
					$this->form_validation->set_rules('ques_img', 'Question Image', 'required');
			}	
		*/
		
		if($this->input->post("option_type_1")==0)
		{
			$this->form_validation->set_rules('option1', 'Option 1', 'required');
		}	
		else
		{
			if($this->input->post("option_type_1") == 1 && $tarr['option_type_1'] == 1){
			
			}else{
				$o1b = true;
				if (($_FILES['option1_img']['size']==0) && ($this->input->post("option_type_1"))==1)
				{
					$this->form_validation->set_rules('option1_img', 'Option 1 Image', 'required');
				}
			}
		}
		
		if($this->input->post("option_type_2")==0)
		{
			$this->form_validation->set_rules('option2', 'Option 2', 'required');
		}	
		else
		{
			if($this->input->post("option_type_2") == 1 && $tarr['option_type_2'] == 1){
			
			}else{
				$o2b = true;
				if (($_FILES['option2_img']['size']==0) && ($this->input->post("option_type_2"))==1)
				{
					$this->form_validation->set_rules('option2_img', 'Option 2 Image', 'required');
				}
			}
		}
		
		if($this->input->post("option_type_3")==0)
		{
			 $this->form_validation->set_rules('option3', 'Option 3', 'required');
		}	
		else
		{
			if($this->input->post("option_type_3") == 1 && $tarr['option_type_3'] == 1){
			
			}else{
				$o3b = true;
				if (($_FILES['option3_img']['size']==0) && ($this->input->post("option_type_3"))==1)
				{
					$this->form_validation->set_rules('option3_img', 'Option 3 Image', 'required');
				}
			}	
		}
		
		if($this->input->post("option_type_4")==0)
		{
			 $this->form_validation->set_rules('option4', 'Option 4', 'required');
		}		
		else
		{
			if($this->input->post("option_type_4") == 1 && $tarr['option_type_4'] == 1){
			
			}else{
				$o4b = true;
				if (($_FILES['option4_img']['size']==0) && ($this->input->post("option_type_4"))==1)
				{
					$this->form_validation->set_rules('option4_img', 'Option 4 Image', 'required');
				}
			}	
		}
		
        $this->form_validation->set_rules('correct_ans', 'Correct Answer', 'required');
 
        if ($this->form_validation->run() == FALSE){
			
			if(!empty($this->input->post('module'))){
				$data['ssmods'] = $this->edu->getSubModuleList($this->input->post('module'));
				if(!empty($this->input->post('subject_id'))){
					$data['smods'] = $this->edu->getModuleBySubject($this->input->post('subject_id'));
				}
			}
			
			$data['test_ques'] = $tarr;
			
			$this->template->load('educational','frontend/educational/edit_test_question', $data);
        }
        else
		{
			 
			if (($this->input->post("question_type")==1 || $this->input->post("question_type")==2) && $qb)
			{
				$questionImage = $this->upload("ques_img");
			}
			else
			{
				$questionImage = $tarr['ques_img'];
			}
			
			if ($this->input->post("option_type_1")==1 && $o1b)
			{
				$option1_img= $this->upload("option1_img");
			}
			else
			{
				$option1_img = $tarr['option1'];
			}
			
			if ($this->input->post("option_type_2")==1 && $o2b)
			{
				$option2_img= $this->upload("option2_img");
			}
			else
			{
				$option2_img= $tarr['option2'];
			}
			
			if ($this->input->post("option_type_3")==1 && $o3b)
			{
				$option3_img= $this->upload("option3_img");
			}
			else
			{
				$option3_img = $tarr['option3'];
			}
			
			if ($this->input->post("option_type_4")==1 && $o4b)
			{
				$option4_img= $this->upload("option4_img");
			}
			else
			{
				$option4_img = $tarr['option4'];
			}
			
			$ques_id=$this->edu->save_edited_test_questions($userid,$questionImage,$option1_img,$option2_img,$option3_img,$option4_img);
			 
			$saveType = $this->input->post("save"); 
			
			if($saveType=="save_add")
			{
				$data['subject_id']= $this->input->post("subject_id");
				$data['module_id']= $this->input->post("module");
				
				$data['ssmods'] = $this->edu->getSubModuleList($this->input->post('module'));
				$data['smods'] = $this->edu->getModuleBySubject($this->input->post('subject_id'));
				
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
				
				//redirect('test_questions/','refresh');
				
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
    
    function admin_added_question(){
    
        $data["test"]="";
        $this->template->load('educational','frontend/educational/admin_added_question',$data);
    }
    
     #function for seeing total question
    function admin_added_question_num(){
    $data['test']="display:none";
    
    $user_id = trim($this->input->post("admin_id"));
    $admin_time = trim($this->input->post("admin_time"));
    
    
    $data['subject_listing']=$this->edu->getSubjectList("1");
    $subjectList=$data['subject_listing'];
    $questionAddedList=[];
    $num=0;
    foreach($subjectList as $subList){
    
    
    $modulebysubject= $this->edu->getModuleBySubject($subList->subject_id);
    foreach($modulebysubject as $subModuleList ){
    $SubmoduleByModuleId= $this->edu->getSubModuleList($subModuleList->module_id);
    $questionAddedList[$num][0] = $subList->subject_title;
    $questionAddedList[$num][0].= " -> ";
    $questionAddedList[$num][0].= $subModuleList->module_title;
    
    //converting to ist
    $time_from = strtotime('today midnight')+330*60;
    $time_to= "";
    if($admin_time==2){
    $time_from = strtotime('today midnight')+330*60-24*60*60;
    $time_to = strtotime('today midnight')+330*60;
     
    }
    if($admin_time==3){
    $time_from = strtotime('today midnight')+330*60-2*24*60*60;
    $time_to = strtotime('today midnight')+330*60-24*60*60;
     
    }
    
    $questionAddedList[$num][1]=$this->edu->total_test_question_time($user_id,$subList->subject_id,$subModuleList->module_id,"",$time_from,$time_to);
    
    
    $num=$num+1;
    }
    
            
    
    }
    $data["questionAddedList"]=$questionAddedList;
    $data["num"]=$num;
    
    
        $this->template->load('educational','frontend/educational/admin_added_question_num',$data);
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
		$data['course_listing']=$this->edu->getAllCourse(1);
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
    
    
      function save_student_new()
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
            $rowId = $this->edu->add_student_new($userId);
			
			$sendMailTo = $this->input->post('email');
			$username = $sendMailTo;
			$password = md5(clean_variable($this->input->post('password')));
			$link = base_url("student-mail-login/".urlencrypt($username)."/".urlencrypt($rowId));
			
		//	$courseTitle = $this->edu->getcourse($this->input->post("course_name"))->course_title;
			$instituteName =  $this->session->userdata('userdata')['name'];
			
			$MailBody = mailerHtml("",$username,$link,$instituteName,$this->input->post('password'));
			$mailSender = $this->send_email($sendMailTo, 'Vprep.in : Account Login Details.', $MailBody);
			$userId = $this->getCurrentUserId();
    
    $data[]=array();
    $data["student"]=$this->edu->add_new_student_user($userId);
			$this->template->load('educational','frontend/educational/add_new_student',$data);
			//redirect('educational/students','refresh');
        }
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
		$headers .= 'From: <no-reply@vprep.in>' . "\r\n";
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
	
	function notificationList(){
		$this->template->load('educational','frontend/educational/notification_list');
	
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
        $data['result']=$this->stu->showExamResultFull(urldecrypt($result_id));
		
	 
        $this->template->load('educational','frontend/exam/exam_result_chart',$data);
    }
	
	
	function searchstudent()
	{
		$userId = $this->getCurrentUserId();
		$getData = $this->edu->searchStudent();
		
		if($this->input->post("set_search_email")!="")
		{
			$userid=$this->getCurrentUserId();
			
			$this->edu->addStudentInstitute($userid);
			$ur = $this->edu->updateStudentInstitute($userid);
			
			$sendMailTo = $this->input->post('set_search_email');
			$name = $getData->name;
			$username = $getData->username;
			$password = $getData->password;
			
		//	$link = base_url("student-mail-login/".$username."/".$password);
			$link = base_url("student-mail-login/".urlencrypt($username));
			
			
			// $link = base_url("sign-in.html");
 
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
		$this->form_validation->set_rules('last_name', 'last_name', 'trim|required');
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
    
     function addNotification(){
     
	$notification_data=array(
                'title'           =>  $this->input->post('title'),
                'notification_type' =>  $this->input->post('notification_type'),
                'notification'    =>  $this->input->post('content'),
		'created_at'		=>	date('Y-m-d G:i:s'),
		'created_by'  => $this->session->userdata('userdata')['usertype']
            );
            $this->db->insert('notification',$notification_data);
            $this->message->set('Notification sent successfully.', 'success', TRUE);
            $this->template->load('educational','frontend/educational/notification_list1');
            
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
			
			$option.= '</select></div><div class="col-md-3"><label class="pull-left">Number of Question</label><input type="number" min="1" value="" name="subject_ques_num[]" required class="form-control" onchange="onQC()"></div><div class="col-md-3"><a href="javascript:;" class="btn btn-primary btn-lg" style="margin-top:21px;" id="add_dynamic_subject" onclick="getMoreSubjectData();"><i class="fa fa-plus-square"></i></a></div>';
		}
		else
		{
			$option = '<div class="col-md-6"><label class="pull-left">Select Subject</label>
			<select name="subject[]" class="form-control" required="required" id="subject_id" onchange="getExam(this.value)" >
			<option value="" selected="selected">Choose Subject</option>';
		}
		
		echo json_encode($option);
		
	}
	
	/*function getSubjectJson(){
		$courseId = $this->input->post("course");
		$response = $this->edu->loadSubject($courseId);
		echo json_encode($response);
	}
	
	function getMoreSubjectJson(){
		$courseId = $this->input->post("course");
		$response = $this->edu->loadSubject($courseId);
		echo json_encode($response);
	}*/
		
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
			
			$option.= '</select></div><div class="col-md-3"><label class="pull-left">Number of Question</label><input type="number" min="1" value="" name="subject_ques_num[]" required class="form-control" onchange="onQC()"></div><div class="col-md-3"><a href="javascript:;" class="btn btn-danger btn-lg" style="margin-top:21px;" onclick="removeSubjectBox('.$randNum .');"><i class="fa fa-trash"></i></a></div></div><div class="clearfix"><br>&nbsp;</div>';
		}
		else
		{
			$option = '<div id="'.$randNum.'"><div class="col-md-6" ><label class="pull-left">Select Subject</label>
			<select name="subject[]" class="form-control" required="required" id="subject_id" onchange="getExam(this.value)" >
			<option value="" selected="selected">Choose Subject</option>';
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
		else
		{
			$option = '<label class="pull-left">Select Exam</label><select name="exam" class="form-control" required="required" id="exam_id" onchange="getModule(this.value)"><option value="" selected="selected">Choose Exam</option>';
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
		else
		{
			$option = '<label class="pull-left">Select Module</label><select name="module" class="form-control" required="required" id="module_id" onchange="getSubModule(this.value)" ><option value="" selected="selected">Choose Module</option>';
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
			$option = '<label class="pull-left">Select Sub Module</label><select name="sub_module" class="form-control" required="required" id="sub_module_id"><option value="" selected="selected">Choose Sub Module</option>';

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
		
		 $config['cur_tag_open'] = '<li><a class="current">';

    // Close tag for CURRENT link.
    $config['cur_tag_close'] = '</a></li>';

    // By clicking on performing NEXT pagination.
    $config['next_link'] = 'NEXT';
    
    // last tag opening tag
    $config['next_tag_open'] = '<li>';
    
    // last tag closing tag
    $config['next_tag_close'] = '</li>';
    
    // By clicking on performing PREVIOUS pagination.
    $config['prev_link'] = 'PREV';
    
    // last tag opening tag
    $config['prev_tag_open'] = '<li>';
    
    // last tag closing tag
    $config['prev_tag_close'] = '</li>';
    
    // first tag opening tag
    $config['first_tag_open'] = '<li>';

    // first tag closing tag

    $config['first_tag_close'] = '</li>';

    // last tag opening tag
    $config['last_tag_open'] = '<li>';

    // last tag closing tag

    $config['last_tag_close'] = '</li>';
    
    # Open tag for pagination.
    $config['full_tag_open'] ='<ul class="pagination">';
    
    # close tag for pagination
    $config['full_tag_close'] = '</ul>';
    
    #  The opening tag for the “digit” link.
    $config['num_tag_open'] = '<li>';


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
		 $config['cur_tag_open'] = '<li><a class="current">';

    // Close tag for CURRENT link.
    $config['cur_tag_close'] = '</a></li>';

    // By clicking on performing NEXT pagination.
    $config['next_link'] = 'NEXT';
    
    // last tag opening tag
    $config['next_tag_open'] = '<li>';
    
    // last tag closing tag
    $config['next_tag_close'] = '</li>';
    
    // By clicking on performing PREVIOUS pagination.
    $config['prev_link'] = 'PREV';
    
    // last tag opening tag
    $config['prev_tag_open'] = '<li>';
    
    // last tag closing tag
    $config['prev_tag_close'] = '</li>';
    
    // first tag opening tag
    $config['first_tag_open'] = '<li>';

    // first tag closing tag

    $config['first_tag_close'] = '</li>';

    // last tag opening tag
    $config['last_tag_open'] = '<li>';

    // last tag closing tag

    $config['last_tag_close'] = '</li>';
    
    # Open tag for pagination.
    $config['full_tag_open'] ='<ul class="pagination">';
    
    # close tag for pagination
    $config['full_tag_close'] = '</ul>';
    
    #  The opening tag for the “digit” link.
    $config['num_tag_open'] = '<li>';


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
		$data['module_list'] = $this->edu->getModuleSubjectWiseList($userid);
		$data['subject_list'] = $this->edu->getSubjectList($userid);
		
		$si = $this->input->post("subject_id");
		$mi = $this->input->post("module_id");
		
		if(!empty($si)){
			$data['si'] = $si;
			$data['marr'] = $this->edu->getModuleBySubject($si);
		}else{
			$data['si'] = '';
			$data['marr'] = array();
		}
			
		if(!empty($mi)){
			$data['mi'] = $mi;
		}else{
			$data['mi'] = '';
		}
		
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
		$modIn = $this->edu->getModuleInfo($modId);
		$data['module_info'] = $modIn;
		//$data['module_list'] = $this->edu->getModuleSubjectWiseList($userid);
		
		$data['module_list'] = $this->edu->getModuleBySubject($modIn->module_subject_id);
		
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
       
        $subject_id = trim($this->input->post("subject_id"));
       
        
        $userid=$this->getCurrentUserId();
        
        
        $module = $this->input->post("module");
        $sub_module = $this->input->post("sub_module");
        
    //    if(!empty($this->input->get('per_page'))){
      //      $page=$this->input->get('per_page');
       // }
		
		$data['subject_listing']=$this->edu->getSubjectList("1");
		
        $data['test_ques']=$this->edu->get_test_questions($page,$userid,$subject_id,$module,$sub_module);
		
        $number_of_questions=$this->edu->total_test_question($userid,$subject_id,$module,$sub_module); 		 
        $data['pages']=get_froentend_pagination('educational/test_questions',$number_of_questions);
        
        
        $this->template->load('educational','frontend/educational/test_questions',$data);
    
	}
	function questionbank1()
	{
	$page_num=0;
        $page_num=trim($this->input->post("page_no"));
       
        $subject_id = trim($this->input->post("subject_id"));
        
        $module = $this->input->post("module");
        $sub_module = $this->input->post("sub_module");
        $userid = trim($this->input->post("admin_id"));
                if(!(!isset($userid) || trim($userid)===''));
                else
                $userid=$this->getCurrentUserId();
                
		
		$data['subject_listing']=$this->edu->getSubjectList("1");
		
        $data['test_ques']=$this->edu->get_test_questions($page_num,$userid,$subject_id,$module,$sub_module);
		$data['test']="display:none";
		 
         $data['test_ques']=$this->edu->get_test_questions($page_num,$userid,$subject_id,$module,$sub_module);
		
        $number_of_questions=$this->edu->total_test_question($userid,$subject_id,$module,$sub_module); 
        $data['total_no_of_question'] = $number_of_questions; 
        $data['pages']=get_froentend_pagination('educational/test_questions',$number_of_questions);
        //$echo $page;
        $data['current_page']=$page_num; 
        
        $this->template->load('educational','frontend/educational/test_questions_ajax',$data);
    
	}
	
	function addExamQuestion() // add question to exam
	{
		$userid=$this->getCurrentUserId();
		$data['exam_list']=$this->edu->loadExamListAll($userid);
		$this->template->load('educational','frontend/educational/select_exam',$data);
	}
	function addExamQuestionMock() // add question to exam
	{
		$userid=$this->getCurrentUserId();
		$data['exam_list']=$this->edu->loadExamListAll($userid);
		$this->template->load('educational','frontend/educational/select_exam',$data);
	}
	
	function chooseExamQuestion() // course & subject fiter in add question to exam
	{
		$userid = $this->getCurrentUserId();
		$data['course_list'] = $this->edu->getAllCourse($userid);
		$data['exam_id'] = $this->input->post("exam_id");
		$ec = $this->edu->getExamCourse($data['exam_id']);
		$data['exam_course'] = $ec;
		$data['test']="display:none";
		$response = $this->edu->getSubjects($userid, $ec['exam_id'], $ec['course_id']);
		$data['subjects_list'] = $response;
		$this->template->load('educational','frontend/educational/add_question_filter',$data);
	}
	
	function gSF() // ansh - get subject filter
	{
		$uid = $this->getCurrentUserId();
		$eid = $this->input->post("exam_id");
		$cid = $this->input->post("course");
		$option = '';
		//$response = $this->edu->loadSubject($cid);
		$response = $this->edu->getSubjects($uid, $eid, $cid);
		if(count($response)>0)
		{
			$option = '<label class="pull-left">Select Subject</label>
			<select name="subject_id" class="form-control" required="required" id="subject_id" onchange="gMF()" >
			<option value="" selected="selected">Choose Subject</option>';
			foreach($response as $res)
			{
				$option.= '<option value="'.$res['subject_id'].'">'.$res['subject_title'].'</option>';
			}
			$option.= '</select></div>';
		}
		else
		{
			$option = '<label class="pull-left">Select Subject</label>
			<select name="subject_id" class="form-control" required="required" id="subject_id" onchange="gMF()" >
			<option value="" selected="selected">Choose Subject</option>';
		}
		echo json_encode($option);
		//echo json_encode(array($response));
	}
	
	function gMF() // ansh - get module filter
	{
		$uid = $this->getCurrentUserId();
		$eid = $this->input->post("exam_id");
		$subject_id = $this->input->post("subject_id"); 
		$response = $this->edu->getModuleBySubject($subject_id);
		$option = '';
		if(count($response)>0)
		{
			$option = '<label class="pull-left">Select Module</label><select name="module" class="form-control" id="module_id" onchange="gSMF()" ><option value="" selected="selected">Choose Module</option>';
			foreach($response as $res)
			{
				$option.= '<option value="'.$res->module_id.'">'.$res->module_title.'</option>';
			}
			$option.= '</select>';
		}
		else
		{
			$option = '<label class="pull-left">Select Module</label><select name="module" class="form-control" id="module_id" onchange="gSMF()" ><option value="" selected="selected">Choose Module</option>';
		}
		echo json_encode($option);
	}
	
	function gSMF() // ansh - get sub module filter
	{
		$uid = $this->getCurrentUserId();
		$eid = $this->input->post("exam_id");
		$moduleId = $this->input->post("module");
		$response = $this->edu->getSubModuleList($moduleId);
		$option ='';
		if(count($response)>0)
		{
			$option = '<label class="pull-left">Select Sub Module</label><select name="sub_module" class="form-control" id="sub_module_id"><option value="" selected="selected">Choose Sub Module</option>';
			foreach($response as $res)
			{
				$option.= '<option value="'.$res->module_id.'">'.$res->module_title.'</option>';
			}
			$option.= '</select>';
		}
		echo json_encode($option);
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
		else
		{
			$option = '<label class="pull-left">Select Subject</label>
			<select name="subject_id" class="form-control" required="required" id="subject_id" onchange="getModuleFilter()" >
			<option value="" selected="selected">Choose Subject</option>';
		}
		echo json_encode($option);
	}
	
	function getModuleFilter()
	{
		$subject_id = $this->input->post("subject_id"); 
		$response = $this->edu->getModuleBySubject($subject_id);
		$option = '';
		if(count($response)>0)
		{
			$option = '<label class="pull-left">Select Module</label><select name="module" class="form-control" id="module_id" onchange="getSubModuleFilter()" ><option value="" selected="selected">Choose Module</option>';
			foreach($response as $res)
			{
				$option.= '<option value="'.$res->module_id.'">'.$res->module_title.'</option>';
			}
			$option.= '</select>';
		}
		else
		{
			$option = '<label class="pull-left">Select Module</label><select name="module" class="form-control" id="module_id" onchange="getSubModuleFilter()" ><option value="" selected="selected">Choose Module</option>';
		}
		echo json_encode($option);
	}
	
	function getSMFilter()
	{
		 $moduleId = $this->input->post("module");
		 
		$response = $this->edu->getSubModuleList($moduleId);
		
		$option ='';
		
		if(count($response)>0)
		{
			$option = '<label class="pull-left">Select Sub Module</label><select name="sub_module" class="form-control" id="sub_module_id"><option value="" selected="selected">Choose Sub Module</option>';

			foreach($response as $res)
			{
				$option.= '<option value="'.$res->module_id.'">'.$res->module_title.'</option>';
			}

			$option.= '</select>';
		}
 
		
		echo json_encode($option);
		
	}
 
	function filterQuestion()
	{
                $my_or_vprep = $this->input->post("source_filter");
                
                
                $userid=$this->getCurrentUserId();
                if($my_or_vprep=="vprep"){
                $userid=1;
                }
		$data['course_list']=$this->edu->getAllCourse($userid);
		
		$data['exam_id'] = $this->input->post("exam_id");
		$data['course'] = $this->input->post("course");
		$data['subject_id'] = $this->input->post("subject_id");
		$data['module'] = $this->input->post("module");
		$data['level_id'] = $this->input->post("level_id");
		
		$page=0;
		$data['test']="display:none";
		$data['test_ques']=$this->edu->getFilterQuestions($page,$userid);
		 
		$this->template->load('educational','frontend/educational/add_question_inexam_bank',$data);
	}
	
	function filterQuestionUser()
	{       
                $my_or_vprep = $this->input->post("source_filter");
                
                
                $userid=$this->getCurrentUserId();
                
		$data['course_list']=$this->edu->getAllCourse($userid);
		
		$data['exam_id'] = $this->input->post("exam_id");
		$data['course'] = $this->input->post("course");
		$data['subject_id'] = $this->input->post("subject_id");
		$data['module'] = $this->input->post("module");
		
		
		
		$data['course_list'] = $this->edu->getAllCourse($userid); $data['exam_id'] = $this->input->post("exam_id");
		$ec = $this->edu->getExamCourse($data['exam_id']); $data['exam_course'] = $ec;
		$response = $this->edu->getSubjects($userid, $ec['exam_id'], $ec['course_id']); $subject_num = [];
		$count_num=0;
		foreach($response as $resSub){
		$subject_num[$count_num]["title"] = $resSub["subject_title"];
		$subject_num[$count_num]["title_id"] = $resSub["subject_id"];
		$subject_num[$count_num]["num"] = $this->edu->getSubjectQuestionNumber(trim($this->input->post("exam_id")), trim($resSub["subject_id"]));
		$subject_num[$count_num]["count"] = count($this->edu->getFilterQuestionsUserSubject(0,$userid,$resSub["subject_id"]));
		 $count_num = $count_num+1;
		 }
		$data['subject_num']=$subject_num;		
		$page=0;
		$data['test']="display:none";
		$data['total_number']= $this->edu->getSubjectQuestionNumber(trim($this->input->post("exam_id")), trim($this->input->post("subject_id")));
		$data['test_ques']=$this->edu->getFilterQuestionsUser($page,$userid);
		 
		$this->template->load('educational','frontend/educational/add_question_inexam_user',$data);
	}
	
	function saveExamQuestion()
	{
		$userid=$this->getCurrentUserId();
		
		$arr = $this->edu->loadExamById($userid, $this->input->post("exam_id"));
		
		$eid = $this->input->post("exam_id");
		$cid = $this->input->post("course");
		$sid = $this->input->post("subject_id");
		
		$data['exam_id'] = $this->input->post("exam_id");
		$data['course'] = $this->input->post("course");
		$data['subject_id'] = $this->input->post("subject_id");
		$data['module'] = $this->input->post("module");
		
		$data['test_ques'] = $this->edu->getFilterQuestions(0, $userid);
		
        $this->form_validation->set_rules('exam_id', 'Parent Module', 'required');
        $this->form_validation->set_rules('course', 'Module', 'required');
        $this->form_validation->set_rules('subject_id', 'Subject', 'required');
        //$this->form_validation->set_rules('module', 'Module Name', 'required');
        
		$esq = $this->edu->countExamSubjectQuestions($cid, $sid, $eid);
		$essq = $this->edu->countExamSubjectSelectedQuestions($cid, $sid, $eid, $userid);
		
		$selQus = $this->input->post("add_Question");
		
		//$x = ((int) $arr['tq']) - ((int) $arr['sq']);
		$x = $esq - $essq;
		$y = count($selQus);
		
		//$str = 'cid - '.$cid.' sid - '.$sid.' eid - '.$eid.' esq - '.$esq.' essq - '.$essq.' x - '.$x.' y - '.$y;
		
		if($y <= $x)
		{
			if ($this->form_validation->run() == FALSE)
			{
				$this->template->load('educational','frontend/educational/add_question_inexam', $data);
			}
			else
			{
				$cat_id=$this->edu->addQuestionToExam($userid);
				$this->message->set('Questions Added Successfully !!', 'success', TRUE, '');
				redirect('educational/addExamQuestion','refresh');
			}
		}
		else
		{
			$this->message->set('You cannot select the questions exceeding exam limit ', 'warning', TRUE, '');
			$this->template->load('educational','frontend/educational/add_question_inexam', $data);
		}
	}
	function addQuestionToExamUser(){
	$eid = $this->input->post("exam_id");
	$userid=$this->getCurrentUserId();
	$cat_id=$this->edu->addQuestionToExam($userid);
	$data['exam_id'] = $this->input->post("exam_id");
		$data['course'] = $this->input->post("course");
		$data['subject_id'] = $this->input->post("subject_id");
		$data['module'] = $this->input->post("module");
	$data['test_ques']=$this->edu->get_test_exam_questions($eid,0);
	$this->template->load('educational','frontend/educational/add_question_inexam_user_snapshot', $data);
	
	
	}
	function show_snap_shot($eid){
	
	$userid=$this->getCurrentUserId();
	$data['test_ques']=$this->edu->get_test_exam_questions($eid,0);
	$data['exam_id'] = $eid;
		$data['course'] = "";
		$data['subject_id'] = "";
		$data['module'] = "";
	$this->template->load('educational','frontend/educational/add_question_inexam_user_snapshot', $data);
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
	
 
	
	function examstatusupdate($examId,$status,$is_mock)
	{
		$examId = urldecrypt($examId);
		
	$total_number_question = $this->edu->getExamMaxQuestion($examId); 
	$total_number_question_added = $this->edu->getExamMaxQuestionAdded($examId);


		
		if($total_number_question_added<$total_number_question[0]['exam_max_ques']){
		$this->message->set('More question needs to be added', 'success', TRUE, '');
		}else{
		 $this->db->where("exam_id",$examId);
		 $this->db->set("exam_status",$status);
	 $this->db->update("exam_list");
		
		 $this->message->set('Status changed successfully', 'success', TRUE, '');}
		 if($is_mock)
		redirect('educational/exam_list_mock');
		else 
		redirect('educational/exam_list');	
			
	}
	
	function deleteStudent($id=NULL)
	{
		$id = urldecrypt($id);

        $this->db->delete('vprep_student_institute',array('si_row_id'=>$id));
		
		$this->message->set('Student has been deleted successfully.', 'success', TRUE);
		
        redirect('educational/students');
    }
    
     function engage_home() {
    	$result = $this->db->query("select id, view_count, type, heading, details, subject, created_at from college_post order by created_at desc limit 1")->row_array();
    	
    	$post_id = $result['id'];
    	if(!($post_id > 0)){
    	$post_id = 0;
    	}
    	
    	$this->db->query("update college_post set view_count = view_count+1 where id = '$post_id' ");
    	
    	$data["post_reply"] = $this->db->query("select cprh.id, cprh.post_id, cprh.post_response, cprh.is_student, cprh.user_id, cprh.created_at, cprh.updated_at, u.name, u.city from college_post_response_history cprh inner join users u on u.id = cprh.user_id where post_id = $post_id order by created_at desc")->result_array(); 
    	
    	$timestamp = $result['created_at'];
	$datetimeFormat = 'Y-m-d H:i:s';

$date = new \DateTime();
$data["post_date"] = $date->setTimestamp($timestamp);

$user_id = $this->session->userdata('userdata')['userid'];
$data["post_user_name"] = $this->db->query("select name from users where id = $user_id limit 1")->row_array();
$time = strtotime("-1 week");
$data["current_week"] = $this->db->query("SELECT * FROM college_post where created_at >='$time' order by id desc ")->result_array();

$data["options"] = $this->db->query("select cpo.id, cpo.option, round((count(cprh.poll_response)/total_vote)*100) as percent from college_poll_options cpo left join college_post_response_history cprh on cpo.id = cprh.poll_response 
left join (select post_id, count(*) as total_vote from college_post_response_history group by post_id ) a on a.post_id = cpo.poll_id 
where poll_id = $post_id group by cpo.id, cpo.option")->result_array();




    
    	$data["post_detail"] = $result;
    	 
    	
   	
    
    	
  $this->template->load('frontend','frontend/home/engage_home',$data); 
 
    }
    
    function test_json(){
    $this->edu->test_json();
    }
    
    function weekly_json(){
    $this->edu->weekly_json();
    }
    
    function post_json() {
    $this->edu->post_json();
    }
    
    
	
}
