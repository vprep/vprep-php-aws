<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
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
            redirect(base_url());	 
        }
        $this->session->set_userdata('page_detail',
            array(
             'page_title' =>'Dashboard'   
        ));
        //$this->load->model('App_settings_model');
    }

    public function index(){
        
        //$this->load->model('events_model');
        $data['events_list'] =array();// $this->events_model->get_events();
        $this->template->load('backend','home/default',$data);
    }
}