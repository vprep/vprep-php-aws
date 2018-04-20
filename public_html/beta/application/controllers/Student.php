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
        $data[]=array();
        $this->template->load('frontend','frontend/home/student',$data);
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
	function community(){
	
	
	$data[]=array();
			$this->template->load('frontend','frontend/student/community',$data);
	
	}
	
	function notification(){
	
	
	$data[]=array();
			$this->template->load('frontend','frontend/student/notification',$data);
	
	}
	
	function mail_contact_us(){
	
	
	$data[]=array();
			$this->template->load('frontend','frontend/student/mail_contact_us',$data);
	
	}
	function uploadresume(){
	
	
	$data[]=array();
			$this->template->load('frontend','frontend/student/uploadresume',$data);
	
	}
	
	
	
	function success00_vprep_payment($type){
	
	
	$data[]=array();
			$this->template->load('frontend','frontend/student/pricing',$data);
	
	}
	
	function contact_us($sent=0){
	if($sent)
	$data['sent']= true;

	
	
	$data[]=array();
			$this->template->load('frontend','frontend/student/student_contact_us',$data);
	
	}
	
	
	
	
	function cancelled00_vprep_payment($type){
	
	$data[]=array();
			$this->template->load('frontend','frontend/student/pricing',$data);
	
	}
	function failed00_vprep_payment($type){
	
	$data[]=array();
			$this->template->load('frontend','frontend/student/pricing',$data);
	
	}
	
	function leaderboard(){
	
	$data[]=array();
			$this->template->load('frontend','frontend/exam/leaderboard',$data);
	
	}
	
    # function for check student profile
    function student_profile(){
		
		// print_r($this->session->userdata('userdata'));
		
        //$data['getData'] = $this->stu->loadStudent($this->getCurrentUserId());
        $data['getData'] = $this->stu->loadStudentProfile($this->getCurrentUserId());
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
		//$this->form_validation->set_rules('current_institute', 'current institute', 'trim');
		//$this->form_validation->set_rules('prepairing_for', 'prepairing_for', 'trim|required');
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
    
    function pricing(){
        $data[]=array();
			$this->template->load('frontend','frontend/student/pricing',$data);	
		
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
		$dt = date('Y-m-d'); 
		//echo "where is this swadhin";
        $data['test_cat']=$this->edu->loadOnGoingExamListAll($userid, $dt);
		$data['dt'] = $dt;
        $this->template->load('frontend','frontend/exam/select_exam',$data);
    }
    
    #function to load home page
    function vprep_home(){
    
    $this->template->load('frontend','frontend/home/home');
    
    
    }
    
    # function for about full description of tesr 
    function about_exam($exam_id=0){
        $data['test_cat']=$this->edu->getExamDetail(urldecrypt($exam_id));
        $this->stu->unset_test_variable();
        $this->template->load('frontend','frontend/exam/about_exam',$data);
    }
    
    # function for start test
    public function start_exam($exam_id){ // ansh
      //  print_r($this->session->all_userdata());
        $exam_id=urldecrypt($exam_id);
		 
		 
	//	if($exam_id==$this->session->userdata("submitedExam"))
	//	{
	//	  redirect("my_score");
	//	}
		 
	 
		
        $data['page']=0;
		 $total_question=$this->edu->getTotalExamQuez($exam_id);
		 
		 
        $data['total_exam_question']= $total_question;
		 
        $data['test_time']=$this->edu->getExamInfo($exam_id)->exam_time;
         
        # set test starting time and test category in session
        if(empty($this->session->userdata('exam_detail'))){
            $this->session->set_userdata('exam_detail',array('category'=>$exam_id,'start_at'=>time()));
        }
        if(empty($this->session->userdata('time_last_question'))){
        $date = date('Y-m-d H:i:s');
                        $this->session->set_userdata('time_last_question',$date);
        }
        
        # session variable for save question nd answers
        if(!empty($this->input->post()) && $this->input->is_ajax_request() && !empty($this->input->post('option'))){
            if(empty($this->session->userdata('test_answers'))){
                $this->session->set_userdata('test_answers',
                        array($this->input->post('question_id')=>array('time'=>0,'option'=>$this->input->post('option'))));
                        
                        
                        
                     $date = date('Y-m-d H:i:s');   
               $answers=$this->session->userdata('test_answers');
               $answers[$this->input->post('question_id')]['time']=0;
                $date_diff_first =strtotime($date) - strtotime($this->session->userdata('time_last_question'));
                $date_diff_first_1 = (int)$date_diff_first;
                $answers[$this->input->post('question_id')]['time'] = $date_diff_first_1;
                
                $this->session->set_userdata('test_answers',$answers);
            }
            else{
                $answers=$this->session->userdata('test_answers');
                $answers[$this->input->post('question_id')]['option']=$this->input->post('option');
                
                
                $date = date('Y-m-d H:i:s');
               if(!empty($answers[$this->input->post('question_id')]['time'])){
                $last_time_use = (int)$answers[$this->input->post('question_id')]['time'];
                $last_time = (int)$last_time_use;
                $dateCurrent = strtotime($date);
                $dateOld= strtotime($this->session->userdata('time_last_question'));
                $date_diff = $dateCurrent - $dateOld;
                $date_diff_use= (int)$date_diff;
                $diff_time= $date_diff_use + $last_time;
                $answers[$this->input->post('question_id')]['time'] = $diff_time;}
                else 
                $answers[$this->input->post('question_id')]['time']=strtotime($date) - strtotime($this->session->userdata('time_last_question'));
                $this->session->set_userdata('time_last_question',$date);
                $this->session->set_userdata('test_answers',$answers);
            }
            //pr($this->session->userdata('test_answers'));
        }
		
	 
        
        if ($this->input->is_ajax_request()) 
		{
		
            $data['page']=$this->input->post('page');
			
			$data['total_exam_question']= $total_question;
            $data['test_question']=$this->edu->get_test_exam_questions($exam_id,$data['page'])[$data['page']];
        /*    if(!empty($this->session->userdata('test_answers')) && array_key_exists($data['test_question']['id'],$this->session->userdata('test_answers'))){
                $data['sl_option']=$this->session->userdata('test_answers')[$data['test_question']['id']];
            }*/
            echo $this->load->view('frontend/exam/single_question',$data,true);
        }
		else
		{
		
            $data['test_question']=$this->edu->get_test_exam_questions($exam_id,$data['page'])[0];
           // echo count($data['test_question'][0]);
 
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
    function my_solution($eid){
	
	$userid=$this->getCurrentUserId();
	$data['test_ques']=$this->edu->get_test_exam_questions($eid,0);
	$data['exam_id'] = $eid;
		$data['course'] = "";
		$data['subject_id'] = "";
		$data['module'] = "";
	$this->template->load('frontend','frontend/student/add_question_inexam_user_snapshot', $data);
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
	
	// ---------------------------------       ANSH        ------------------------------------------
	
	public function start_new_exam($exam_id){
		$userId = $this->getCurrentUserId();
        $exam_id = urldecrypt($exam_id);
		
		if($exam_id == $this->session->userdata("submitedExam")){
			redirect("my_score");
		}
		
		$examResultData = $this->stu->isExamAlreadyStarted($userId, $exam_id);
		$examInfo = $this->stu->fetchExamInfo($exam_id);
		
		$isStarted = count($examResultData);
		
		if($isStarted == 0) {
			$ti = $examInfo['exam_time'];
			$resultId = $this->stu->createExamEntry($userId, $exam_id, $ti);
			$hm = explode(':', date('H:i', mktime(0, $ti)));
			$data['test_time'] = $hm[0];
			$data['test_time2'] = $hm[1];
			$data['test_time3'] = 0;
		} else {
			$resultId = $examResultData['id'];
			$ti = $examResultData['timer'];
			$ti = $this->stu->secondsToTime($ti);
			$data['test_time'] = $ti['h'];
			$data['test_time2'] = $ti['m'];
			$data['test_time3'] = $ti['s'];
			$this->session->set_userdata('test_answers', json_decode(stripslashes($examResultData['answers']), TRUE));
			$this->session->set_userdata('question_timer', json_decode(stripslashes($examResultData['question_timer']), TRUE));
		}
		
		/*echo 'is started : <pre>' . print_r($examResultData, TRUE) . '</pre>';
		echo 'exam entry : <pre>' . $resultId . '</pre>';
		echo 'Exam Info : <pre>' . print_r($examInfo, TRUE) . '</pre>';
		echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';*/
		
        $data['page'] = 0;
		$total_question = $this->edu->getTotalExamQuez($exam_id);
		
        $data['total_exam_question'] = $total_question;
         
		if(empty($this->session->userdata('exam_result_id'))){
            $this->session->set_userdata('exam_result_id', $resultId);
        } 
		
        if(empty($this->session->userdata('exam_detail'))){
            $this->session->set_userdata('exam_detail', $examInfo);
        }
        
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
			/*$ans = $this->session->userdata('test_answers');
			if(empty($ans)) {
				$ans[$qid] = array('answer' => $this->input->post('option'), 'time' => 0);
			} else {
				if(array_key_exists($qid, $ans)){
					$js = $ans[$qid];
					$js['answer'] = $this->input->post('option'); 
					$js['time'] = ((int) $js['time']) + 1;
					$ans[$qid] = $js;
				}else{
					$ans[$qid] = array('answer' => $this->input->post('option'), 'time' => 0);
				}
			}
			$this->session->set_userdata('test_answers', $ans);*/
        }
		
        if ($this->input->is_ajax_request()) {
            $data['page'] = $this->input->post('page');
			$data['total_exam_question'] = $total_question;
            $data['test_question'] = $this->edu->get_test_exam_questions($exam_id, $data['page']);
            
			if(!empty($this->session->userdata('test_answers')) && 
			array_key_exists($data['test_question']['id'], $this->session->userdata('test_answers'))){
                $data['sl_option'] = $this->session->userdata('test_answers')[$data['test_question']['id']];
            }
			
            echo $this->load->view('frontend/exam/question', $data, true);
        } else {
			
			$data['test_question'] = $this->edu->get_test_exam_questions($exam_id, $data['page']);
			
			if(!empty($this->session->userdata('test_answers')))
				if(array_key_exists($data['test_question']['id'], $this->session->userdata('test_answers'))){
					$data['sl_option'] = $this->session->userdata('test_answers')[$data['test_question']['id']];
            }
			
            $data['test_question'] = $this->edu->get_test_exam_questions($exam_id, $data['page']);
            $this->template->load('exam_frontend','frontend/exam/new_exam', $data);
        }
	}
	
	function updateDB(){
		$timer = $this->input->post('t');
		$this->stu->updateExamResult($timer);
	}
	
	function updateSess(){
		$qid = $this->input->post("quesId");
		$ans = $this->session->userdata('question_timer');
		if(empty($ans)) {
			$ans[$qid] = 0;
		} else {
			if(array_key_exists($qid, $ans)){
				$ans[$qid] = ((int) $ans[$qid]) + 1;
			}else{
				$ans[$qid] = 0;
			}
		}
		$this->session->set_userdata('question_timer', $ans);
		echo json_encode($ans);
	}
	
	function submit_exam(){
		$this->stu->submit_exam();
		$result_id = $this->session->userdata('exam_result_id');
        redirect("show_result_new/".urlencrypt($result_id));
	}
	
	function show_result_new($result_id){
        $this->stu->unset_test_variable();
        $data['result']=$this->stu->showExamResultNew(urldecrypt($result_id));
        $this->template->load('frontend','frontend/exam/exam_result_new',$data);
    }
	
    function exam_time_map($result_id){
        $this->stu->unset_test_variable();
        $data['result'] = $this->stu->showExamResultFull(urldecrypt($result_id));
        $this->template->load('frontend','frontend/exam/exam_time_map', $data);
    }
}