<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Educational_model extends CI_Model {
    
    function __construct(){
        parent::__construct();
    }
    
	
	    # get list of test categories
    function get_exam_categories($page=0,$userid=0){
        $this->db->select('t1.*,t2.title as parent_title');
        $this->db->from('test_category t1');
        $this->db->join('test_category t2','t1.parent=t2.id','left');
        if(!empty($userid)){
            $this->db->where('t1.created_by',$this->session->userdata('userdata')['userid']);
        }
		
        $offset = ($page != 0) ? ((int) ($page-1) * DEFAULT_PER_PAGE) : 0;
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
        $return_arr=array("" => 'Choose Exam');
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
    
    function total_test_categories(){
        $this->db->from('exam_category t1');
        $this->db->join('exam_category t2','t1.parent=t2.id','left');
        $this->db->where('t1.created_by',$this->session->userdata('userdata')['userid']);
        return $this->db->get()->num_rows();
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
            $this->message->set('Exam Category has been updated successfully', 'success', TRUE, ''); 
            return $post_data['id'];
        }
        else{
            $post_data['created_at']=time();
            $post_data['created_by']=!empty($this->session->userdata('userdata')['userid'])?$this->session->userdata('userdata')['userid']:1;
            $this->db->insert('test_category',$post_data);
            $this->message->set('Exam Category has been added successfully', 'success', TRUE, ''); 
            return $this->db->insert_id();
        }
    }
    
    # get list of test categories
    function get_test_questions($page=0){
        $this->db->select('t1.id,t1.title,t1.question_type as test_category_id,t2.title as test_category');
        $this->db->from('test_questions t1');
        $this->db->join('test_category t2','t1.question_type=t2.id','left');
        $this->db->where('t2.created_by',$this->session->userdata('userdata')['userid']);
        $offset = ($page != 0) ? ((int) ($page-1) * DEFAULT_PER_PAGE) : 0;
        $this->db->limit(DEFAULT_PER_PAGE,$offset);
        
        $this->db->order_by('t1.id','desc');
        return $this->db->get()->result_array();
    }
    
    function total_test_question(){
        $this->db->from('test_questions t1');
        $this->db->join('test_category t2','t1.question_type=t2.id','left');
        $this->db->where('t2.created_by',$this->session->userdata('userdata')['userid']);
        return $this->db->get()->num_rows();
    }
    
    # get test category
    function get_test_question($id=0){
        return $this->db->get_where('test_questions',array('id'=>$id))->row_array();
    }
    
    # function get tes questions from category
    function get_test_category_questions($exam_id,$page=0){
        $this->db->select('id,question_type,title,option1,option2,option3,option4');
        //$offset = ($page != 0) ? ((int) ($page-1) * 1) : 0;
        $this->db->limit(1,$page);
        return $this->db->get_where('test_questions',array('question_type'=>$exam_id))->row_array();
    }
    
    #function get test category question count
    function get_test_category_questions_count($exam_id){
        return $this->db->get_where('test_questions',array('question_type'=>$exam_id))->num_rows();
    }
    
    # function get test time from test category table 
    function get_test_time($test_cat_id){
        return $this->db->get_where('test_category',array('id'=>$test_cat_id))->row_array()['test_time'];
    }
    
    function save_test_questions(){
        $post_data=$this->input->post();
        $post_data['updated_at']=time();
        $post_data['updated_by']=!empty($this->session->userdata('userdata')['id'])?$this->session->userdata('userdata')['id']:1;
        unset($post_data['save']);
        if(!empty($post_data['id'])){
            $this->db->where('id',$post_data['id']);
            $this->db->update('test_questions',$post_data);
            $this->message->set('Test Question has been updated successfully', 'success', TRUE, ''); 
            return $post_data['id'];
        }
        else{
            $post_data['created_at']=time();
            $post_data['created_by']=!empty($this->session->userdata('userdata')['id'])?$this->session->userdata('userdata')['id']:1;
            $this->db->insert('test_questions',$post_data);
            $this->message->set('Test Question has been added successfully', 'success', TRUE, ''); 
            return $this->db->insert_id();
        }
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
            'dob'       =>  $this->input->post('dob'),
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
    function search(){
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
	
	
	function getInstitute($userId)
	{
		$this->db->where("user_id",$userId);
		$result = $this->db->get("institute");
		return $result->row();
	}
	
	function save_course($insId)
	{
		$this->db->set("course_title",$this->input->post("course_name"));
		$this->db->set("course_institute_id",$insId);
		
		$this->db->insert("institute_course");
 
	}
	
	function getAllCourse($insId)
	{
		$this->db->select("*");
		$this->db->set("course_institute_id",$insId);
		
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
	
	
	/////////////////////////////////////////////////////////////////////
	
	function my_score($userid){
       
        $this->db->select('t1.created_at as test_date,t2.id,t2.title');
        $this->db->from('test_answers t1');
        $this->db->join('test_category t2','t1.test_category=t2.id','left');
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
	
	function addStudentInstitute()
	{
		$this->db->set("created_by",$this->session->userdata('userdata')['userid']);
		$this->db->where("id",$this->input->post("set_user_id"));
		 
		$result = $this->db->update("users");
		 
		
	}
	
	
	
	
}
