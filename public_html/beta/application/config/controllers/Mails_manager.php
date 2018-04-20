<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mails_manager extends CI_Controller {
    /**
     * Index Page for this controller.
     */
    function __construct(){
        parent::__construct();
        /** 
                * Check user is valid or not
                * File: helper/login_helper.php			
        **/
        if(check_login()==false){
            // if validate is false then redirect to login page
            redirect('login', 'refresh');	 
        }
        $this->load->model('mails_manager_model','mm');
        $this->session->set_userdata('page_detail',
            array(
                'page_title' =>'Messages Manager'   
            ));
    }
    
    # frontend blog link call
    function index(){
        $page=0;
        if(!empty($this->input->get('per_page'))){
            $page=$this->input->get('per_page');
        }
        $data=$this->mm->get_message_banner();
        $data['messages_list'] = $this->mm->messages_list($page);
        $data['pages']=get_pagination('mails_manager',$this->mm->total_messages());
        $this->template->load('backend','mails_manager/default',$data);
    }
    
    # function for view full message
    function view_message($id){
        $data=$this->mm->get_message_details(urldecrypt($id));
        $this->template->load('backend','mails_manager/message',$data);
    }
    
    # function for saving service banner details
    function save_message_details(){
        $data = $this->mm->save_message_details();
        redirect('mails_manager');
    }
    
}