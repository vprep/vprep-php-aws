<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
    public function __construct(){
        parent::__construct();
        /** 
                * Check user is valid or not
                * File: helper/login_helper.php			
        **/
        if(check_login()==false){
            // if validate is false then redirect to login page
            redirect('login', 'refresh');	 
        }
        $this->session->set_userdata('page_detail',
                array(
                 'page_title' =>'Users'   
                ));
        $this->load->model('users_model');
    }
    
    public function index(){
        $page=0;
        if(!empty($this->input->get('per_page'))){
            $page=$this->input->get('per_page');
        }
        $data['pages']=get_pagination('users',$this->users_model->total_users());
        $data['users']=$this->users_model->get_all_users($page);
        $data['user_type']=$this->users_model->get_user_type_list_opt();
        $this->template->load('backend','users/default',$data);
    }
    
    /**
        * Add user
    **/
    public function add_new(){
        $this->session->set_userdata('sub_title','Add User');
        $this->session->set_userdata('record_id',get_latest_table_id('users'));
        $data['user_type']=$this->users_model->get_user_type_list_opt();
        $this->template->load('backend','users/edit_user',$data);
    }
    
    /**
        * edit user
    **/
    public function edit_user($userid){
        $data['user_detail']=$this->users_model->get_user_details(urldecrypt($userid));
        $data['user_type']=$this->users_model->get_user_type_list_opt();
        $this->session->set_userdata('record_id',$data['user_detail']['id']);
        $this->session->set_userdata('sub_title','Edit User');
        $this->template->load('backend','users/edit_user',$data);
    }
    /**
        * save/update user
    **/
    public function save_record(){
        $data['user_detail']=$this->input->post();
        if($this->input->post(clean_variable('save_rcd'))=='Save Details'){
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('name', 'Name', 'required');
            if($this->session->sub_title=='Add User' || !empty($this->input->post('new_password'))){
                $this->form_validation->set_rules('new_password', 'Password', 'required|matches[conf_password]');
                $this->form_validation->set_rules('conf_password', 'Password Confirmation', 'required');
            }
            if ($this->form_validation->run() == FALSE){
                $data['user_detail']['id']=$this->session->record_id;
                $data['user_type']=$this->users_model->get_user_type_list_opt();
                // call  back to add_new page
                $this->template->load('backend','users/edit_user',$data);
            }
            else{
                $this->users_model->save_record();
                redirect('users/profile/'.urlencrypt($this->session->record_id),'refresh');
            }
            
        }
        else{
            redirect('add_user',refresh);
        }
    }
    
    
    public function delete_record($id){
        $usertype = $this->session->get_userdata()['usertype'];
        if( $usertype !== '1'){
            redirect('404', 'refresh');
        }
        $this->users_model->delete_record(urldecrypt($id));
        redirect('users','refresh');
    }
    
    # function for listing of user type
    public function user_type_list(){
        $data['user_types']=$this->users_model->get_all_users_type_list();
        $this->session->set_userdata('sub_title','User Type');
        $this->template->load('backend','users/user_type_list',$data);
    }
    
    # function for edit user type
    function edit_user_type_list($user_type_id){
        $data['user_type_detail']=$this->users_model->get_user_type_details(urldecrypt($user_type_id));
        $this->session->set_userdata('sub_title','Edit User Type');
        $this->template->load('backend','users/edit_user_type',$data);
    }
    
    # function for save user type 
    function save_user_type(){
        $data['user_type_detail']=$this->input->post();
        $this->form_validation->set_rules('user_type', 'User Type', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->template->load('backend','users/edit_user_type',$data);
        }
        else{
            $this->users_model->save_user_type();
            redirect('users/edit_user_type_list/'.urlencrypt($data['user_type_detail']['id']));
        }
    }
}