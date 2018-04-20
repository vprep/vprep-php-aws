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
            
            $stu_data=array(
                'current_institute' =>  $this->input->post('current_institute'),
                'prepairing_for'    =>  $this->input->post('prepairing_for')
            );
            $this->db->where('user_id',$user_id);
            $this->db->update('student',$stu_data);
            $this->message->set('Student has been Updated successfully.', 'success', TRUE);
            
        }else{
            $this->db->insert('users',$insert_data);
            $userid=$this->db->insert_id();
            $stu_data=array(
                'user_id'           =>  $userid,
                'current_institute' =>  $this->input->post('current_institute'),
                'prepairing_for'    =>  $this->input->post('prepairing_for'),
				'course_name'		=>	$this->input->post('course_name')
            );
            $this->db->insert('student',$stu_data);
            $this->message->set('Student has been added successfully.', 'success', TRUE);

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
    }
    
    # function for save exam result
    function exam_result(){
        $answers=$this->session->userdata('test_answers');
        
        if(!empty($this->input->post('option'))){
            $answers[$this->input->post('question_id')]=$this->input->post('option');
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
        return $this->db->insert_id();
    }
    
    # function show result
    function show_result($result_id){
        $this->db->select('t1.*,t2.test_time');
        $this->db->from('test_answers t1');
        $this->db->join('test_category t2','t1.test_category=t2.id','left');
        $this->db->where('t1.id',$result_id);
        $result=$this->db->get()->row_array();
        $ans_arr=json_decode(stripslashes($result['test_answers']),true);
        # make return array
        $return_arr=array(
            'result_id'             =>  $result['id'],
            'total_questions'       =>  $this->edu->get_test_category_questions_count($result['test_category']),
            'attempted_questions'   =>  count($ans_arr),
            'easy'                  =>  0,
            'medium'                =>  0,
            'difficult'             =>  0,
            'correct_question'      =>  0,
            'total_time'            =>  $result['test_time'],
            'time_taken'            =>  round(abs($result['end_at'] - $result['start_at']) / 60,2),
        );
        
        # calculating time diffrence
        $seconds_diff  = $result['end_at'] - $result['start_at'];
        $hours = floor($seconds_diff / 3600);
        $return_arr['time_taken'] = floor(($seconds_diff - ($hours*3600)) / 60).':'.floor($seconds_diff % 60);
        
        if(!empty($ans_arr)){
            foreach($ans_arr as $key=>$val){
                $ques=$this->edu->get_test_question($key);
                if($ques['correct_ans']==(int)str_replace('option', '', $val)){
                    $return_arr['correct_question']++;
                }
                $return_arr[$ques['difficulty_level']]++;
            }
            $return_arr['easy']=($return_arr['easy']*100)/$return_arr['attempted_questions'];
            $return_arr['medium']=($return_arr['medium']*100)/$return_arr['attempted_questions'];
            $return_arr['difficult']=($return_arr['difficult']*100)/$return_arr['attempted_questions'];
        }
        return $return_arr;
    }
    
    function my_score(){
        $userid=$this->session->userdata('userdata')['userid'];
        $this->db->select('t1.created_at as test_date,t2.id,t2.title');
        $this->db->from('test_answers t1');
        $this->db->join('test_category t2','t1.test_category=t2.id','left');
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
 
 
	
}