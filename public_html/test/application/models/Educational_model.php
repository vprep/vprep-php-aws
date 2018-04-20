<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Educational_model extends CI_Model {
    
    function __construct(){
        parent::__construct();
    }
    
 
	
	
	    # get list of test categories
    function get_exam_categories($page=0,$userid=0){
        $this->db->select('t1.*,t2.title as parent_title,ex.exam_name');
        $this->db->from('test_category t1');
        $this->db->join('test_category t2','t1.parent=t2.id','left');
        $this->db->join('exam_list ex','t1.exam_id=ex.exam_id','left');
        if(!empty($userid)){
            $this->db->where('t1.created_by',$this->session->userdata('userdata')['userid']);
        }
		
        $offset = ($page != 0) ? ((int) ($page-1) * 10) : 0;
        $this->db->limit(10,$offset);
        return $this->db->get()->result_array();
    }
	
	function get_total_exam_categories($userid=0){
        $this->db->select('*');
        $this->db->from('test_category');
 
	   if(!empty($userid)){
            $this->db->where('created_by',$this->session->userdata('userdata')['userid']);
        }
		 
		return $this->db->get()->num_rows();
	   
    }
    function add_new_college($name1, $city1,$approved_by1,$other_info1){
    
    
    $name = str_replace("'","''","$name1");
    $city = str_replace("'","''","$city1");
    $approved_by = str_replace("'","''","$approved_by1");
    $other_info = str_replace("'","''","$other_info1");
    $this->db->query("INSERT INTO engineering_college set college_name ='$name',city='$city',approved_by='$approved_by',other_info='$other_info'");
    
    }
    
    
    function add_new_post() {
    $post_type = $_GET["post_type"];
    $subject = $_GET["subject"];
    $heading = $_GET["heading"];
    $detail = $_GET["detail"];
    $user_id = $this->session->userdata('userdata')['userid'];
   $result = $this->db->query("select engineering_college_id from users where id = '$user_id'")->row_array();
   $college_id = implode(",", $result);
    $is_student = $_GET["is_student"];
    $created_at = time();
    $updated_at = time();
    
    
    $this->db->query("INSERT INTO college_post set type ='$post_type',subject='$subject',heading='$heading',details='$detail',college_id='$college_id',user_id='$user_id',is_student= $is_student,created_at='$created_at',updated_at='$updated_at', view_count = 1 "); 
    
    
    echo  $college_id;
    
    }
    
    function add_new_poll() {
    
    $options = $_GET["options"];
    $result2 = $this->db->query("select id from college_post order by id desc limit 1")->row_array();
    $post_id = implode(",", $result2);
   $result = $this->db->query("INSERT INTO college_poll_options SET poll_id =$post_id, `option` =  '$options'");
   
	echo $result;
  
    }
    
     function add_test_post() {
    $post_type = $_POST["post_type"];
   
    
    echo  $post_type;
    
    }
    
    function add_vote(){
      $vote_id = $_GET["vote_id"];
      $post_id = $_GET["post_id"];
      $user_id = $this->session->userdata('userdata')['userid'];
      $created_at = time();
    $updated_at = time();
    
    $result = $this->db->query("select id from college_post_response_history where post_id = '$post_id' and user_id = '$user_id' ")->result_array();
    
    if(sizeof($result)>0){
    $this->db->query("update college_post_response_history set poll_response = '$vote_id' where user_id = '$user_id' and post_id = '$post_id' ");
    
    } else {
    
    $this->db->query("insert into college_post_response_history set post_id = '$post_id', is_student = true, user_id = '$user_id', created_at='$created_at', updated_at ='$updated_at' , poll_response = '$vote_id' ");
    
    }
      
      
      
      echo 'updated successfully';
      
    }
    
    function get_weekly_post($time){
    $time = $_GET["time"];

    $result = $this->db->query("SELECT * FROM college_post where created_at <='$time' order by id desc")->result_array();
    $nextWeek = time() + (7 * 24 * 60 * 60);
    
    
 //     $result2 = $result->fetch_assoc();
       echo strtotime("-1 week");
    
    }
    
    function test_json(){
    $post_id = $_GET['post_id'];
    $post_que = $this->db->query("select id, view_count, heading, details, subject, created_at from college_post where id = '$post_id' order by created_at desc;")->row_array();
    $this->db->query("update college_post set view_count = view_count+1 where id = '$post_id' ");
    $data["post_ans"] = $this->db->query("select cprh.id, cprh.post_id, cprh.post_response, cprh.is_student, cprh.user_id, cprh.created_at, cprh.updated_at, u.name, u.city from college_post_response_history cprh inner join users u on u.id = cprh.user_id where post_id = $post_id order by created_at desc")->result_array();
    $data['post_que'] = $post_que;
    $user_id = $this->session->userdata('userdata')['userid'];
$data["post_user_name"] = $this->db->query("select name from users where id = $user_id limit 1")->row_array();
    header("Content-Type: application/json");


$json = json_encode($data);
if ($json === false) {
    // Avoid echo of empty string (which is invalid JSON), and
    // JSONify the error message instead:
    $json = json_encode(array("jsonError", json_last_error_msg()));
    if ($json === false) {
        // This should not happen, but we go all the way now:
        $json = '{"jsonError": "unknown"}';
    }
    // Set HTTP response status code to: 500 - Internal Server Error
    http_response_code(500);
}
echo $json;
    
    
    
    
    
    }
    
    function weekly_json(){
    
    $time = strtotime("-1 week");
$data["current_week"] = $this->db->query("SELECT * FROM college_post where created_at >='$time' order by id asc")->result_array();

    $json = json_encode($data);
if ($json === false) {
    // Avoid echo of empty string (which is invalid JSON), and
    // JSONify the error message instead:
    $json = json_encode(array("jsonError", json_last_error_msg()));
    if ($json === false) {
        // This should not happen, but we go all the way now:
        $json = '{"jsonError": "unknown"}';
    }
    // Set HTTP response status code to: 500 - Internal Server Error
    http_response_code(500);
}

echo $json;
    
    }
    
function post_json() {
        
$content = trim(file_get_contents("php://input"));
 
//Attempt to decode the incoming RAW post data from JSON.
$decoded = json_decode($content, true);

echo $decoded;
    
}
    
    
    
    
    function add_post_reply(){
    $post_id = $_GET["post_id"];
    $post_response = $_GET["post_response"];
    $is_student = $_GET["is_student"];
    $user_id = $this->session->userdata('userdata')['userid'];
    $created_at = time();
    $updated_at = time();
    
  $this->db->query("INSERT INTO college_post_response_history set post_id ='$post_id',post_response='$post_response',is_student=$is_student,user_id='$user_id',created_at='$created_at',updated_at='$updated_at'"); 
    
    echo $post_id.' '.$post_response;
    
    
    }
    
   
    
    function get_engineering_college(){
    
    $this->db->select('id,college_name,city');
        $this->db->from('engineering_college');
        return $this->db->get()->result_array();
        
    }
	
		
    function get_parent_module($page=0,$userid=0){
        $this->db->select('*');
        $this->db->from('test_category');
        if(!empty($userid)){
            $this->db->where('created_by',$userid);
           
        }
		$this->db->where('parent',0);
		 
      //  $offset = ($page != 0) ? ((int) ($page-1) * DEFAULT_PER_PAGE) : 0;
      //  $this->db->limit(DEFAULT_PER_PAGE,$offset);
        return $this->db->get()->result_array();
    }
	
	function get_sub_module($parent=0,$userid=0){
        $this->db->select('*');
        $this->db->from('test_category');
        if(!empty($userid)){
			
            $this->db->where('created_by',$userid);
        }
		
		$this->db->where('parent',$parent);
		
        $this->db->limit(DEFAULT_PER_PAGE,$offset);
        return $this->db->get()->result_array();
    }
	
    
    function total_exam_categories(){
        $this->db->from('test_category t1');
        $this->db->join('test_category t2','t1.parent=t2.id','left');
        $this->db->where('t1.created_by',$this->session->userdata('userdata')['userid']);
        return $this->db->get()->num_rows();
    }
	
	function get_exam_category_opt($user_id,$parent=0){
        $return_arr=array("" => 'Choose Module');
        $cat_arr=$this->get_exam_categories(0,$user_id);
		
        if(count($cat_arr)>0){
            foreach($cat_arr as $key=>$val){
                $return_arr[$val['id']]=$val['title'];
                if(!empty($val['parent'])){
                    //$this->get_test_category_opt();
                }
            }
        }
        return $return_arr;
    }
	
	function getMainExamCat($userId)
	{
		$this->db->select('*');
		$this->db->from('exam_category');
		$this->db->where('parent',0);
		$this->db->where('created_by',$userId);
		 
		 return $this->db->get()->result_array();
	}
	
	function getSubExamCat($parent)
	{
		$this->db->select('*');
		$this->db->from('exam_category');
		$this->db->where('parent',$parent);
		 
		 return $this->db->get()->result_array();
	}
	
	function save_exam_categories(){
        $post_data=$this->input->post();
        $post_data['updated_at']=time();
        $post_data['updated_by']=!empty($this->session->userdata('userdata')['userid'])?$this->session->userdata('userdata')['userid']:1;
        unset($post_data['save']);
        if(!empty($post_data['id'])){
            $this->db->where('id',$post_data['id']);
            $this->db->update('exam_category',$post_data);
            $this->message->set('Exam Category has been updated successfully', 'success', TRUE, ''); 
            return $post_data['id'];
        }
        else{
            $post_data['created_at']=time();
            $post_data['created_by']=!empty($this->session->userdata('userdata')['userid'])?$this->session->userdata('userdata')['userid']:1;
            $this->db->insert('exam_category',$post_data);
            $this->message->set('Exam Category has been added successfully', 'success', TRUE, ''); 
            return $this->db->insert_id();
        }
    }
	
 
	
	///////////////////////////////////////////////////////////////////////////////////////////////////////
    # get list of test categories
    function get_test_categories($page=0,$userid=0){
        $this->db->select('t1.*,t2.title as parent_title');
        $this->db->from('exam_category t1');
        $this->db->join('exam_category t2','t1.parent=t2.id','left');
        if(!empty($userid)){
            $this->db->where('t1.created_by',$this->session->userdata('userdata')['userid']);
        }
		
        $offset = ($page != 0) ? ((int) ($page-1) * DEFAULT_PER_PAGE) : 0;
        $this->db->limit(DEFAULT_PER_PAGE,$offset);
        return $this->db->get()->result_array();
    }
    
    function total_test_categories($userid){
		
		$this->db->select('t1.*,t2.title as parent_title');
        $this->db->from('exam_category t1');
        $this->db->join('exam_category t2','t1.parent=t2.id','left');
		
        if(!empty($userid)){
            $this->db->where('t1.created_by',$this->session->userdata('userdata')['userid']);
        }
		
        
		 
        $pp =  $this->db->get()->result_array();
		
		print_r($pp);
		die;
		 
    }
    
    function get_test_category_opt($user_id,$parent=0){
        $return_arr=array("" => 'Choose Category');
        $cat_arr=$this->get_test_categories(0,$user_id);
        if(count($cat_arr)>0){
            foreach($cat_arr as $key=>$val){
                $return_arr[$val['id']]=$val['title'];
                if(!empty($val['parent'])){
                    //$this->get_test_category_opt();
                }
            }
        }
        return $return_arr;
    }
    
    # get test category
    function get_test_category($id=0){
        return $this->db->get_where('test_category',array('id'=>$id))->row_array();
    }
    
    function save_test_categories(){
        $post_data=$this->input->post();
        $post_data['updated_at']=time();
        $post_data['updated_by']=!empty($this->session->userdata('userdata')['userid'])?$this->session->userdata('userdata')['userid']:1;
        unset($post_data['save']);
        if(!empty($post_data['id'])){
            $this->db->where('id',$post_data['id']);
            $this->db->update('test_category',$post_data);
            $this->message->set('Exam Module has been updated successfully', 'success', TRUE, ''); 
            return $post_data['id'];
        }
        else{
            $post_data['created_at']=time();
            $post_data['created_by']=!empty($this->session->userdata('userdata')['userid'])?$this->session->userdata('userdata')['userid']:1;
            $this->db->insert('test_category',$post_data);
            $this->message->set('Exam Module has been added successfully', 'success', TRUE, ''); 
            return $this->db->insert_id();
        }
    }
    
    /*
		function get_test_questions($page=0,$userId){
			$this->db->select('t1.*,ex.exam_name,tc.title as module_name');
			$this->db->from('test_questions t1');
			$this->db->join('exam_list ex','t1.exam_id=ex.exam_id');
			$this->db->join('test_category tc','t1.module_id=tc.id');
			
			$this->db->where('t1.created_by',$userId);
			$offset = ($page != 0) ? ((int) ($page-1) * DEFAULT_PER_PAGE) : 0;
			$this->db->limit(DEFAULT_PER_PAGE,$offset);
			
			$this->db->order_by('t1.id','desc');
			return $this->db->get()->result_array();
		}
	  
		 function total_test_question($userId){
			$this->db->select('t1.*,ex.exam_name,tc.title as module_name');
			$this->db->from('test_questions t1');
			$this->db->join('exam_list ex','t1.exam_id=ex.exam_id');
			$this->db->join('test_category tc','t1.module_id=tc.id');
			
			$this->db->where('t1.created_by',$userId);
		   
			
			$this->db->order_by('t1.id','desc');
			return $this->db->get()->num_rows();
		}
    */
	
    
    # get test category
    function get_test_question($id=0){
        return $this->db->get_where('test_questions',array('id'=>$id))->row_array();
    }
	
	function getTQ($id=0){
		return $this->db->query("SELECT id, subject_id,solution, module_id as module, sub_module_id as sub_module, question_type, title, ques_img, option1_type as option_type_1, option1, option2_type as option_type_2, option2, option3_type as option_type_3, option3, option4_type as option_type_4, option4, difficulty_level, correct_ans, created_by, created_at  FROM `test_questions` WHERE id='$id'")->row_array();
    }
    
    # function get tes questions from category
    function get_test_category_questions($exam_id,$page=0){
        $this->db->select('*');
        //$offset = ($page != 0) ? ((int) ($page-1) * 1) : 0;
        $this->db->limit(1,$page);
        return $this->db->get_where('vprep_exam_question',array('qiz_exam_id'=>$exam_id))->row_array();
    }
    
    #function get test category question count
    function get_test_category_questions_count($exam_id){
        return $this->db->get_where('vprep_exam_question',array('qiz_exam_id'=>$exam_id))->num_rows();
    }
	
	
	
    
    # function get test time from test category table 
    function get_test_time($test_cat_id){
        return $this->db->get_where('test_category',array('id'=>$test_cat_id))->row_array()['test_time'];
    }
    
    function save_test_questions_old($userId){
        $post_data=$this->input->post();
        $post_data['updated_at']=time();
        $post_data['updated_by']=!empty($this->session->userdata('userdata')['id'])?$this->session->userdata('userdata')['id']:1;
		
		 
		$post_data['exam_id']= $post_data['exam'];
		$post_data['course_id']= $post_data['course'];
		$post_data['subject_id']=$post_data['subject'];
		$post_data['module_id']=$post_data['module'];
		$post_data['sub_module_id']=$post_data['sub_module'];
		$post_data['created_by']=$userId;
		
		
        unset($post_data['save']);
        unset($post_data['exam']);
        unset($post_data['course']);
        unset($post_data['subject']);
        unset($post_data['module']);
        unset($post_data['sub_module']);
		
        if(!empty($post_data['id'])){
            $this->db->where('id',$post_data['id']);
            $this->db->update('test_questions',$post_data);
            $this->message->set('Test Question has been updated successfully', 'success', TRUE, ''); 
            return $post_data['id'];
        }
        else{
            $post_data['created_at']=time();
             
            $this->db->insert('test_questions',$post_data);
            $this->message->set('Test Question has been added successfully', 'success', TRUE, ''); 
            return $this->db->insert_id();
        }
    }
    

      function add_exam_question($eid,$course_id,$subject_id,$module_id,$qid,$uid){
        $insert_data=array(
            'qiz_exam_id'      => $eid ,
            'qiz_course_id'  =>  $course_id,
            'qiz_subject_id'  =>  $subject_id,
            'qiz_module_id'     =>  $module_id,
            'qiz_created_by'     =>  $uid,
            'qiz_question_id'   =>  $qid
        );
        $this->db->insert('vprep_exam_question',$insert_data);
        }
    
    
 
    # function for add student
    function add_tutor(){
        $insert_data=array(
            'name'      =>  $this->input->post('first_name').' '.$this->input->post('last_name'),
            'username'  =>  $this->input->post('username'),
            'password'  =>  md5(clean_variable($this->input->post('password'))),
            'email'     =>  $this->input->post('email'),
            'phone'     =>  $this->input->post('phone'),
            'address'   =>  $this->input->post('address'),
            'city'      =>  $this->input->post('city'),
            'state'     =>  $this->input->post('state'),
            'zip'       =>  $this->input->post('zip'),
            'gender'    =>  $this->input->post('gender'),
            'dob'       =>  date('Y-m-d',strtotime($this->input->post('dob'))),
            'user_type' =>  2,
            'is_tutor'  =>  '1',
            'created_at'=>  time(),
            'updated_at'=>  time()
        );
        $this->db->insert('users',$insert_data);
        $userid=$this->db->insert_id();
        $tut_data=array(
            'user_id'   =>  $userid,
            'subjects'  =>  $this->input->post('subjects'),
            'institute' =>  $this->input->post('institute')
        );
        $this->db->insert('tutor',$tut_data);
        
        $this->session->set_userdata('userdata',array(
            'userid'    =>  $userid,
            'name'      =>  $insert_data['name'],
            'email'     =>  $insert_data['email'],
            'gender'    =>  $insert_data['gender'],
            'validated' =>  1,
            'usertype'  =>  2
        ));
        
        return $userid;
    }
    
    
    # function for add institute
    function add_institute(){
        $insert_data=array(
            'name'      =>  $this->input->post('name'),
            'username'  =>  $this->input->post('username'),
            'password'  =>  md5(clean_variable($this->input->post('password'))),
            'email'     =>  $this->input->post('email'),
            'phone'     =>  $this->input->post('phone'),
            'address'   =>  $this->input->post('address'),
            'city'      =>  $this->input->post('city'),
            'state'     =>  $this->input->post('state'),
            'zip'       =>  $this->input->post('zip'),
            'user_type' =>  3,
            'is_institute'=>'1',
            'created_at'=>  time(),
            'updated_at'=>  time()
        );
        $this->db->insert('users',$insert_data);
        $userid=$this->db->insert_id();
        $edu_data=array(
            'user_id'       =>  $userid,
            'branchurl'     =>  $this->input->post('branchurl'),
            'examsmodel'    =>  $this->input->post('examsmodel'),
            'coursedetail'  =>  $this->input->post('coursedetail'),
            'history'       =>  $this->input->post('history'),
            'registerdinstitutes'=>  $this->input->post('registerdinstitutes'),
        );
        $this->db->insert('institute',$edu_data);
        
        $this->session->set_userdata('userdata',array(
            'userid'    =>  $userid,
            'name'      =>  $insert_data['name'],
            'email'     =>  $insert_data['email'],
            'validated' =>  1,
            'usertype'  =>  3
        ));
        
        return $userid;
    }
    
    # function search institutes/tutors
    function search()
	{
        $search=$this->input->post('search');
        if(!empty($search) && $search=='institute'){
            $this->db->select('t1.name,t1.address,t1.city,t1.state,phone,t2.history as desc');
            $this->db->from('users t1');
            $this->db->join('institute t2','t1.id=t2.user_id','left');
            $this->db->where('user_type',3);
            return $this->db->get()->result_array();
        }
        elseif(!empty($search) && $search=='tutor'){
            $this->db->select('t1.name,t1.address,t1.city,t1.state,phone,t2.subjects as desc');
            $this->db->from('users t1');
            $this->db->join('tutor t2','t1.id=t2.user_id','left');
            $this->db->where('user_type',2);
            return $this->db->get()->result_array();
        }
        else{
            return;
        }
    }
	
	function searchHomeBox()
	{
		$exam = $this->input->post("exam_search");
		$subject = $this->input->post("subject_search");
		$location = $this->input->post("location_search");
		
		////////////////////////////////////////////////////////////////////////////////

		$this->db->select('i.institute_id,u.name,u.address,u.city,u.state,phone,u.image,i.history as desc');
		$this->db->from('users u');
		$this->db->join('institute i','u.id=i.user_id','left');
		
		if($exam!="")
		{
			$this->db->join('exam_list e','u.id=e.created_by','left');
			$this->db->like('e.exam_name', $exam);
		}
		
		if($subject="")
		{
			$this->db->join('course_subject cs','u.id=cs.created_by','left');
			$this->db->or_like('cs.subject_title', $subject);
		}
		
		if($location="")
		{
			
			$this->db->or_like('u.address', $location);
			$this->db->or_like('u.city', $location);
			$this->db->or_like('u.state', $location);
		}

		
		$this->db->where('u.user_type',2);
		$this->db->or_where('u.user_type',3);
		
		return $this->db->get()->result_array();
	}
	
	
	function getInstitute($userId)
	{
		$this->db->where("user_id",$userId);
		$result = $this->db->get("institute");
		return $result->row();
	}
	
	function save_course($insId)
	{
		$date = date("Y-m-d h:i:s");
		
		$this->db->set("course_title",$this->input->post("course_name"));
		$this->db->set("course_desc",$this->input->post("course_desc"));
		$this->db->set("course_institute_id",$insId);
		$this->db->set("course_created",$date);
		
		$this->db->insert("institute_course");
 
	}
	
	function getAllCourse($insId)
	{
		$this->db->select("*");
		$this->db->where("course_institute_id",1);
		
		$result = $this->db->get("institute_course");
		return $result->result_array();
	}
	
	function getcourse($courseId)
	{
		$this->db->select("*");
		$this->db->where("course_id",$courseId);
		$result = $this->db->get("institute_course");
		return $result->row();
	}
	
	function update_course()
	{
		$this->db->set("course_title",$this->input->post("course_name"));
		$this->db->set("course_desc",$this->input->post("course_desc"));
		$this->db->where("course_id",$this->input->post("course_id"));
		
		$this->db->update("institute_course");
 
	}
	
	///////////////////////////////////////////////////////////////////////
	
	function getSubject($subId)
	{
		
		$this->db->select("*");
		$this->db->where("subject_id",$subId);
		 
		$result = $this->db->get("course_subject");
		return $result->row();
		
	}
	
	
	/////////////////////////////////////////////////////////////////////
	
	function getCourseSubject($insId)
	{
		$this->db->select("s.*,c.course_title");
		$this->db->where("s.course_id",$insId);
		$this->db->join("institute_course as c","c.course_id=s.course_id");
 		
		$result = $this->db->get("course_subject as s");
		return $result->result_array();
	}
	
	
	function getAllSubject($insId)
	{
		$this->db->select("s.*,c.course_title");
		$this->db->where("s.created_by",$insId);
		$this->db->join("institute_course as c","c.course_id=s.course_id");
 		
		$result = $this->db->get("course_subject as s");
		return $result->result_array();
	}
	
	function loadSubject($courseId)
	{
		
		$this->db->select("*");
	//	$this->db->where("course_id",$courseId);
		 
		$result = $this->db->get("course_subject");
		return $result->result();
		
	}
	
	function loadExam($subject)
	{
		
		$this->db->select("*");
		$this->db->where("subject_id",$subject);
		$result = $this->db->get("exam_list");
		return $result->result();
		
	}
	
	function loadModule($exam)
	{
		
		$this->db->select("*");
		$this->db->where("exam_id",$exam);
		$this->db->where("parent",0);
		$result = $this->db->get("test_category");
		return $result->result();
		
	}
 	
	function insertSubject($createdBy)
	{
		$subject = $_POST["subject_name"];
		if(count($subject)>0)
		{
			for($k=0;$k<count($subject);$k++)
			{
				$this->db->set("course_id",$this->input->post('course_name'));
				$this->db->set("subject_title",$_POST["subject_name"][$k]);
				$this->db->set("subject_desc",$_POST["subject_desc"][$k]);
				$this->db->set("subject_status",1);
				$this->db->set("created_by",$createdBy);
				$this->db->insert("course_subject");
			}
		}
 
		//$this->db->query("INSERT INTO course_subject SET course_id='".$this->input->post('course_name')."', subject_title='".$this->input->post('subject_name')."', created_by='".$createdBy."' ");

	}
	
	function updateSubject()
	{
		$this->db->set("subject_title",$this->input->post("subject_name"));
		$this->db->set("course_id",$this->input->post("course_name"));
		
		$this->db->where("subject_id",$this->input->post("subject_id"));
		
		$this->db->update("course_subject");
		
	}
	/////////////////////////////////////////////////////////////////////
	
	function my_score($userid){
       
        $this->db->select('t1.created_at as test_date,t2.exam_id, t1.id,t2.exam_name as title');
        $this->db->from('test_answers t1');
        $this->db->join('exam_list t2','t1.test_category=t2.exam_id','left');
        $this->db->where('userid',$userid);
        return $this->db->get()->result_array();
    }
	
 
	
	/////////////////////////////////////////////////////////////////////
	
	function searchStudent()
	{
		$this->db->select("*");
		$this->db->where("email",$this->input->post("search_email_id"));
		$this->db->where("user_type","4");
		$result = $this->db->get("users");
		return $result->row();
		
	}
	
	function addStudentInstituteOld()
	{
		$this->db->set("created_by",$this->session->userdata('userdata')['userid']);
		$this->db->where("id",$this->input->post("set_user_id"));
		$result = $this->db->update("users");
		
		$this->db->set("current_institute",$this->session->userdata('userdata')['name']);
		$this->db->set("course_name",$this->input->post("course_name"));
		$this->db->where("student_id",$this->input->post("set_student_id"));
		$result = $this->db->update("student");

	}

	function addStudentInstitute($userId)
	{
 		$this->db->set("si_institute_id",$userId);
		$this->db->set("si_course_id",$this->input->post("course_name"));
		$this->db->set("si_student_id",$this->input->post("set_student_id"));
		$this->db->set("si_status",1);
		$result = $this->db->insert("vprep_student_institute");

		
	}
	
	function updateStudentInstitute($userId){
		$i = $this->input->post("set_student_id");
		$q = "Update users set created_by='$userId' where id='$i'";
		$res = $this->db->query($q);
		
		//$this->db->set("created_by", $userId);
		//$this->db->where('id', $this->input->post("set_student_id"));
		//$res = $this->db->update('users');
		
		return $q;
	}
	
	
	function saveNewExam($createdBy){
			
			$insertData = array("exam_name" => $this->input->post("title"),
							"exam_detail" => $this->input->post("description"),
							"exam_max_ques" => $this->input->post("total_question"),
							"exam_time" => $this->input->post("test_time"),
							"is_mock" => $this->input->post("is_mock"),
							"created_by" => $createdBy,
							"course_id" => $this->input->post("course"),
							"subject_id" => $_POST["subject"][0],
							"start_date" => date('Y-m-d',strtotime($this->input->post("start_date"))),
							"end_date" =>  date('Y-m-d',strtotime($this->input->post("end_date"))),
							 
							"marks_for_correct" => $this->input->post("correct_answer"),
							"marks_for_wrong" => $this->input->post("wrong_answer"),
							"marks_for_unattemp" => $this->input->post("unattempted_answer"),
							"exam_tutor_name" => $this->input->post("tutor_name"),
							);
			
            $this->db->insert('exam_list',$insertData);
			
			$examId =  $this->db->insert_id();
			
			$subjectData = $this->input->post("subject");
			$suqu = $this->input->post("subject_ques_num");
			$zz = 0;
			foreach($subjectData as $sub=>$sub_id)
			{
				$this->db->set("exam_course_id",$this->input->post("course"));
				$this->db->set("exam_id",$examId);
				$this->db->set("subject_id",$sub_id);
				$this->db->set("num_question",$suqu[$zz]);
				$this->db->insert("vprep_exam_subject");
				$zz++;
			}
            $this->message->set('Created Successfully', 'success', TRUE, ''); 
            return $examId;
       
    }
	
	function getSavedExam($eid){
		$this->db->select('*');
		$this->db->where('exam_id', $eid);
		return $this->db->get('exam_list')->row_array();
	}
	
	function getSavedExamSubjects($eid){
		$this->db->select('*');
		$this->db->where('exam_id', $eid);
		return $this->db->get('vprep_exam_subject')->result_array();
	}
	
	function saveEditedExam($createdBy, $eid){
			
		$insertData = array("exam_name" => $this->input->post("title"),
							"exam_detail" => $this->input->post("description"),
							"exam_max_ques" => $this->input->post("total_question"),
							"exam_time" => $this->input->post("test_time"),
							"created_by" => $createdBy,
							"course_id" => $this->input->post("course"),
							"subject_id" => $_POST["subject"][0],
							"start_date" => date('Y-m-d',strtotime($this->input->post("start_date"))),
							"end_date" =>  date('Y-m-d',strtotime($this->input->post("end_date"))),
							 
							"marks_for_correct" => $this->input->post("correct_answer"),
							"marks_for_wrong" => $this->input->post("wrong_answer"),
							"marks_for_unattemp" => $this->input->post("unattempted_answer"),
							"exam_tutor_name" => $this->input->post("tutor_name"),
							);
		
		$this->db->where('exam_id', $eid);	
        $this->db->update('exam_list',$insertData);
			
		//$examId =  $this->db->insert_id();
		
		$this->db->query("delete from vprep_exam_subject where exam_id=$eid");
			
		$subjectData = $this->input->post("subject");
		$suqu = $this->input->post("subject_ques_num");
		$zz = 0;	
		foreach($subjectData as $sub=>$sub_id)
		{
			$this->db->set("exam_course_id",$this->input->post("course"));
			$this->db->set("exam_id",$eid);
			$this->db->set("subject_id",$sub_id);
			$this->db->set("num_question",$suqu[$zz]);
			$this->db->insert("vprep_exam_subject");
			$zz++;
		}
		
        $this->message->set('Exam Updated successfully', 'success', TRUE, ''); 
        //return $examId;
    }
	
	function loadExamList($page,$createdBy,$is_mock){
			
		$this->db->select("e.*,ic.course_title,cs.subject_title");
		$this->db->where("e.created_by",$createdBy);
		$this->db->where("e.is_mock",$is_mock);
		$this->db->join("course_subject as cs","cs.subject_id=e.subject_id");
		$this->db->join("institute_course as ic","ic.course_id=e.course_id");
		
		$offset = ($page != 0) ? ((int) ($page-1) * DEFAULT_PER_PAGE) : 0;
        $this->db->limit(DEFAULT_PER_PAGE,$offset);
		
		return $this->db->get('exam_list as e')->result_array();

    }
	
	function loadOnGoingExamListAll($userId, $dt)
	{
		$this->db->select("*");
		$this->db->where("si_student_id", $userId);
		$tuts = $this->db->get('vprep_student_institute')->result_array();
		//if(count($tuts)){
		//$created_by = $tuts[0]['si_institute_id'];
		
		$zz = array();
		$this->db->select("created_by");
		$this->db->where("id", $userId);
		$created_by_user = $this->db->get('users')->result();
		//$created_by_user = $this->user->get_user_details($created_by);
		
	//	foreach($tuts as $t){
	//		$cb = $t['si_institute_id'];
			$arr = $this->db->query("SELECT el.exam_id, el.course_id, el.subject_id, el.exam_name, el.exam_tutor_name, el.exam_time, el.exam_max_ques, el.exam_detail, el.marks_for_correct, el.marks_for_correct, el.marks_for_wrong, el.marks_for_unattemp, el.start_date, el.end_date, el.created_by, el.created_on, el.exam_status, el.is_mock, et.taken_status FROM `exam_list` el left join exam_taken et
on el.exam_id = et.exam_id and et.user_id = $userId WHERE `start_date` <= date('$dt') and `end_date` >= date('$dt') and exam_status=1 ")->result_array();
			$zz = array_merge($zz, $arr);
	//	}
		
		return $zz;
	//	}
	//	else {
	//	return [];
	//	}
		/*
		$qus = array();
		
		foreach($tuts as $t){
			$this->db->select("*");
			$this->db->where("start_date <= ", $dt);
			$this->db->where("end_date >= ", $dt);
			$this->db->where("created_by", $t['si_institute_id']);
			$arr =  $this->db->get('exam_list')->result_array();
			$qus = array_merge($qus, $arr);
		}
		
		$keys = array();
		$tq = array();
		
		foreach($qus as $q){
			if(!in_array($q['exam_id'], $keys)){
				$this->db->select("*");
				$this->db->where("qiz_exam_id", $q['exam_id']);
				$this->db->where("qiz_created_by", $q['created_by']);
				$zz = $this->db->get("vprep_exam_question")->result_array();
				$c = count($zz);
				if($c == $q['exam_max_ques']){
					$keys[] = $q['exam_id'];
					$tq[] = $q;
				}
			}
		}
		
		return $this->db->query("SELECT * FROM `exam_list` WHERE `start_date` <= date('$dt') and `end_date` >= date('$dt') and `created_by` = '$created_by'")->result_array();
		*/
    }	
		
	function loadExamListAll($createdBy)
	{
		$this->db->select("*");
		$this->db->where("created_by", $createdBy);
		$arr = $this->db->get('exam_list')->result_array();
		
		$res = array();
		
		foreach($arr as $a){
			$x = $a['exam_max_ques'];
			$id = $a['exam_id'];
			$ex = $this->db->query("Select * from `vprep_exam_question` where `qiz_exam_id` = '$id' and `qiz_created_by` = '$createdBy'")->result_array();
			if(count($ex) < $x)
				$res[] = $a;
		}
		
		return $res;
    }
	
	function loadExamById($uid, $exam_id)
	{
		$this->db->select("*");
		$this->db->where("exam_id", $exam_id);
		$arr = $this->db->get('exam_list')->row_array();
		
		$tq = $arr['exam_max_ques'];
		
		$this->db->select("*");
		$this->db->where("qiz_exam_id", $exam_id);
		$this->db->where("qiz_created_by", $uid);
		$qarr = $this->db->get('vprep_exam_question')->result_array();
		
		$res = array('tq' => $tq, 'sq' => count($qarr));
		
		return $res;
    }
	
	function availableExamList($exam,$student)
	{
		$this->db->select("*");
		$this->db->where("exam_id",$exam);
		$this->db->where("user_id",$student);
		$this->db->where("taken_status",'2');
		return $this->db->get('exam_taken')->result_array();
    }
	
	
	function totalExamList($createdBy,$is_mock){
			
		$this->db->where("created_by",$createdBy);
		$this->db->where("is_mock",$is_mock);
		return $this->db->get('exam_list')->num_rows();
		
    }
	
	function getExamDetail($examId)
	{
		$this->db->select("*");
		$this->db->where("exam_id",$examId);
		return $this->db->get('exam_list')->row_array();
	}
	
	
	function loadInstitute($userId)
	{
		$this->db->select("u.*,i.*");
		$this->db->from('users u');
		$this->db->where("u.id",$userId);
		$this->db->join("institute as i","i.user_id=u.id","left");
		// $this->db->join("institute_course as c","c.course_id=s.course_name");
		return $this->db->get()->row();
	}
	
	function updateInstituteInfo($fileName=NULL)
	{
		$user_id = $this->input->post('id');
		if($fileName!=NULL)
		{
			
			 $insert_data=array(
				'name'      =>  $this->input->post('first_name').' '.$this->input->post('last_name'),
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
				'name'      =>  $this->input->post('first_name').' '.$this->input->post('last_name'),
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
			
 
			
			
		
	}
	
///// Module Section //////////////////////////////////////////////////////////////////////////////////////


	function getModuleData($page=0,$userid=0)
	{
        $this->db->select('t1.*,t2.title as parent_title,ex.exam_name');
        $this->db->from('test_category t1');
        $this->db->join('test_category t2','t1.parent=t2.id','left');
        $this->db->join('exam_list ex','t1.exam_id=ex.exam_id','left');
        if(!empty($userid)){
            $this->db->where('t1.created_by',$this->session->userdata('userdata')['userid']);
        }
		
        $offset = ($page != 0) ? ((int) ($page-1) * 10) : 0;
        $this->db->limit(10,$offset);
        return $this->db->get()->result_array();
    }
	
	function getSubjectList($userId)
	{
		$this->db->select("*");
		$this->db->where("subject_status",1);
		$this->db->where("created_by",1);
		return $this->db->get("course_subject")->result();
		
	}
	
	function addModule($userId)
	{
		$moduleList = $this->input->post("module_name");
		
		if(count($moduleList)>0)
		{
			for($k=0;$k<count($moduleList);$k++)
			{
				$this->db->set("module_subject_id",$this->input->post("subject_id"));
				$this->db->set("module_title",$_POST["module_name"][$k]);
				$this->db->set("module_parent_id",0);
				$this->db->set("module_created_by",$userId);
				$this->db->set("module_status",1);
				$this->db->set("module_created",date("Y-m-d h:i:s"));
				$this->db->insert('vprep_module');
				
			}
			
			$this->message->set('Module has been Added Successfully !!', 'success', TRUE, ''); 
			return $this->db->insert_id();
			
		}

        
    }
	
	function getModuleList($page,$userId)
	{
		$this->db->select("m.*,s.subject_title");
		$this->db->where("module_created_by",$userId);
		$this->db->where("module_parent_id",0);
		$this->db->join("course_subject as s",'s.subject_id=m.module_subject_id');

        $offset = ($page != 0) ? ((int) ($page-1) * 10) : 0;
        $this->db->limit(10,$offset);
 		
		return $this->db->get("vprep_module as m")->result_array();
		
	}
	
	function getTotalModuleList($userId)
	{
		$this->db->select("*");
		$this->db->where("module_created_by",$userId);
		$this->db->where("module_parent_id",0);
 
		return $this->db->get("vprep_module")->num_rows();
		
	}
	
	function deleteModule($userId,$moduleId)
	{
 
		$this->db->where("module_created_by",$userId);
		$this->db->where("module_id",$moduleId);
		 
		$this->db->delete('vprep_module');
		
		$this->message->set('Module has been Deleted Successfully !!', 'success', TRUE, ''); 
		 
        
    }
	
	function getModuleInfo($moduleId)
	{
		$this->db->select("*");
		$this->db->where("module_id",$moduleId);
 
		return $this->db->get("vprep_module")->row();
	}
	 
	function updateModule($userId,$module_id)
	{
		$this->db->set("module_subject_id",$this->input->post("subject_id"));
		$this->db->set("module_title",$this->input->post("module_name"));
		$this->db->where("module_id",$module_id);
		$this->db->update('vprep_module');
		
		$this->message->set('Module has been Updated Successfully !!', 'success', TRUE, ''); 
        
    }
////////////////////////////////////////////////////////////////////////////////////////////////////


	
	function getTotalSubModuleList($userId)
	{
		$this->db->select("*");
		$this->db->where("module_created_by",$userId);
		$this->db->where("module_parent_id !=",0);
 
		return $this->db->get("vprep_module")->num_rows();
		
	}	
	
	function getModuleSubjectWiseList($userId,$subject=18)
	{
		$this->db->select("*");
		$this->db->where("module_created_by",$userId);
		$this->db->where("module_parent_id",0);
		$this->db->where("module_subject_id",$subject);
		return $this->db->get("vprep_module")->result();
		
	}
	
	function addSubModule($userId)
	{
		$moduleList = $this->input->post("module_name");
		
		if(count($moduleList)>0)
		{
			for($k=0;$k<count($moduleList);$k++)
			{
				$this->db->set("module_subject_id",$this->input->post("subject_id"));
				$this->db->set("module_title",$_POST["module_name"][$k]);
				$this->db->set("module_parent_id",$this->input->post("module_id"));
				$this->db->set("module_created_by",$userId);
				$this->db->set("module_status",1);
				$this->db->set("module_created",date("Y-m-d h:i:s"));
				$this->db->insert('vprep_module');
			}
		}
		
		$this->message->set('Module has been Added Successfully !!', 'success', TRUE, ''); 
		return $this->db->insert_id();
        
    }
	
	function updateSubModule($userId,$module_id)
	{
		$this->db->set("module_subject_id",$this->input->post("subject_id"));
		$this->db->set("module_title",$this->input->post("module_name"));
		$this->db->set("module_parent_id",$this->input->post("parent_module_id"));
		
		$this->db->where("module_id",$module_id);
		$this->db->update('vprep_module');
		
		$this->message->set('Sub Module has been Updated Successfully !!', 'success', TRUE, ''); 
        
    }
	
	function getModuleBySubject($sid)
	{
		$this->db->select("*");
		//$this->db->where("module_subject_id",$this->input->post("subject_id"));
		$this->db->where("module_subject_id", $sid);
		$this->db->where("module_parent_id",0);
		return $this->db->get("vprep_module")->result();
		
		
	}
	
	function getSubModuleList()
	{
		$this->db->select("*");
		$this->db->where("module_subject_id",$this->input->post("subject_id"));
		$this->db->where("module_parent_id",$this->input->post("module"));
		return $this->db->get("vprep_module")->result();
		
	} 
	
	function getMByS($si)
	{
		$this->db->select("*");
		$this->db->where("module_subject_id", $si);
		$this->db->where("module_parent_id", 0);
		return $this->db->get("vprep_module")->result();
	}
	
	function getSML($m, $si)
	{
		$this->db->select("*");
		$this->db->where("module_subject_id", $si);
		$this->db->where("module_parent_id", $m);
		return $this->db->get("vprep_module")->result();
	} 
	
	function checkQuestion($tit)
    {
        $this->db->select("*");
        $this->db->where("title", $tit);
        $arr = $this->db->get("test_questions")->result();
        return $arr;
    }
    
    
    function save_study_material()
	{
	
	
	$random_view=rand(1000,2999);
	
	$random_star=rand(0,9);
	$random_star= "4.".$random_star;
	$createdBy=1;
	
	
	
         if($this->input->post('question_title'))
         $this->db->set("Question_title",$this->input->post('question_title'));
         $this->db->set("subject_id",$this->input->post('subject_id'));
         $this->db->set("module_id",$this->input->post('module'));
         $this->db->set("sub_module_id",$this->input->post('sub_module'));
         $this->db->set("question_type",$this->input->post('question_type'));
         $this->db->set("Ques_type",$this->input->post('question_type'));
         $this->db->set("ques_img",'');
         $this->db->set("difficulty_level",$this->input->post('difficulty_level'));
         $this->db->set("tags",$this->input->post('module_for_tag'));
         $this->db->set("title",$this->input->post('title'));
         $this->db->set("Rating",$random_star);
         $this->db->set("views",$random_view);
         $this->db->set("solution",$this->input->post('solution'));
         $this->db->set("created_by",'3');
         $this->db->set("updated_by",'3');
         
         $this->db->set("updated_at",time());
             
            $this->db->insert('study_material');
         
         
		
			
            $this->message->set('Test Question has been added successfully', 'success', TRUE, ''); 
            return 0;
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
	
	function save_test_questions($userid,$questionImage,$option1_img,$option2_img,$option3_img,$option4_img,$solution_img)
	{
         
			$getData = $this->input->post();
         
     
            $this->db->set("subject_id",$getData["subject_id"]);
          
            $this->db->set("module_id",$getData["module"]);
			
			if($this->input->post("sub_module"))
			{
				$this->db->set("sub_module_id",$getData["sub_module"]);
			}
          
            $this->db->set("question_type",$getData["question_type"]);
            // $this->db->set("Ques_type",$getData["course"]);
			
			if($getData["question_type"]==1 || $getData["question_type"]==2)
			{
				 $this->db->set("ques_img",$questionImage);
			}
			else
			{
				// $this->db->set("ques_img",$questionImage);
			}
			$this->db->set("solution_type",$getData["solution_type"]);
			if($getData["solution_type"]==1 || $getData["solution_type"]==2)
			{
				 $this->db->set("solution_img",$solution_img);
			}
			else
			{
				// $this->db->set("ques_img",$questionImage);
			}
			
            $this->db->set("difficulty_level",$getData["difficulty_level"]);
            $this->db->set("title",$getData["title"]);
            $this->db->set("solution",$getData["solution"]);
			
            $this->db->set("option1_type",$getData["option_type_1"]);
			
			if($getData["option_type_1"]==1)
			{
				 $this->db->set("option1",$option1_img);
			}
           else
		   {
			   $this->db->set("option1",$getData["option1"]);
		   }
			
            $this->db->set("option2_type",$getData["option_type_2"]);
			
			if($getData["option_type_2"]==1)
			{
				$this->db->set("option2",$option2_img);
			}
			else
			{
				$this->db->set("option2",$getData["option2"]);   
			}
			
            $this->db->set("option3_type",$getData["option_type_3"]);
			
			if($getData["option_type_3"]==1)
			{
				$this->db->set("option3",$option3_img);
			}
            else
			{
				$this->db->set("option3",$getData["option3"]);
			}
			
            $this->db->set("option4_type",$getData["option_type_4"]);
			
			if($getData["option_type_4"])
			{	
				$this->db->set("option4",$option4_img);
			}
			else
			{
				$this->db->set("option4",$getData["option4"]);
			}

			$this->db->set("correct_ans",$getData["correct_ans"]);
            $this->db->set("created_by",$userid);
			
            $this->db->set("created_at",time());
             
            $this->db->insert('test_questions');
			
            $this->message->set('Test Question has been added successfully', 'success', TRUE, ''); 
            return $this->db->insert_id();
        
    }
	
	function save_edited_test_questions($userid,$questionImage,$option1_img,$option2_img,$option3_img,$option4_img)
	{
         
			$getData = $this->input->post();
         
     
            $this->db->set("subject_id",$getData["subject_id"]);
          
            $this->db->set("module_id",$getData["module"]);
			
			if($this->input->post("sub_module"))
			{
				$this->db->set("sub_module_id",$getData["sub_module"]);
			}
          
            $this->db->set("question_type",$getData["question_type"]);
            
            $this->db->set("solution",$getData["solution"]);
            // $this->db->set("Ques_type",$getData["course"]);
			
			if($getData["question_type"]==0||$getData["question_type"]==2){
				 $this->db->set("title",$getData["title"]);
			}else{
				 $this->db->set("title", "");
			}
			
			if($getData["question_type"]==1 || $getData["question_type"]==2)
			{
				 $this->db->set("ques_img",$questionImage);
			}
			else
			{
				// $this->db->set("ques_img",$questionImage);
			}
			
            $this->db->set("difficulty_level",$getData["difficulty_level"]);
           
			
            $this->db->set("option1_type",$getData["option_type_1"]);
			
			if($getData["option_type_1"]==1)
			{
				 $this->db->set("option1",$option1_img);
			}
           else
		   {
			   $this->db->set("option1",$getData["option1"]);
		   }
			
            $this->db->set("option2_type",$getData["option_type_2"]);
			
			if($getData["option_type_2"]==1)
			{
				$this->db->set("option2",$option2_img);
			}
			else
			{
				$this->db->set("option2",$getData["option2"]);   
			}
			
            $this->db->set("option3_type",$getData["option_type_3"]);
			
			if($getData["option_type_3"]==1)
			{
				$this->db->set("option3",$option3_img);
			}
            else
			{
				$this->db->set("option3",$getData["option3"]);
			}
			
            $this->db->set("option4_type",$getData["option_type_4"]);
			
			if($getData["option_type_4"])
			{	
				$this->db->set("option4",$option4_img);
			}
			else
			{
				$this->db->set("option4",$getData["option4"]);
			}

			$this->db->set("correct_ans",$getData["correct_ans"]);
            $this->db->set("created_by",$userid);
			
            $this->db->set("updated_at",time());
             
			$this->db->where('id', $getData['id']); 
			 
            $this->db->update('test_questions');
			
            $this->message->set('Test Question has been added successfully', 'success', TRUE, ''); 
            return $this->db->insert_id();
        
    }
	
	function get_test_questions($page=0,$userId,$subject_id,$module,$sub_module){
        $this->db->select('q.*,s.subject_title,m.module_title,sm.module_title as sb_module_title');
        $this->db->from('test_questions q');
        $this->db->join('vprep_module m','m.module_id=q.module_id');
        $this->db->join('vprep_module sm','sm.module_id=q.sub_module_id',"left");
        $this->db->join('course_subject s','s.subject_id=q.subject_id');
        
        
        if(!(!isset($module) || trim($module)==='')){
        $this->db->where('m.module_id',$module);
        if(!(!isset($sub_module) || trim($sub_module)===''))
        $this->db->where('sm.module_id',$sub_module);
        
        }
        
        
        
        
        $this->db->where('q.created_by',$userId);
        $this->db->where('s.subject_id',$subject_id);
        $offset = ($page != 0) ? ((int) ($page-1) * DEFAULT_PER_PAGE) : 0;
        $this->db->limit(DEFAULT_PER_PAGE,$offset);
        
        $this->db->order_by('q.id', 'asc');
        return $this->db->get()->result_array();
    }
    
    
    
     function total_test_question_time($userId,$subject_id,$module,$sub_module,$time_from,$time_to){
        
        $this->db->select('q.*');
        $this->db->from('test_questions q');
        $this->db->join('vprep_module m','m.module_id=q.module_id');
        $this->db->join('vprep_module sm','sm.module_id=q.sub_module_id',"left");
        $this->db->join('course_subject s','s.subject_id=q.subject_id');
        
        
        if(!(!isset($module) || trim($module)==='')){
        $this->db->where('m.module_id',$module);
        
        }
        
        
        if(!(!isset($sub_module) || trim($sub_module)===''))
        $this->db->where('sm.module_id',$sub_module);
        
        if(!(!isset($time_from) || trim($time_from)===''))
        $this->db->where('created_at>',$time_from);
        
        if(!(!isset($time_to) || trim($time_to)===''))
        $this->db->where('created_at<',$time_to);
        
        $this->db->where('q.created_by',$userId);
        $this->db->where('s.subject_id',$subject_id);
       
        $this->db->order_by('q.id','asc');
        return $this->db->get()->num_rows();
    }
  
	 function total_test_question($userId,$subject_id,$module,$sub_module){
        
        $this->db->select('q.*');
        $this->db->from('test_questions q');
        $this->db->join('vprep_module m','m.module_id=q.module_id');
        $this->db->join('vprep_module sm','sm.module_id=q.sub_module_id',"left");
        $this->db->join('course_subject s','s.subject_id=q.subject_id');
        
        
        if(!(!isset($module) || trim($module)==='')){
        $this->db->where('m.module_id',$module);
        
        }
        
        
        if(!(!isset($sub_module) || trim($sub_module)===''))
        $this->db->where('sm.module_id',$sub_module);
        
        $this->db->where('q.created_by',$userId);
        $this->db->where('s.subject_id',$subject_id);
       
        $this->db->order_by('q.id','asc');
        return $this->db->get()->num_rows();
    }
    
    
    
    
        function getFilterQuestionsUserSubject($page=0,$userId,$subjectId){
        $this->db->select('q.*,s.subject_title,m.module_title,m.module_title as sb_module_title');
        $this->db->from('test_questions q');
        $this->db->join('vprep_module m','m.module_id=q.module_id');
       // $this->db->join('vprep_module sm','sm.module_id=q.sub_module_id');
        $this->db->join('course_subject s','s.subject_id=q.subject_id');
		
        
        
        $this->db->where('q.subject_id',$subjectId);
	$this->db->where_in('q.created_by',array($userId,1));
		
		
       
       // $offset = ($page != 0) ? ((int) ($page-1) * DEFAULT_PER_PAGE) : 0;
       //  $this->db->limit(DEFAULT_PER_PAGE,$offset);
        
        $this->db->order_by('q.id','desc');
        $arr = $this->db->get()->result_array();
		
		$res = array();
		
		$exid = $this->input->post("exam_id");
		
		foreach($arr as $a){
			$id = $a['id'];
			$ex = $this->db->query("Select * from `vprep_exam_question` where `qiz_exam_id`='$exid' and `qiz_question_id`='$id' and `qiz_created_by`='$userId'")->result_array();
			if((count($ex)>0))
				$res[] = $a;
		}
		
		return $res;
    }
    
    
    
    
    
    	function getFilterQuestionsUser($page=0,$userId){
        $this->db->select('q.*,s.subject_title,m.module_title,m.module_title as sb_module_title');
        $this->db->from('test_questions q');
        $this->db->join('vprep_module m','m.module_id=q.module_id');
       // $this->db->join('vprep_module sm','sm.module_id=q.sub_module_id');
        $this->db->join('course_subject s','s.subject_id=q.subject_id');
		
        $this->db->where('q.created_by',$userId);
         $this->db->or_where('q.created_by',1);
        
       
       // $offset = ($page != 0) ? ((int) ($page-1) * DEFAULT_PER_PAGE) : 0;
       //  $this->db->limit(DEFAULT_PER_PAGE,$offset);
        
        $this->db->order_by('q.id','desc');
        $arr = $this->db->get()->result_array();
		
		$res = array();
		
		$exid = $this->input->post("exam_id");
		
		foreach($arr as $a){
			$id = $a['id'];
			$ex = $this->db->query("Select * from `vprep_exam_question` where `qiz_exam_id`='$exid' and `qiz_question_id`='$id' and `qiz_created_by`='$userId'")->result_array();
			if((count($ex)>0))
				$res[] = $a;
		}
		
		return $res;
    }
    function getSubjectQuestionNumber($exid, $id){
    
    $ex = $this->db->query("Select num_question from `vprep_exam_subject` where `exam_id`='$exid' and `subject_id`='$id'")->result_array();
    return $ex;
    }
    function getExamMaxQuestion($exid){
    
    $ex = $this->db->query("Select exam_max_ques from `exam_list` where `exam_id`='$exid'")->result_array();
    return $ex;
    }
    function getExamMaxQuestionAdded($exid){
    
    $ex = $this->db->query("Select * from `vprep_exam_question` where `qiz_exam_id`='$exid'")->num_rows();
    return $ex;
    }
	
	
	function getFilterQuestions($page=0,$userId){
        $this->db->select('q.*,s.subject_title,m.module_title,m.module_title as sb_module_title');
        $this->db->from('test_questions q');
        $this->db->join('vprep_module m','m.module_id=q.module_id');
        //$this->db->join('vprep_module sm','sm.module_id=q.sub_module_id');
        $this->db->join('course_subject s','s.subject_id=q.subject_id');
	if($userId==1)	
	$this->db->where_in('q.created_by',array($userId,1,2,3));
	else
        $this->db->where('q.created_by',$userId);
        
        $this->db->where('q.subject_id',$this->input->post("subject_id"));
        if($this->input->post("level_id"))
		{
		$this->db->where('q.difficulty_level',$this->input->post("level_id"));
		}
		if($this->input->post("module"))
		{
			$this->db->where('q.module_id',$this->input->post("module"));
		}
		//sub_module
		if($this->input->post("sub_module"))
		{
			$this->db->where('q.sub_module_id',$this->input->post("sub_module"));
		}
       
       // $offset = ($page != 0) ? ((int) ($page-1) * DEFAULT_PER_PAGE) : 0;
       //  $this->db->limit(DEFAULT_PER_PAGE,$offset);
        
        $this->db->order_by('q.id','desc');
        $arr = $this->db->get()->result_array();
		
		$res = array();
		
		$exid = $this->input->post("exam_id");
		
		foreach($arr as $a){
			$id = $a['id'];
	//		$ex = $this->db->query("Select * from `vprep_exam_question` where `qiz_exam_id`='$exid' and `qiz_question_id`='$id' and 
 // `qiz_created_by`='$userId'")->result_array();
			if(true)
				$res[] = $a;
		}
		
		return $res;
    }
  
	function addQuestionToExam($userId)
	{
		$questionData = $this->input->post("add_Question");
		
                 $eid= $this->input->post("exam_id");
                 $subject_id = $this->input->post("subject_id");
                 
                $this->db->where("qiz_exam_id",$eid);
	//	$this->db->where("qiz_subject_id",$subject_id);
		 
		$this->db->delete('vprep_exam_question');
                 
		
		
		foreach($questionData as $quiz)
		{
			if($this->getExamQuesCheck($this->input->post("exam_id"),$quiz)==0)
			{
				$this->db->set("qiz_exam_id",$this->input->post("exam_id"));
				$this->db->set("qiz_course_id",$this->input->post("course"));
				$this->db->set("qiz_subject_id",$this->input->post("subject_id"));
				$this->db->set("qiz_module_id",$this->input->post("module"));
				$this->db->set("qiz_question_id",$quiz);
				$this->db->set("qiz_created_by",$userId);	
				$this->db->insert('vprep_exam_question');
			}
		 
		}
		
		//$this->message->set('Questions has been Added Successfully !!', 'success', TRUE, ''); 
		return $this->db->insert_id();
        
    }
	
	function getExamQuesCheck($examId,$quesId)
	{
		$this->db->select("*");
		$this->db->where("qiz_exam_id",$examId);
		$this->db->where("qiz_question_id",$quesId);
		return $this->db->get('vprep_exam_question')->num_rows();
	}
	
	function getTotalExamQuez($examId)
	{
		$this->db->select("*");
		$this->db->where("qiz_exam_id",$examId);
		return $this->db->get("vprep_exam_question")->num_rows();
	}
  
	function getExamInfo($examId)
	{
		$this->db->select("*");
		$this->db->where("exam_id",$examId);
		return $this->db->get("exam_list")->row();
		
	}
	 
	     # function get tes questions from category
    function get_test_exam_questions($exam_id,$page=0)
	{
        $this->db->select('q.*,eq.qiz_exam_id as exam_id');
        $this->db->join('test_questions q','q.id=eq.qiz_question_id');
        $this->db->order_by('eq.qiz_id','ASC');
		 
      //  $offset = ($page != 0) ? ((int) ($page-1) * 1) : 0;
      //  $this->db->limit(1,$page);
        $questions = $this->db->get_where('vprep_exam_question as eq',array('eq.qiz_exam_id'=>$exam_id))->result_array();
        return $questions;    
}
    
    function get_test_exam_questions2($exam_id,$page=0)
	{
        $result = $this->db->query('select q.*, eq.qiz_exam_id as exam_id from test_questions q inner join vprep_exam_question eq on q.id = eq.qiz_question_id where eq.qiz_exam_id = 71 order by eq.qiz_id asc')->result_array();

        
        
        return $result;
    }
    
    function get_test_exam_result_user($user_id,$exam_id)
	{
        $this->db->select('*');
        $this->db->where("test_category",$exam_id);
        $this->db->where("userid",$user_id);
        return $this->db->get("test_answers")->row_array();
    }
    
    #function get test category question count
    function get_test_exam_questions_count($exam_id){
        return $this->db->get_where('vprep_exam_question',array('qiz_exam_id'=>$exam_id))->num_rows();
    }
	
	function getBooksList($userId)
	{
		$this->db->select("*");
		$this->db->where("book_status",1);
		$this->db->where("book_uploaded_by",$userId);
		return $this->db->get("vprep_book")->result();
		
	}
	
	function addNewBook($userId,$cover,$bookfile)
	{
		$questionData = $this->input->post("add_Question");
		 
			$this->db->set("book_name",$this->input->post("book_name"));
			$this->db->set("book_cover_page",$cover);
			$this->db->set("book_file_name",$bookfile);
			// $this->db->set("book_file_type",$this->input->post("subject_id"));
			$this->db->set("book_author",$this->input->post("book_author"));
			$this->db->set("book_publisher",$this->input->post("book_publisher"));
			$this->db->set("book_detail",$this->input->post("book_detail"));
			$this->db->set("book_price",$this->input->post("book_mrp"));
			$this->db->set("book_sale_price",$this->input->post("book_sale_price"));
			$this->db->set("book_status",1);
			$this->db->set("book_added_on",date("Y-m-d H:i:s"));
			$this->db->set("book_uploaded_by",$userId);
			
			$this->db->insert('vprep_book');
		
		$this->message->set('Book has been Added Successfully !!', 'success', TRUE, ''); 
		return $this->db->insert_id();
        
    }
	
	function getSubModuleData($page,$userId)
	{
		$this->db->select("m.*,s.subject_title");
		$this->db->where("module_created_by",$userId);
		$this->db->where("module_parent_id !=",0);
		$this->db->join("course_subject as s",'s.subject_id=m.module_subject_id');

        $offset = ($page != 0) ? ((int) ($page-1) * 10) : 0;
        $this->db->limit(10,$offset);
 		
		return $this->db->get("vprep_module as m")->result_array();
		
	}
	
	function getTotalSubModuleData($userId)
	{
		$this->db->select("*");
		$this->db->where("module_created_by",$userId);
		$this->db->where("module_parent_id !=",0);
 
		return $this->db->get("vprep_module")->num_rows();
		
	}
	function add_new_student_user($userId)
	{
		$this->db->select("*");
		$this->db->where("created_by",$userId);
		
 
		return $this->db->get("users")->result_array();
		
	}

	
	 
    # functiona get student list
    function get_students($page=0,$for=0){
        if(!empty($for)){
            $this->db->where('si.si_institute_id',(int)$for);
        }
        $offset = ($page != 0) ? ((int) ($page-1) * DEFAULT_PER_PAGE) : 0;
        $this->db->limit(DEFAULT_PER_PAGE,$offset);
		$this->db->join('users as u','u.id=si.si_student_id');
        $this->db->join('institute_course as c','c.course_id=si.si_course_id');
        return $this->db->get('vprep_student_institute as si')->result_array();
    }
    
    # get total student
    function total_student($for=0){
        if(!empty($for)){
            $this->db->where('si_institute_id',(int)$for);
        }
        return $this->db->get('vprep_student_institute')->num_rows();
    }
	
	
	
	function add_student_new($for=0){
        $userid=0;
        
		
		if($this->input->post('username')!="")
		{
			$username = $this->input->post('username');
		}
		else
		{
			$username = $this->input->post('email');
		}
		
		if($this->input->post('first_name')!="")
		{
			$name = $this->input->post('first_name')." ".$this->input->post('last_name');
		}
		else
		{
			$name = "";
		}
		
		
        $insert_data=array(
            'name'      =>  $name,
            'username'  =>  $username,
            'password'  =>  md5(clean_variable($this->input->post('password'))),
            'email'     =>  $this->input->post('email'),
            'roll_no'     =>  $this->input->post('roll_no'),
            'year_of_adm'     =>  $this->input->post('year_of_adm'),
            'branch'     =>  $this->input->post('branch'),
            'group'     =>  $this->input->post('group'),
            'sub_group'     =>  $this->input->post('sub_group'),
            'phone'     => "",
            'address'   =>  "",
            'city'      => "",
            'state'     => "",
            'zip'       =>  "",
            'gender'    =>  "",
            'dob'       =>  "",
            'user_type' =>  4,
            'created_by' =>  $for,
            'created_at'=>  time(),
            'updated_at'=>  time()
        );
        $this->db->insert('users',$insert_data);
        $row_id=$this->db->insert_id();
			
			
            $this->message->set('Account Created Successfully, Login Details sent on your Mail.', 'success', TRUE);
			 
         
        return $row_id;
        }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	function add_student($for=0){
        $userid=0;
		
		if($this->input->post('username')!="")
		{
			$username = $this->input->post('username');
		}
		else
		{
			$username = $this->input->post('email');
		}
		
		if($this->input->post('first_name')!="")
		{
			$name = $this->input->post('first_name')." ".$this->input->post('last_name');
		}
		else
		{
			$name = "";
		}
		
		
        $insert_data=array(
            'name'      =>  $name,
            'username'  =>  $username,
            'password'  =>  md5(clean_variable($this->input->post('password'))),
            'email'     =>  $this->input->post('email'),
            'phone'     => "",
            'address'   =>  "",
            'city'      => "",
            'state'     => "",
            'zip'       =>  "",
            'gender'    =>  "",
            'dob'       =>  "",
            'user_type' =>  4,
            'created_at'=>  time(),
            'updated_at'=>  time()
        );
        
        if(!empty($for)){
            $insert_data['created_by']=$for;
        }
  
            $this->db->insert('users',$insert_data);
            $userid=$this->db->insert_id();
            
			$stu_data=array(
                'user_id'           =>  $userid,
                'current_institute' =>  $this->input->post('current_institute'),
                'prepairing_for'    =>  $this->input->post('prepairing_for'),
				'course_name'		=>	$this->input->post('course_name')
            );
			
            $this->db->insert('student',$stu_data);
			$student_id=$this->db->insert_id();
			
			$student_data=array(
                'si_student_id'     =>  $userid,
                'si_course_id' =>  $this->input->post('course_name'),
                'si_institute_id'    =>  $for,
				'si_status'		=>	0
            );
			
			 $this->db->insert('vprep_student_institute',$student_data);
			$row_id=$this->db->insert_id();
			
			
            $this->message->set('Account Created Successfully, Login Details sent on your Mail.', 'success', TRUE);
			 
         
        return $row_id;
    }
	
	
	/*
	*	ANSH 
	*/
	
	function getSubjects($uid, $eid, $cid)
	{
		$fa = array();
		$ra = $this->db->query("SELECT * FROM `vprep_exam_subject` WHERE exam_course_id='$cid' and exam_id='$eid'")->result_array();
		foreach($ra as $a){
			$z = $this->db->query("SELECT * FROM `vprep_exam_question` WHERE qiz_exam_id='$eid' and qiz_course_id='$cid' and qiz_subject_id='$a[subject_id]' and qiz_created_by='$uid'")->result_array();
			if(count($z) < ((int) $a['num_question'])){
				$fa[] = $this->db->query("SELECT * FROM  `course_subject` where subject_id = '$a[subject_id]' ")->row_array();
			}	
		}
		return $fa;
	}
	
	function countExamSubjectQuestions($cid, $sid, $eid)
	{
		$ra = $this->db->query("SELECT * FROM `vprep_exam_subject` WHERE exam_course_id='$cid' and subject_id='$sid' and exam_id='$eid'")->row_array();
		return (int) $ra['num_question'];
	}
	
	function countExamSubjectSelectedQuestions($cid, $sid, $eid, $uid)
	{
		$ra = $this->db->query("SELECT * FROM `vprep_exam_question` WHERE qiz_course_id='$cid' and qiz_subject_id='$sid' and qiz_exam_id='$eid' and qiz_created_by='$uid'")->result_array();
		return count($ra);
	}
	
	function getExamCourse($eid){
		$this->db->select("*");
		$this->db->where("exam_id", $eid);
		$result = $this->db->get("exam_list")->row_array();
		
		$this->db->select("*");
		$this->db->where("course_id", $result['course_id']);
		$ca = $this->db->get("institute_course")->row_array();
		
		$res = array('exam_id' => $eid, 'exam_name' => $result['exam_name'], 'course_id' => $result['course_id'], 'course_name' => $ca['course_title']);
		
		return $res;
	}
	
	function top_ten_scorer($examId, $page)
	{
	$offset = $page;
	
	$this->db->query("SET @rnk=0");
	$this->db->query("set @rank=0 ");
	$this->db->query("set @curscore=0 ");
	$result = $this->db->query("select userid, name, city, score, rank from (select ta.userid, u.name, ta.score, u.city, (@rnk:=IF(@curscore=score,@rnk,@rnk+1)) rnk,(@rank:=IF(@curscore=score,@rank,@rnk)) rank, (@curscore:=score) newscore from test_answers ta inner join users u on ta.userid = u.id where test_category = 71 order by score desc) a ")->result_array();
	
//	$result = $this->db->query("SELECT ta.id, ta.userid, u.name, u.city, ta.score FROM `test_answers` ta inner join users u on ta.userid = u.id where ta.test_category = $examId order by ta.score desc" )->result_array();

	

            return $result;
            
         
	}
}

