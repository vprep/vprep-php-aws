<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('student_model','stu');
        if(!check_student_login()){
            redirect(base_url());
        }
        $this->load->model('educational_model','edu');
        $this->load->model('users_model','user');
    }
    
    # function user home
    function index(){
        $userid=$this->getCurrentUserId();
		
		$userDetail = $this->user->get_user_details($userid);
		
		$loadBy = $userDetail['created_by'];
		 
        $data['test_cat']=$this->edu->loadExamListAll($loadBy);
        echo "test";
		
        $this->template->load('frontend','frontend/exam/select_exam',$data);
    }
    
	function setQuestionFlag()
	{
		$id = $this->input->post("quesId");

		$getData = $this->session->userdata('flag_question');
		
		if($getData)
		{
			foreach($getData as $gd)
			{
				$flagData[] = $gd;
			}
			
			if(!in_array($id,$flagData))
			{
				$flagData[]=$id;
			}
			
		}
		else{
			$flagData[]=$id;
		}
		
	  
		$this->session->set_userdata('flag_question', $flagData);   
		
	}
	
    # function for check student profile
    function student_profile(){
		
		// print_r($this->session->userdata('userdata'));
		
        $data['getData'] = $this->stu->loadStudent($this->getCurrentUserId());
        $data['getInstituteData'] = $this->stu->loadAttachedInstituteData($this->getCurrentUserId());
		 
        $this->template->load('frontend','frontend/student/profile',$data);
    }
	
	function update_profile(){
        $data[]=array();
		
        $this->template->load('frontend','frontend/student/update_profile',$data);
    }
	
	function save_profile_update(){
        $data[]=array();
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('current_institute', 'current institute', 'trim');
		$this->form_validation->set_rules('prepairing_for', 'prepairing_for', 'trim|required');
		$this->form_validation->set_rules('first_name', 'first_name', 'trim|required');
		$this->form_validation->set_rules('phone', 'phone', 'trim|required');
		$this->form_validation->set_rules('address', 'address', 'trim|required');
		$this->form_validation->set_rules('city', 'city', 'trim|required');
		$this->form_validation->set_rules('state', 'state', 'trim|required');
		$this->form_validation->set_rules('zip', 'zip', 'trim|required');
	
		$this->form_validation->set_rules('gender', 'gender', 'trim|required');
 
		 
		 
		if ($this->form_validation->run() == FALSE)
		{
			 $this->template->load('frontend','frontend/student/update_profile',$data);			
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

 
						$this->template->load('frontend','frontend/student/update_profile',$data);
						
						 
					}
					else
					{
						$imageData = $this->upload->data();
						$picName = $imageData['file_name'];
						
						$data['msg'] = "Profile Updated Successfully !!";
						$this->stu->updateStudentInfo($picName);

					}
			}
			else
			{
				$data['msg'] = "Profile Updated Successfully !!";
				 $this->stu->updateStudentInfo();
			}
			
			
			
			 $this->template->load('frontend','frontend/student/update_profile',$data);
		}	
		
		
       
    }
	
    function changePassword(){
        $data[]=array();
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('new_password', 'New Password', 'trim');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[new_password]');
		 
		if ($this->form_validation->run() == FALSE)
		{
			 $this->template->load('frontend','frontend/student/update_profile',$data);			
		}
		else
		{
			$this->stu->changeStudentPassword();
			$data['msg']  = "Password Changed Successfully !!";
			$this->template->load('frontend','frontend/student/update_profile',$data);	
		}
	}
	
	
    # function for select online exam screen
    function select_exam(){
		$userid=$this->getCurrentUserId();
		
		$userDetail = $this->user->get_user_details($userid);
		
		$loadBy = $userDetail['created_by'];
		 
        $data['test_cat']=$this->edu->loadExamListAll($loadBy);
		
        $this->template->load('frontend','frontend/exam/select_exam',$data);
    }
    
    # function for about full description of tesr 
    function about_exam($exam_id=0){
        $data['test_cat']=$this->edu->getExamDetail(urldecrypt($exam_id));
        $this->stu->unset_test_variable();
        $this->template->load('frontend','frontend/exam/about_exam',$data);
    }
    
    # function for start test
    public function start_exam($exam_id){
      //  print_r($this->session->all_userdata());
        $exam_id=urldecrypt($exam_id);
		 
		 
		if($exam_id==$this->session->userdata("submitedExam"))
		{
			  redirect("my_score");
		}
		 
	 
		
        $data['page']=0;
		 $total_question=$this->edu->getTotalExamQuez($exam_id);
		 
		 
        $data['total_exam_question']= $total_question;
		 
        $data['test_time']=$this->edu->getExamInfo($exam_id)->exam_time;
         
        # set test starting time and test category in session
        if(empty($this->session->userdata('exam_detail'))){
            $this->session->set_userdata('exam_detail',array('category'=>$exam_id,'start_at'=>time()));
        }
        
        # session variable for save question nd answers
        if(!empty($this->input->post()) && $this->input->is_ajax_request() && !empty($this->input->post('option'))){
            if(empty($this->session->userdata('test_answers'))){
                $this->session->set_userdata('test_answers',
                        array($this->input->post('question_id')=>$this->input->post('option')));
            }
            else{
                $answers=$this->session->userdata('test_answers');
                $answers[$this->input->post('question_id')]=$this->input->post('option');
                $this->session->set_userdata('test_answers',$answers);
            }
            //pr($this->session->userdata('test_answers'));
        }
		
	 
        
        if ($this->input->is_ajax_request()) 
		{
            $data['page']=$this->input->post('page');
			
			$data['total_exam_question']= $total_question;
            $data['test_question']=$this->edu->get_test_exam_questions($exam_id,$data['page']);
            if(!empty($this->session->userdata('test_answers')) && array_key_exists($data['test_question']['id'],$this->session->userdata('test_answers'))){
                $data['sl_option']=$this->session->userdata('test_answers')[$data['test_question']['id']];
            }
            echo $this->load->view('frontend/exam/single_question',$data,true);
        }
		else
		{
            $data['test_question']=$this->edu->get_test_exam_questions($exam_id,$data['page']);
 
             $this->template->load('exam_frontend','frontend/exam/exam',$data);
           // $this->load->view('frontend/exam/exam',$data);
        }
    }
    
    # function for sumit full test
    function exam_result(){
        $result_id=$this->stu->exam_result();
        redirect("show_result/".urlencrypt($result_id));
    }
    
    #function my score page
    function my_score()
	{
		$userid=$this->getCurrentUserId();
			
        $data['my_score']=$this->stu->my_score($userid);
        $this->template->load('frontend','frontend/student/my_score',$data);
    }
    
    # function for show result
    function show_result($result_id){
		
        $this->stu->unset_test_variable();
        $data['result']=$this->stu->showExamResult(urldecrypt($result_id));
		 
        $this->template->load('frontend','frontend/exam/exam_result',$data);
    }
    
    # function for show result
    function exam_result_chart($result_id){
		 
		
        $this->stu->unset_test_variable();
        $data['result']=$this->stu->showExamResultFull(urldecrypt($result_id));
        $this->template->load('frontend','frontend/exam/exam_result_chart',$data);
    }
    
    # function for search insatitute
    function search()
	{
        $data[]=array();
        if(!empty($this->input->post())){
            $data['pdata']=$this->input->post();
           // $data['list']=$this->edu->search();
            $data['list']=$this->edu->searchHomeBox();
        }
        $this->template->load('frontend','frontend/home/student',$data);
    }
	
	function instituteDetail($insId)
	{
		$id = urldecrypt($insId);
		$data['inst_detail'] = $this->stu->getInstituteDetail($id)[0];
		
		// print_r($data);
		$this->template->load('frontend','frontend/home/institute_detail',$data);
	}
	
	
	
	
	/////////////////////////////////////////////////////////////////////////////////////
	
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
	
	function ebooks()
	{
		$data['book_list'] = $this->stu->getBookList();
		$this->template->load('frontend','frontend/ebook/test_ebook_list',$data);
	}
	
	function bookdetail($bookId)
	{
		$bookId = urldecrypt($bookId);
		$data['book_info'] = $this->stu->getBookDetail($bookId);
		$this->template->load('frontend','frontend/ebook/test_ebook_details',$data);
	}
}