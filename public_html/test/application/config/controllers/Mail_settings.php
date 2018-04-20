<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mail_settings extends CI_Controller {
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
        $usertype = $this->session->get_userdata()['usertype'];
        if( $usertype !== '1'){
            redirect('404', 'refresh');
        }
        
        $this->session->set_userdata('page_detail',
            array(
             'page_title' =>'Mail Settings'   
        ));
        $this->load->model('mail_settings_model');
    }

    public function index(){
        $data['mail_settings']=$this->mail_settings_model->get_mail_settings();
        $this->template->load('backend','mail_settings/default' ,$data);
    }
    public function save_record(){
        if($this->input->post(clean_variable('save_rcd'))=='Save Details'){
            $this->mail_settings_model->save_record();
            redirect('mail_settings','refresh');            
        }
    }
}