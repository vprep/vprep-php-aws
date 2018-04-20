<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('student_model','stu');
        if(!check_student_login()){
            redirect(base_url());
        }
        $this->load->model('educational_model','edu');
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
	
    # function for check student profile
    function student_profile(){
        $data[]=array();
        $this->template->load('frontend','frontend/student/profile',$data);
    }
    
    # function for select online exam screen
    function select_exam(){
        $data['test_cat']=$this->edu->get_test_categories();
        $this->template->load('frontend','frontend/exam/select_exam',$data);
    }
    
    # function for about full description of tesr 
    function about_exam($exam_id=0){
        $data['test_cat']=$this->edu->get_test_category(urldecrypt($exam_id));
        $this->stu->unset_test_variable();
        $this->template->load('frontend','frontend/exam/about_exam',$data);
    }
    
    # function for start test
    public function start_exam($exam_id){
        //pr($this->session->all_userdata());
        $exam_id=urldecrypt($exam_id);
        $data['page']=0;
        $data['total_exam_question']=$this->edu->get_test_category_questions_count($exam_id);
        $data['test_time']=$this->edu->get_test_time($exam_id);
        
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
        
        if ($this->input->is_ajax_request()) {
            $data['page']=$this->input->post('page');
            $data['test_question']=$this->edu->get_test_category_questions($exam_id,$data['page']);
            if(!empty($this->session->userdata('test_answers')) && array_key_exists($data['test_question']['id'],$this->session->userdata('test_answers'))){
                $data['sl_option']=$this->session->userdata('test_answers')[$data['test_question']['id']];
            }
            echo $this->load->view('frontend/exam/single_question',$data,true);
        }else{
            $data['test_question']=$this->edu->get_test_category_questions($exam_id,$data['page']);
             $this->template->load('frontend','frontend/exam/exam',$data);
           // $this->load->view('frontend/exam/exam',$data);
        }
    }
    
    # function for sumit full test
    function exam_result(){
        $result_id=$this->stu->exam_result();
        redirect("show_result/".urlencrypt($result_id));
    }
    
    #function my score page
    function my_score(){
        $data['my_score']=$this->stu->my_score($this->session->userdata('userdata')['userid']);
        $this->template->load('frontend','frontend/student/my_score',$data);
    }

    #function ebooks page
    function ebooks(){
  //      $data['my_score']=$this->stu->my_score($this->session->userdata('userdata')['userid']);
        $this->template->load('frontend','frontend/student/ebooks');
    }
 #function ebooks page
    function ebook_details(){
  //      $data['my_score']=$this->stu->my_score($this->session->userdata('userdata')['userid']);
        $this->template->load('frontend','frontend/student/ebooks_details');
    }

    # function for show result
    function show_result($result_id){
        $this->stu->unset_test_variable();
        $data['result']=$this->stu->show_result(urldecrypt($result_id));
        $this->template->load('frontend','frontend/exam/exam_result',$data);
    }
    
    # function for show result
    function exam_result_chart($result_id){
        $this->stu->unset_test_variable();
        $data['result']=$this->stu->show_result(urldecrypt($result_id));
        $this->template->load('frontend','frontend/exam/exam_result_chart',$data);
    }
    
    # function for search insatitute
    function search(){
        $data[]=array();
        if(!empty($this->input->post())){
            $data['pdata']=$this->input->post();
            $data['list']=$this->edu->search();
        }
        $this->template->load('frontend','frontend/student/search',$data);
    }
}