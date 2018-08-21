<?php
ini_set('memory_limit', '2048M');

class Student extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('student_model','stu');
        if(!check_student_login()){
            redirect(base_url());
        }
// testing
        $this->load->model('educational_model','edu');
        $this->load->model('users_model','user');
    }

    # function user home
    function index(){
        $data[]=array();
        $this->template->load('frontend','frontend/home/student',$data);
    }
    function feedback_form(){
        $data[]=array();
        $this->template->load('frontend','frontend/student/feedback_form',$data);
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

    function leaderboard1($exam_id){

        $data["exam_data"]=$this->stu->top_ten_scorer($exam_id);
        $this->template->load('frontend','frontend/exam/leaderboard1',$data);

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

        $data['getData'] = $this->stu->loadStudentProfile($this->getCurrentUserId());
        $data['getInstituteData'] = $this->stu->loadAttachedInstituteData($this->getCurrentUserId());

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
                    $data['getData'] = $this->stu->loadStudentProfile($this->getCurrentUserId());
                    $data['getInstituteData'] = $this->stu->loadAttachedInstituteData($this->getCurrentUserId());
                    $this->template->load('frontend','frontend/student/update_profile',$data);

                }
            }
            else
            {
                $data['msg'] = "Profile Updated Successfully !!";
                $this->stu->updateStudentInfo();
                $data['getData'] = $this->stu->loadStudentProfile($this->getCurrentUserId());
                $data['getInstituteData'] = $this->stu->loadAttachedInstituteData($this->getCurrentUserId());
                $this->template->load('frontend','frontend/student/update_profile',$data);
            }

            $data['getData'] = $this->stu->loadStudentProfile($this->getCurrentUserId());
            $data['getInstituteData'] = $this->stu->loadAttachedInstituteData($this->getCurrentUserId());


            $this->template->load('frontend','frontend/student/update_profile',$data);
        }



    }

    function pricing(){
        $data[]=array();
        $this->template->load('frontend','frontend/student/pricing',$data);

    }
    function essayWriting($essayId){
        $data["topic"]=$this->db->query("select topic from essay_writing where id=$essayId")->result_array()[0];
        $data["essayId"]=$essayId;


  //      echo count($data["topic"]);

        $this->template->load('exam_frontend','frontend/student/essayWrite',$data);

    }
    function essayResult($essayId){
        $userId = $this->session->userdata('userdata')['userid'];

        $data["topic"]=$this->db->query("select * from essay_results where user_id=$userId and essay_writing_id=$essayId")->result_array()[0];
        $data["essayId"]=$essayId;


        //      echo count($data["topic"]);

        $this->template->load('frontend','frontend/student/essay_result',$data);

    }
    function essay_evalution(){

        $essay_writing_id=11;
        $userId = $this->session->userdata('userdata')['userid'];
        $answer=$_POST['essayAns'];
        $this->db->query("insert into essay_results(essay_writing_id,user_id,answer) values ($essay_writing_id,$userId,'$answer') " );
        echo '{}';
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
    function vprep_home() {
        $data["not_data"]=$this->stu->notification_list();
        $data["exam_data"]=$this->stu->top_ten_scorer('51');
        $this->template->load('frontend','frontend/home/home',$data);


    }



    # function for about full description of tesr
    function about_exam($exam_id=0){
    $userId = $this->session->userdata('userdata')['userid'];
    $testId = urldecrypt($exam_id);
        $data['test_cat']=$this->edu->getExamDetail(urldecrypt($exam_id));
        $data['progress']=$this->db->query("select id from exam_taken where exam_id = $testId && user_id = $userId and taken_status = '1' ")->result_array();
        $data['exam_given'] = $this->session->userdata('attempt_exam');
        
        $this->template->load('frontend','frontend/exam/about_exam',$data);
    }


    # function for start test
    public function start_exam($exam_id){ // ansh
        //  print_r($this->session->all_userdata());

        $exam_id=urldecrypt($exam_id);
        $userId = $this->session->userdata('userdata')['userid'];
       $result = $this->db->query("select id from exam_taken where exam_id = $exam_id && user_id = $userId and taken_status = '2' ")->result_array();
        if(sizeof($result) > 0){
            redirect("my_score");

        } else {
    
                $data['page']=0;
             /*   if($exam_id==71){
                $total_question=15;
                $data['test_time']=25;
                    
                }
                if($exam_id==72){
                $total_question=10;
                    $data['test_time']=35;
                    
                }
                
                if($exam_id==73){
                $total_question=40;
                    $data['test_time']=35;
                    
                }*/
                $total_question=$this->edu->getTotalExamQuez($exam_id);
          //     $total_question = 15;


                $data['total_exam_question']= $total_question;
                
                $data['test_exam_questions'] = $this->edu->get_test_exam_questions($exam_id, '0');

                $data['test_time']=$this->edu->getExamInfo($exam_id)->exam_time;

             
                if(empty($this->session->userdata('exam_detail'))){
                   
                        $this->session->set_userdata('exam_detail',array('category'=>$exam_id,'start_at'=>time()));  
                }
                
                if(empty($this->session->userdata('time_last_question'))) {
                    $date = date('Y-m-d H:i:s');
                    $this->session->set_userdata('time_last_question',$date);
                }

                # session variable for save question nd answers
                if(!empty($this->input->post()) && $this->input->is_ajax_request() && !empty($this->input->post('option'))) {
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
                    $this->session->set_userdata('attempt_exam',1);
                    $data['page']=$this->input->post('page');

                    $data['total_exam_question']= $total_question;

                    $data['test_question']=$this->session->userdata('test_question_session')[$data['page']];
                    $data['test_exam_questions']=$this->session->userdata('test_question_session');
                    
                    if(!empty($this->session->userdata('test_answers')) && array_key_exists($data['test_question']['id'],$this->session->userdata('test_answers'))){

                        $data['sl_option']=$this->session->userdata('test_answers')[$data['test_question']['id']]['option'];
                       

                    }
                    echo $this->load->view('frontend/exam/single_question',$data,true);
                    
                    
                }
                else {

                    
                    $this->stu->student_exam($exam_id,$userId,'1');
                    $total_exam_question_new = $this->edu->get_test_exam_questions($exam_id,$data['page']);
                    
                    $data['test_exam_questions'] = $total_exam_question_new;
                    $this->session->unset_userdata('test_question_session');
                    $this->session->set_userdata('test_question_session',$total_exam_question_new);
                    $data['test_question']=$total_exam_question_new[0];
                    $data['test_exam_questions'] = $total_exam_question_new;

                    // echo count($data['test_question'][0]);

                    $this->template->load('exam_frontend','frontend/exam/exam1',$data);
                    
                     
                    // $this->load->view('frontend/exam/exam',$data);
                }
            }


            //	if($exam_id==$this->session->userdata("submitedExam"))
            //	{
            //	  redirect("my_score");
            //	}


    }
    
    
public function sample_test($exam_id){



            $userId = $this->session->userdata('userdata')['userid'];

            $exam_1 = $exam_id;
            $exam_2 = $exam_id+1;
            $exam_3 = $exam_id+2;

    $data['exam_1']=$exam_1;
    $data['exam_2']=$exam_2;
    $data['exam_3']=$exam_3;
        
             $result1 = $this->db->query("select * from exam_taken where exam_id = $exam_1 and user_id = $userId and taken_status = '2' ")->result_array();
             
             if(sizeof($result1) > 0 ){
             
        
             	$this->session->set_userdata('exam_progress_71',"2");
             	$this->session->set_userdata('score_flag', true);             
             }   else {
             
             	$this->session->set_userdata('exam_progress_71',"1");
             	$this->session->set_userdata('score_flag', false);
             }

    $exam_71 = $this->session->userdata('exam_progress_71');

             $result3 = $this->db->query("select * from users where created_by = 1126 and id = $userId ")->result_array();

             if(sizeof($result3) > 0) {
                 $result2 = $this->db->query("select * from exam_taken where exam_id = $exam_2 and user_id = $userId and taken_status = '2' ")->result_array();

                 if(sizeof($result2) > 0 ){

                     $this->session->set_userdata('exam_progress_72',"2");
                     $this->session->set_userdata('score_flag', true);

                 } else {

                     $this->session->set_userdata('exam_progress_72',"1");
                     $this->session->set_userdata('score_flag', false);

                 }


                 $result3 = $this->db->query("select * from exam_taken where exam_id = $exam_3 and user_id = $userId and taken_status = '2' ")->result_array();

                 if(sizeof($result3) > 0 ){

                     $this->session->set_userdata('exam_progress_73',"2");
                     $this->session->set_userdata('score_flag', true);

                 } else {

                     $this->session->set_userdata('exam_progress_73',"1");
                     $this->session->set_userdata('score_flag', false);
                 }




                 $exam_72 = $this->session->userdata('exam_progress_72');

                 $exam_73 = $this->session->userdata('exam_progress_73');



                 if(($exam_71 == '2') && ($exam_72 == '2') && ($exam_73 == '2')){
                     redirect("my_score");

                 }     else {

                     $this->template->load('exam_frontend','frontend/exam/sample_exam',$data);

                 }

             } else {
                 if(($exam_71 == '2')){
                     redirect("my_score");

                 }     else {

                     $this->template->load('exam_frontend','frontend/exam/combined-test-4',$data);

                 }

             }
          
        

    }


    public function generic_test($exam_id){

        $userId = $this->session->userdata('userdata')['userid'];

        $exam_1 = $exam_id;

        $data['exam_1']=$exam_1;

        $result1 = $this->db->query("select * from exam_taken where exam_id = $exam_1 and user_id = $userId and taken_status = '2' ")->result_array();

        $exam_data = $this->db->query("select exam_name, exam_time, exam_max_ques from exam_list where exam_id = $exam_1 ")->result_array()[0];

        $data['exam_1_name'] = $exam_data['exam_name'];
        $data['exam_1_time'] =$exam_data['exam_time'];
        $data['exam_1_max_ques'] = $exam_data['exam_max_ques'];

        if(sizeof($result1) > 0 ){


            $this->session->set_userdata('exam_progress_71',"2");
            $this->session->set_userdata('score_flag', true);
        }   else {

            $this->session->set_userdata('exam_progress_71',"1");
            $this->session->set_userdata('score_flag', false);
        }


        $exam_71 = $this->session->userdata('exam_progress_71');


        if(($exam_71 == '2')){
            redirect("my_score");

        } else {

            $this->template->load('exam_frontend','frontend/exam/generic-test',$data);

        }

}
    
    public function open_test(){

         	
          
         $this->template->load('exam_frontend','frontend/exam/sample_exam'); 

   
    }
    
    
    public function progress_exam($exam_id){ // ansh
        //  print_r($this->session->all_userdata());
        
        

        $exam_id=urldecrypt($exam_id);
        $userId = $this->session->userdata('userdata')['userid'];
        $result = $this->db->query("select id from exam_taken where exam_id = $exam_id && user_id = $userId and taken_status = '2' ")->result_array();
        if(sizeof($result) > 0){
            redirect("my_score");

        } else {
            $ans = $this->db->query("select * from test_answers where test_category = $exam_id && userid = $userId ")->result_array();
          
                $this->stu->student_exam($exam_id,$userId,'1');

                $data['page']=0;
                $total_question=$this->edu->getTotalExamQuez($exam_id);


                $data['total_exam_question']= $total_question;
                
                $data['test_exam_questions'] = $this->edu->get_test_exam_questions($exam_id, '0');

                $data['test_time']=$this->edu->getExamInfo($exam_id)->exam_time;

                
                if(count($ans)>0) {                                               
                        
                        $ans_arr=json_decode(stripslashes($ans[0]['test_answers']),true);
                        
          $total_time = 0;              
	
	foreach ($ans_arr as $key => $val) {

	

                        $answers[$key]['option']=$val['option'];
                        $answers[$key]['time']=$val['time'];

                       

                        $this->session->set_userdata('test_answers',$answers);
                            
                            $total_time = $total_time + $val['time'];
                            
                            
                           
	  
	}
	
	$data['test_time'] = $data['test_time'] - ($total_time / 60) % 60;
	 
	
	
	
                 } 
                 
                 
                 
                if(empty($this->session->userdata('exam_detail'))) {
                   
                        $this->session->set_userdata('exam_detail',array('category'=>$exam_id,'start_at'=>time()));  
                }
                
                if(empty($this->session->userdata('time_last_question'))) {
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
                    
                    if(!empty($this->session->userdata('test_answers')) && array_key_exists($data['test_question']['id'],$this->session->userdata('test_answers'))){

                        $data['sl_option']=$this->session->userdata('test_answers')[$data['test_question']['id']]['option'];

                    }
                    echo $this->load->view('frontend/exam/single_question',$data,true);
                }
                else
                {

                    $data['test_question']=$this->edu->get_test_exam_questions($exam_id,$data['page'])[0];
                    // echo count($data['test_question'][0]);

                    $this->template->load('exam_frontend','frontend/exam/exam',$data);
                    // $this->load->view('frontend/exam/exam',$data);
                }
               


            //	if($exam_id==$this->session->userdata("submitedExam"))
            //	{
            //	  redirect("my_score");
            //	}

}
    }
    
    
        public function test_start_exam($exam_id){ // ansh
        //  print_r($this->session->all_userdata());

        $exam_id=$exam_id;
        $userId = $this->session->userdata('userdata')['userid'];
        $result = $this->db->query("select id from exam_taken where exam_id = $exam_id && user_id = $userId and taken_status = '2' ")->result_array();
        if(sizeof($result) > 0){
            redirect("my_score");

        } else {
            $ans = $this->db->query("select * from test_answers where test_category = $exam_id && userid = $userId ")->result_array();
          
                $this->stu->student_exam($exam_id,$userId,'1');

                $data['page']=0;
                $total_question=$this->edu->getTotalExamQuez($exam_id);


                $data['total_exam_question']= $total_question;
                
                $data['test_exam_questions'] = $this->edu->get_test_exam_questions($exam_id, '0');

                $data['test_time']=$this->edu->getExamInfo($exam_id)->exam_time;

                # set test starting time and test category in session
                if(count($ans)>0){
                  /*  $this->session->unset_userdata('test_answers'); */
              /*      $this->session->set_userdata('test_answers',
                        $ans[0]['test_answers']); */
                        
                        $ans_arr=json_decode(stripslashes($ans[0]['test_answers']),true);
                 //       echo $ans_arr;
	
	foreach ($ans_arr as $key => $val) {
	$this->session->set_userdata('test_answers2',
                            array($this->$key=>array('time'=>$val['time'],'option'=>$val['option'])));
                           
	  
	} 
                        
               

                        
                        
                } 
                if(empty($this->session->userdata('exam_detail'))){
                   
                        $this->session->set_userdata('exam_detail',array('category'=>$exam_id,'start_at'=>time()));  
                }
                
                if(empty($this->session->userdata('time_last_question'))) {
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
                    
                    if(!empty($this->session->userdata('test_answers')) && array_key_exists($data['test_question']['id'],$this->session->userdata('test_answers'))){

                        $data['sl_option']=$this->session->userdata('test_answers')[$data['test_question']['id']]['option'];

                    }
                    echo $this->load->view('frontend/exam/single_question',$data,true);
                }
                else
                {

                    $data['test_question']=$this->edu->get_test_exam_questions($exam_id,$data['page'])[0];
                    // echo count($data['test_question'][0]);

//                    $this->template->load('exam_frontend','frontend/exam/exam',$data);
                    // $this->load->view('frontend/exam/exam',$data);
                }
            }


            //	if($exam_id==$this->session->userdata("submitedExam"))
            //	{
            //	  redirect("my_score");
            //	}


    }




    # function for sumit full test
    function exam_result(){
        $result_id=$this->stu->exam_result();
        $closeForm= true;
        


    redirect("show_result/".urlencrypt($result_id)); 
    }
    
    function save_exam_result() {
    
     $exam_id = $this->stu->save_exam_result();
     
     $dt = date('Y-m-d');
     $userId = $this->getCurrentUserId();
      
     
   
     
  /*   if($flag>0){
     
      $result =  $this->db->query("select el.exam_id, et.taken_status from exam_list el left join exam_taken et on et.exam_id = el.exam_id and et.taken_status not in ('1','2') where exam_status = '1' and EXISTS (SELECT * FROM vprep_student_institute where si_student_id = $userId )  
 order by el.exam_id asc ")->result_array();
     
     if(count($result)>0){
     	
  //   	redirect("start_exam/".urlencrypt($result[0]['exam_id']));
     
     } else {
  //   	redirect("show_result/".urlencrypt($exam_id)); 
     
     }
     
     echo count($result)
      

     } */
     
     	
     } 
     
     function save_exam_result2() {
    
     $exam_id = $this->stu->exam_result();
     
     $dt = date('Y-m-d');
     $userId = $this->getCurrentUserId();
 
      
    
   
     
    
     
   /*    $result =  $this->db->query("select * from exam_taken where exam_id = 71 and user_id = $userId  ")->result_array();
      $result2 = $this->db->query("select * from exam_taken where exam_id = 72 and user_id = $userId   ")->result_array();
      $result3 = $this->db->query("select * from exam_taken where exam_id = 73 and user_id = $userId  ")->result_array(); */
      
       $exam_id = $this->session->userdata('exam_detail')['category'];
            
      
   
     	if($exam_id ==71 && $exam_id != 73  ){
     	
     
     	$this->session->unset_userdata('test_answers');
        $this->session->unset_userdata('exam_detail');
        $this->session->unset_userdata('question_timer');
     	redirect("start_exam/".urlencrypt(72)); 
     	
     	}  else {
  
     	
     	$this->session->unset_userdata('test_answers');
        $this->session->unset_userdata('exam_detail');
        $this->session->unset_userdata('question_timer');
     	redirect("start_exam/".urlencrypt(73)); 
     	
     	}  

     	
     }
     
//  redirect("start_exam/".urlencrypt('62')); 
    



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
        
        $data['test_answer']=$this->edu->get_test_exam_result_user($userid,$eid);
        
        $data['test_answer']=json_decode(stripslashes($data['test_answer']['test_answers']),true);
        
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
    
    function submit_show_result($result_id){

        $this->stu->unset_test_variable();
        $data['result']=$this->stu->showExamResult(urldecrypt($result_id));
     
        $data['close'] = true;
        
        $nextExamId = '62'; 
        echo urlencrypt($nextExamId);
   //      redirect("start_exam/".$nextExamId); 
       



    //    $this->template->load('frontend','frontend/exam/exam_result',$data);
    }





    # function for show result
    function exam_result_chart($result_id){
        //	 echo urldecrypt($result_id);

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
    
    public function read_exam_data(){
        $exam_id = $_GET["exam_id"];
      // $total_exam_question_new_apcu = apcu_fetch('total_exam_question_new'.$exam_id);
      // if(apcu_exists('total_exam_question_new'.$exam_id) && $total_exam_question_new_apcu!=null){
      // echo "came her ein total exam";
     //  echo $total_exam_question_new_apcu;
       // $total_exam_question_new = apcu_fetch('total_exam_question_new'.$exam_id);
     // } else {       
           $total_exam_question_new = $this->edu->get_test_exam_questions($exam_id,0);
        // apcu_add('total_exam_question_new'.$exam_id,$total_exam_question_new);
       // }        
        $question_count= count($total_exam_question_new);
        
        //if(fetch_apcu()apcu_add('marks_for_correctfoo', "swadhin"); apcu_fetch('foo');)
       // $marks_for_correct_apc = apcu_fetch('marks_for_correct'.$exam_id);
       // if((!apcu_exists('marks_for_correct'.$exam_id))|| $marks_for_correct_apc==null){
        $this->db->select('t2.exam_time,t2.exam_id, t2.subject_id,t2.marks_for_correct,t2.marks_for_wrong,t2.marks_for_unattemp');
        $this->db->from('exam_list t2');
        $this->db->where('t2.exam_id',$exam_id);
        $result=$this->db->get()->row_array();
        
        $myObj = new \stdClass();
        
       

  /*      $this->session->unset_userdata('test_question_session');
        $this->session->set_userdata('test_question_session',$total_exam_question_new); */
        

        $myObj->total_questions = $total_exam_question_new;
        $myObj->question_count=$question_count;
        $myObj->marks_for_correct=$result['marks_for_correct'];
        $myObj->marks_for_wrong=$result['marks_for_wrong'];
        $myObj->marks_for_unattempt=$result['marks_for_unattemp'];
        $myJSON = json_encode($myObj);
       // apcu_add('marks_for_correct'.$exam_id, $myObj);
       // }
        //else {
      //  echo apcu_fetch("marks_for_correct".$exam_id);
    //    echo "came here";
  //      $myJSON = json_encode(apcu_fetch("marks_for_correct".$exam_id));
        
//}

        echo $myJSON ;
    
    
}

 public function save_exam_json() {
 	$exam_id = $_GET["exam_id"];
 	$ans_json = $_GET["ans_json"];
 	$score = $_GET["score"];
 	$start_at = $_GET["start_at"];
 	$taken_status = $_GET["taken_status"];
 	$save_status = $_GET["save_status"];
 	$userId = $this->session->userdata('userdata')['userid'];
 //	$userId = time()/1000;
 	
 	$result = $this->stu->save_exam_json($exam_id,$score,$ans_json,$start_at);
	if($save_status == 71) {
	 $this->session->set_userdata('exam_progress_71',"2");
	} else if($save_status == 72) {
	 $this->session->set_userdata('exam_progress_72',"2");
	} else if($save_status == 73) {
	 $this->session->set_userdata('exam_progress_73',"2");
	}
 	
 	$this->stu->student_exam($exam_id,$userId,$taken_status);
 	echo $result;
 
 
 
 }


  public function read_ans_json() {
   $exam_id = $_GET["exam_id"];
 $userId = $this->session->userdata('userdata')['userid'];
 
 $ans = $this->db->query("select * from test_answers where test_category = $exam_id && userid = $userId ")->result_array();
 
 if(sizeof($ans) >0 ){
  echo stripslashes($ans[0]['test_answers']);
 } else {
 	echo '{}' ;
 
 }

 
 
 
 }

}
