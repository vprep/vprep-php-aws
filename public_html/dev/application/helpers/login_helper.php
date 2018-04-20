<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Validation Function for checking user is valid or not
function check_validate()
{
    // create instance of current page
    $CI =& get_instance();
    // Check validate field from session
    if($CI->session->validated!=TRUE){
        // if validate is false then redirect to login page
        redirect('login', 'refresh');
        return false;
    }
    return true;
}
// Logout Function 
function do_logout(){
   
    // Create instance of current page
    $CI =& get_instance();
    $CI->session->sess_destroy();
    //redirect to login page for login again
    redirect('login', 'refresh');	
}
function check_login(){
    // Create instance of current page
    $CI =& get_instance();
    
    if($CI->session->userdata('userid')==''){
       return false;
    }
    return true;
}

# function check us
function check_student_login(){
    // Create instance of current page
    $CI =& get_instance();
    if($CI->session->userdata('userdata')['validated'] && $CI->session->userdata('userdata')['usertype']==4){
        return true;
    }
    // 	set message for user
    $CI->message->set('Please login with Valid credential.', 'danger', TRUE);
    return false;
}

# function check us
function check_educational_login(){
    // Create instance of current page
    $CI =& get_instance();
    if($CI->session->userdata('userdata')['validated'] && ($CI->session->userdata('userdata')['usertype']==2 || $CI->session->userdata('userdata')['usertype']==3)){
        return true;
    }
    // 	set message for user
    $CI->message->set('Please login with Valid credential.', 'danger', TRUE);
    return false;
}
