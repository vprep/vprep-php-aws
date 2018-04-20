<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_model extends CI_Model 
{
    function __construct(){
        parent::__construct();
        $this->load->model('educational_model','edu');
    }
    
    # function for add student
    function add_student($for=0){
        $userid=0;
		
		if($this->input->post('username')!="") {
			$username = $this->input->post('username');
		}
		else {
			$username = $this->input->post('email');
		}
		
		if($this->input->post('first_name')!="") {
			$name = $this->input->post('first_name');
		}
		else {
			$name = "";
		}
		
        $insert_data=array(
            'name'      =>  $name,
            'username'  =>  $username,
            'password'  =>  md5(clean_variable($this->input->post('password'))),
            'email'     =>  $this->input->post('email'),
            'phone'     =>  $this->input->post('phone'),
            
            'city'      =>  $this->input->post('city'),
            
            'gender'    =>  $this->input->post('gender'),
            
            'user_type' =>  4,
            'created_at'=>  time(),
            'updated_at'=>  time()
        );
        
        if(!empty($for)){
            $insert_data['created_by']=$for;
        }
        if(!empty($this->input->post('id'))){
            $user_id=$this->input->post('id');
            $insert_array['updated_by']=$this->session->userdata('userdata')['userid'];
            $this->db->where('id',$user_id);
            $this->db->where('created_by',(int)$for);
            $this->db->update('users',$insert_data);
            if(empty($this->input->post('prepairing_for'))){
            $prepairing_for_course = "Placements";
            } else{
            $prepairing_for_course = $this->input->post('prepairing_for');
            }
            
            $stu_data=array(
                'current_institute' =>  $this->input->post('current_institute'),
                'prepairing_for'    =>  $prepairing_for_course
            );
            $this->db->where('user_id',$user_id);
            $this->db->update('student',$stu_data);
            $this->message->set('Student has been Updated successfully.', 'success', TRUE);
            
        }else{
            $this->db->insert('users',$insert_data);
            $userid=$this->db->insert_id();
            if(empty($this->input->post('prepairing_for'))){
            $prepairing_for_course = "Placements";
            } else{
            $prepairing_for_course = $this->input->post('prepairing_for');
            }
            $stu_data=array(
                'user_id'           =>  $userid,
                'current_institute' =>  $this->input->post('current_institute'),
                'prepairing_for'    =>  $prepairing_for_course,
				'course_name'		=>	$this->input->post('course_name')
            );
            $this->db->insert('student',$stu_data);
            $this->message->set('Account Created Successfully, Login Details sent on your Mail.', 'success', TRUE);

            if(empty($for)){
                $this->session->set_userdata('userdata',array(
                    'name'      =>  $insert_data['name'],
                    'email'     =>  $insert_data['email'],
                    'gender'    =>  $insert_data['gender'],
                    'validated' =>  1,
                    'usertype'  =>  4
                ));
            }
        }
        return $userid;
    }
    
    # function for unset test variable
    function unset_test_variable(){
        $this->session->unset_userdata('test_answers');
        $this->session->unset_userdata('exam_detail');
        $this->session->unset_userdata('flag_question');
        $this->session->unset_userdata('not_answer_ques');
        $this->session->unset_userdata('exam_result_id');
        $this->session->unset_userdata('question_timer');
    }
    
    # function for save exam result
    function exam_result(){
        $answers=$this->session->userdata('test_answers');
		
		$this->session->set_userdata("submitedExam",$this->session->userdata('exam_detail')['category']);
		
        if(!empty($this->input->post('option'))){
            $answers[$this->input->post('question_id')]["option"]=$this->input->post('option');
            $date = date('Y-m-d H:i:s');
            if(!empty($answers[$this->input->post('question_id')]["time"]))
            $answers[$this->input->post('question_id')]["time"] = $answers[$this->input->post('question_id')]["time"] + strtotime($date) - strtotime($this->session->userdata('time_last_question'));
            else 
            $answers[$this->input->post('question_id')]["time"] = strtotime($date) - strtotime($this->session->userdata('time_last_question'));
        }
        $insert_data=array(
            'userid'       =>  $this->session->userdata('userdata')['userid'],
            'test_category' =>  $this->session->userdata('exam_detail')['category'],
            'test_answers'  =>  addslashes(json_encode($answers)),
            'start_at'      =>  $this->session->userdata('exam_detail')['start_at'],
            'end_at'        =>  time(),
            'created_at'    =>  time()
        );
        
        $this->db->insert('test_answers',$insert_data);
        $lastId = $this->db->insert_id();
		
		$this->student_exam($this->session->userdata('exam_detail')['category'],$this->session->userdata('userdata')['userid']);
		
		return $lastId;
    }
    
	function student_exam($exam,$userId)
	{
		$save_data=array(
            'user_id' =>  $userId,
            'exam_id' =>  $exam,
        );
        
        $this->db->insert('exam_taken',$save_data);

	}
	
    # function show result
    function show_result($result_id){
        $this->db->select('t1.*,t2.exam_time,t2.subject_id');
        $this->db->from('test_answers t1');
          $this->db->join('exam_list t2','t1.test_category=t2.exam_id','left');
        $this->db->where('t1.id',$result_id);
        $result=$this->db->get()->row_array();
        $ans_arr=json_decode(stripslashes($result['test_answers']),true);
        # make return array
        $return_arr=array(
            'result_id'             =>  $result['id'],
            'total_questions'       =>  $this->edu->get_test_category_questions_count($result['test_category']),
            'attempted_questions'   =>  count($ans_arr),
            'correct_question'      =>  0,
			'easy'					=> 0,
			'medium'				=> 0,
			'difficult'				=> 0,
            'total_time'            =>  $result['exam_time'],
            'time_taken'            =>  round(abs($result['end_at'] - $result['start_at']) / 60,2),
			'answered_id'			=>  $result['test_answers'],
			 
        );
        
        # calculating time diffrence
        $seconds_diff  = $result['end_at'] - $result['start_at'];
        $hours = floor($seconds_diff / 3600);
        $return_arr['time_taken'] = floor(($seconds_diff - ($hours*3600)) / 60).':'.floor($seconds_diff % 60);
  
        if(!empty($ans_arr))
		{
            foreach($ans_arr as $key=>$val)
			{
                $ques=$this->edu->get_test_question($key);
				
                if($ques['correct_ans']==(int)str_replace('option', '', $val)){
                    $return_arr['correct_question']++;
                   
                }
				
                $return_arr[$ques['difficulty_level']]++;
				
            }
			
			
			 
            $return_arr['easy']=($this->getQuestionsByLevel($result['test_category'],"easy")*100)/$return_arr['attempted_questions'];
            $return_arr['medium']=($this->getQuestionsByLevel($result['test_category'],"medium")*100)/$return_arr['attempted_questions'];
            $return_arr['difficult']=($this->getQuestionsByLevel($result['test_category'],"difficult")*100)/$return_arr['attempted_questions'];
			 
        }
		
		
		
        return $return_arr;
    }
	
	function getQuestionsByLevel($exam_id,$level)
	{
		
		$this->db->select("*");
		$this->db->where("exam_id",$exam_id);
		$this->db->where("difficulty_level","$level");
		return	$this->db->get('test_questions')->num_rows();
		
	}
	
	function graph_question_total($result_id)
	{
        $this->db->select('t2.*');
        $this->db->from('test_answers t1');
        $this->db->join('vprep_exam_question t2','t1.test_category=t2.qiz_exam_id');
		
        $this->db->where('t1.id',$result_id);
       return $result=$this->db->get()->result_array();
 
	}
	
 
	function my_score($userid){
       
        $this->db->select('t1.created_at as test_date,t2.exam_id, t1.id,t2.exam_name as title');
        $this->db->from('test_answers t1');
        $this->db->join('exam_list t2','t1.test_category=t2.exam_id','left');
        $this->db->where('userid',$userid);
        return $this->db->get()->result_array();
    }
	
	
    # function get student details
    function get_student_detail($user_id){
        $this->db->from('users t1');
        $this->db->join('student t2','t1.id=t2.user_id','left');
        $this->db->where('t1.id',$user_id);
        $arr=$this->db->get()->row_array();
        $name=explode(' ',$arr['name']);
        $arr['first_name']=$name[0];
        $arr['last_name']=$name[1];
        return $arr;
    }
    
    # functiona get student list
    function get_students($page=0,$for=0){
        if(!empty($for)){
            $this->db->where('created_by',(int)$for);
        }
        $offset = ($page != 0) ? ((int) ($page-1) * DEFAULT_PER_PAGE) : 0;
        $this->db->limit(DEFAULT_PER_PAGE,$offset);
        $this->db->order_by('id','desc');
        return $this->db->get('users')->result_array();
    }
    
    # get total student
    function total_student($for=0){
        if(!empty($for)){
            $this->db->where('created_by',(int)$for);
        }
        return $this->db->get('users')->num_rows();
    }
 
	function getSubjectDetail($sub)
	{
		
		$this->db->select("*");
		$this->db->from('course_subject');
		$this->db->where("subject_id",$sub);
 
		return $this->db->get()->row();
	}
 
 	function getModuleDetail($mod_id)
	{
		
		$this->db->select("*,module_title as title");
		$this->db->from('vprep_module');
		$this->db->where("module_id",$mod_id);
 
		return $this->db->get()->row();
	}
	
	
	function loadStudent($userId)
	{
		$this->db->select("u.*,s.*,c.course_title");
		$this->db->from('users u');
		$this->db->where("u.id",$userId);
		$this->db->join("student as s","s.user_id=u.id");
		$this->db->join("institute_course as c","c.course_id=s.course_name","left");
		return $this->db->get()->row();
	}
	
	function loadStudentProfile($userId)
	{
		$fq = $this->db->query("Select * from vprep_student_institute where si_student_id='$userId'")->result_array();
		if(count($fq) > 0){
			return $this->db->query("SELECT u.*, iu.name as current_institute, c.course_title as prepairing_for FROM `users` as u join vprep_student_institute as s on s.si_student_id=u.id join users as iu on s.si_institute_id=iu.id left join institute_course as c on s.si_course_id=c.course_id where u.id='$userId'")->result_array()[0];
		}else{
			$res = $this->db->query("SELECT * FROM `users` where id='$userId'")->result_array()[0];
			$res2 = array();
			$res2['current_institute'] = '';
			$res2['prepairing_for'] = '';
			return array_merge($res, $res2);
		}
	}
	
	function updateStudentInfo($fileName=NULL)
	{
		$user_id = $this->input->post('id');
		if($fileName!=NULL)
		{
			
			 $insert_data=array(
				'name'      =>  $this->input->post('first_name'),
				'phone'     =>  $this->input->post('phone'),
				'address'   =>  $this->input->post('address'),
				'city'      =>  $this->input->post('city'),
				'state'     =>  $this->input->post('state'),
				'zip'       =>  $this->input->post('zip'),
				'gender'    =>  $this->input->post('gender'),
				'dob'       =>  date('Y-m-d',strtotime($this->input->post('dob'))),
				'image'     =>  $fileName,
				'updated_at'=>  time()
			);
		
		}
		else
		{
			$insert_data=array(
				'name'      =>  $this->input->post('first_name'),
				'phone'     =>  $this->input->post('phone'),
				'address'   =>  $this->input->post('address'),
				'city'      =>  $this->input->post('city'),
				'state'     =>  $this->input->post('state'),
				'zip'       =>  $this->input->post('zip'),
				'gender'    =>  $this->input->post('gender'),
				'dob'       =>  date('Y-m-d',strtotime($this->input->post('dob'))),
				'updated_at'=>  time()
			);
		}
			$this->db->where('id',$user_id);
            $this->db->update('users',$insert_data);
			
			
			/*
			$this->db->where("user_id",$user_id);
			$this->db->set("current_institute",$this->input->post("current_institute"));
			$this->db->set("prepairing_for",$this->input->post("prepairing_for"));
			$this->db->update('student');
			*/
			
		
	}
	
	function changeStudentPassword()
	{
			$user_id = $this->input->post("userid");
			
			$this->db->where("id",$user_id);
			$this->db->set("password",md5($this->input->post("new_password")));
			$this->db->update('users');
		
	}
	
	
	function getInstituteDetail($id)
	{
		$this->db->select('*');
		// $this->db->from('institute i');
		$this->db->join('users u','u.id=i.user_id','left');

		$this->db->where('i.institute_id',$id);
		
		return $this->db->get('institute i')->result();
	}
 
	function getBookList()
	{
		$this->db->select('*');
		$this->db->order_by('book_id','DESC');
		return $this->db->get('vprep_book')->result();
	}	
	
	function getBookDetail($bookId)
	{
		$this->db->select('*');
		$this->db->where('book_id',$bookId);
		return $this->db->get('vprep_book')->row();
	}
	
	function loadStudentInstituteData($studentId)
	{
		$this->db->select('u.name as institute , ic.course_title');
		$this->db->join('institute_course ic','ic.course_id=si.si_course_id','left');
		$this->db->join('users u','u.id=si.si_institute_id','left');
		
		$this->db->where('si.si_status',1);
		$this->db->where('si.si_student_id',$studentId);
		$this->db->order_by('si_row_id','DESC');
		return $this->db->get('vprep_student_institute as si')->result();
	}	
	
	function loadAttachedInstituteData($studentId)
	{
		$this->db->select('iu.name as institute , ic.course_title');
		//$this->db->join('student s','s.student_id=si.si_student_id','left');
		$this->db->join('institute_course ic','ic.course_id=si.si_course_id','left');
		$this->db->join('users u','u.id=si.si_student_id','left');
		$this->db->join('users iu','iu.id=si.si_institute_id','left');
		
		$this->db->where('si.si_status',1);
		$this->db->where('u.id',$studentId);
		$this->db->order_by('si_row_id','DESC');
		return $this->db->get('vprep_student_institute as si')->result();
	}
	
	
	function showExamResult($result_id){
        $this->db->select('t1.*,t2.exam_time,t2.subject_id,t2.marks_for_correct,t2.marks_for_wrong');
        $this->db->from('test_answers t1');
        $this->db->join('exam_list t2','t1.test_category=t2.exam_id','left');
        $this->db->where('t1.id',$result_id);
        $result=$this->db->get()->row_array();
        
		$ans_arr=json_decode(stripslashes($result['test_answers']),true);
      
	   # make return array
        $return_arr=array(
            'result_id'             =>  $result['id'],
            'total_questions'       =>  $this->edu->get_test_category_questions_count($result['test_category']),
            'attempted_questions'   =>  count($ans_arr),
            'correct_question'      =>  0,
			'easy'					=> 0,
			'medium'				=> 0,
			'difficult'				=> 0,
			'moc'					=>  $result['marks_for_correct'],
			'mow'					=>  $result['marks_for_wrong'],
            'total_time'            =>  $result['exam_time'],
            'time_taken'            =>  round(abs($result['end_at'] - $result['start_at']) / 60,2),
			'answered_id'			=>  $result['test_answers'],
			 
        );
        
        # calculating time diffrence
        $seconds_diff  = $result['end_at'] - $result['start_at'];
        $hours = floor($seconds_diff / 3600);
        $return_arr['time_taken'] = floor(($seconds_diff - ($hours*3600)) / 60).':'.floor($seconds_diff % 60);
        if(floor($seconds_diff / 60)>$return_arr['total_time']){
$return_arr['time_taken'] = $return_arr['total_time'];
}

        if(!empty($ans_arr))
		{
            foreach($ans_arr as $key=>$val)
			{
                $ques=$this->getExamQuestion($key);
                if($ques['correct_ans']==(int)str_replace('option', '', $val)){
                    $return_arr['correct_question']++;  
                }
                $return_arr[$ques['difficulty_level']]++;	
            }
		 $return_arr['easy']=($this->getQuezByLevel($result['test_category'],"easy")*100)/$return_arr['attempted_questions'];
         $return_arr['medium']=($this->getQuezByLevel($result['test_category'],"medium")*100)/$return_arr['attempted_questions'];
          $return_arr['difficult']=($this->getQuezByLevel($result['test_category'],"difficult")*100)/$return_arr['attempted_questions'];	 
        }
        return $return_arr;
    }
	
    function getExamQuestion($id=0)
	{
		
		$this->db->select("q.*");
		//$this->db->join("vprep_exam_question q","q.id=eq.qiz_question_id");
		$this->db->where("q.id",$id);
		
        return $this->db->get('test_questions q')->row_array();
    }
	
	
	function getQuezByLevel($exam_id,$level)
	{
		
		$this->db->select("q.*");
		$this->db->where("eq.qiz_exam_id",$exam_id);
		$this->db->join("vprep_exam_question eq","eq.qiz_question_id=q.id");
		$this->db->where("q.difficulty_level","$level");
		return	$this->db->get('test_questions q')->num_rows();
	}
	
	
	function showExamResultFull($result_id){
        $this->db->select('t1.*,t2.exam_time,t2.subject_id');
        $this->db->from('test_answers t1');
        $this->db->join('exam_list t2','t1.test_category=t2.exam_id','left');
        $this->db->where('t1.id',$result_id);
        $result=$this->db->get()->row_array();
       
	$ans_arr=json_decode(stripslashes($result['test_answers']),true);
	
	foreach ($ans_arr as $key => $val) {
	
	  $ans_arr_generate[$key]=$val['option'];
	  $ans_arr_generate_time[$key]=$val['time'];
	}
	$ans_arr = $ans_arr_generate;
	
      
		
	   # make return array
        $return_arr=array(
            'result_id'             =>  $result['id'],
            'total_questions'       =>  $this->edu->get_test_category_questions_count($result['test_category']),
            'attempted_questions'   =>  count($ans_arr),
            'correct_question'      =>  0,
			'easy'					=> 0,
			'medium'				=> 0,
			'difficult'				=> 0,
            'total_time'            =>  $result['exam_time'],
            'time_taken'            =>  round(abs($result['end_at'] - $result['start_at']) / 60,2),
			'answered_id'			=>  addslashes(json_encode($ans_arr)),
			'answered_id_time'			=>  addslashes(json_encode($ans_arr_generate_time)), 
        );
        
        # calculating time diffrence
        $seconds_diff  = $result['end_at'] - $result['start_at'];
        $hours = floor($seconds_diff / 3600);
        $return_arr['time_taken'] = floor(($seconds_diff - ($hours*3600)) / 60).':'.floor($seconds_diff % 60);
        
		$ea = 0;
		$me = 0; 
		$di = 0;
		
        if(!empty($ans_arr))
		{
		
            foreach($ans_arr as $key=>$val)
			{
                $ques=$this->getExamQuestion($key);
                if($ques['correct_ans']==(int)str_replace('option', '', $val)){
                    $return_arr['correct_question']++;  
					if($ques['difficulty_level'] == 'easy')
					{
						$ea++;
					}else if($ques['difficulty_level'] == 'medium')
					{
						$me++;
					}else if($ques['difficulty_level'] == 'difficult')
					{
						$di++;
					}
                }
                $return_arr[$ques['difficulty_level']]++;	
            }
			
		$teq = 	$this->getQuezByLevel($result['test_category'], "easy");
		$tmq = 	$this->getQuezByLevel($result['test_category'], "medium");
		$tdq = 	$this->getQuezByLevel($result['test_category'], "difficult");
		
		$te = 0;
		$tm = 0;
		$td = 0;
		
		if($teq != 0)
			$te = ($ea * 100) / $teq;
		if($tmq != 0)
			$tm = ($me * 100) / $tmq;
		if($tdq != 0)
			$td = ($di * 100) / $tdq;
		
		$return_arr['easy'] = $te;
		$return_arr['medium'] = $tm;
		$return_arr['difficult'] = $td;
		//$return_arr['easy']=($this->getQuezByLevel($result['test_category'],"easy")*100)/$return_arr['attempted_questions'];
        //$return_arr['medium']=($this->getQuezByLevel($result['test_category'],"medium")*100)/$return_arr['attempted_questions'];
        //$return_arr['difficult']=($this->getQuezByLevel($result['test_category'],"difficult")*100)/$return_arr['attempted_questions'];
			 
        }
			 
		
		
        return $return_arr;
    }
	
 
	function graphQuestionTotal($result_id)
	{
        $this->db->select('t2.*,tq.*');
        $this->db->from('test_answers t1');
        $this->db->join('vprep_exam_question t2','t1.test_category=t2.qiz_exam_id');
        $this->db->join('test_questions tq','t2.qiz_question_id=tq.id');
		
        $this->db->where('t1.id',$result_id);
       return $result=$this->db->get()->result_array();
 
	}
	
	//-----------------------------------------------------------ANSH--------------------------------------
	
	function secondsToTime($seconds) {
		$hours = floor($seconds / (60 * 60));
		$divisor_for_minutes = $seconds % (60 * 60);
		$minutes = floor($divisor_for_minutes / 60);
		$divisor_for_seconds = $divisor_for_minutes % 60;
		$seconds = ceil($divisor_for_seconds);
		return array("h" => (int) $hours, "m" => (int) $minutes, "s" => (int) $seconds);;
	}
	
	function isExamAlreadyStarted($uid, $eid){
		$this->db->select("*");
		$this->db->where("user_id", $uid);
		$this->db->where("exam_id", $eid);
		$r = $this->db->get("exam_result")->row_array();
		return $r;
	}
	
	function createExamEntry($uid, $eid, $timer){
		$date = date('Y-m-d H:i:s');
		$data = array(
			"user_id"		=> 		$uid,
			"exam_id" 		=> 		$eid,
			"answers" 		=> 		"",
			"status" 		=>		"2",
			"timer"			=>		$timer,
			"start_at"		=>		$date,
			"end_at"		=>		"",
			"created_on"	=>		$date,
			"updated_on"	=>		$date
		);
		$this->db->insert('exam_result', $data);
		return $this->db->insert_id();
	}
	
	function fetchExamInfo($examId){
		$this->db->select("*");
		$this->db->where("exam_id", $examId);
		return $this->db->get("exam_list")->row_array();
	}
	
	function updateExamResult($timer){
		$id = $this->session->userdata('exam_result_id');
		$ans = $this->session->userdata('test_answers');
		$qt = $this->session->userdata('question_timer');
		$date = date('Y-m-d H:i:s');
		$data = array('answers' => addslashes(json_encode($ans)), 'question_timer' => addslashes(json_encode($qt)), 'timer' => $timer, 'updated_on' => $date);
		$this->db->where('id', $id);
		$this->db->update('exam_result', $data);
	}
	
	function submit_exam(){
		$id = $this->session->userdata('exam_result_id');
		$ans = $this->session->userdata('test_answers');
		$this->session->set_userdata("submitedExam", $this->session->userdata('exam_detail')['exam_id']);
		if(!empty($this->input->post('option'))){
            $ans[$this->input->post('question_id')] = $this->input->post('option');
        }
		$date = date('Y-m-d H:i:s');
		$data = array('answers' => addslashes(json_encode($ans)), 'status' => 1, 'end_at' => $date, 'updated_on' => $date);
		$this->db->where('id', $id);
		$this->db->update('exam_result', $data);
    }
	
	function showExamResultNew($result_id){
        $this->db->select('t1.*, t2.exam_time, t2.subject_id, t2.marks_for_correct, t2.marks_for_wrong');
        $this->db->from('exam_result t1');
        $this->db->join('exam_list t2', 't1.exam_id=t2.exam_id', 'left');
        $this->db->where('t1.id', $result_id);
        $result = $this->db->get()->row_array();
        
		$ans_arr = json_decode(stripslashes($result['answers']), true);
      
        $return_arr = array(
            'result_id'             =>  $result['id'],
            'total_questions'       =>  $this->edu->get_test_category_questions_count($result['exam_id']),
            'attempted_questions'   =>  count($ans_arr),
            'correct_question'      =>  0,
			'easy'					=> 	0,
			'medium'				=> 	0,
			'difficult'				=> 	0,
			'moc'					=>  $result['marks_for_correct'],
			'mow'					=>  $result['marks_for_wrong'],
            'total_time'            =>  $result['exam_time'],
            'time_taken'            =>  round(abs($result['end_at'] - $result['start_at']) / 60,2),
			'answered_id'			=>  $result['answers']
        );
        
        $seconds_diff 	= 	$result['end_at'] - $result['start_at'];
        $hours 			= 	floor($seconds_diff / 3600);
        $return_arr['time_taken'] = floor(($seconds_diff - ($hours*3600)) / 60).':'.floor($seconds_diff % 60);
        
        if(!empty($ans_arr)) {
            foreach($ans_arr as $key=>$val) {
                $ques=$this->getExamQuestion($key);
                if($ques['correct_ans']==(int)str_replace('option', '', $val)){
                    $return_arr['correct_question']++;  
                }
                $return_arr[$ques['difficulty_level']]++;	
            }
			$return_arr['easy'] = ($this->getQuezByLevel($result['exam_id'], "easy") * 100) / $return_arr['attempted_questions'];
			$return_arr['medium'] = ($this->getQuezByLevel($result['exam_id'], "medium") * 100) / $return_arr['attempted_questions'];
			$return_arr['difficult'] = ($this->getQuezByLevel($result['exam_id'], "difficult") * 100) / $return_arr['attempted_questions'];	 
        }
        return $return_arr;
    }
}