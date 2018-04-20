<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Facebook_auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('users_model','user');
    }

    public function index() { 
        // Include the facebook api php libraries
        include_once APPPATH . "libraries/facebook-api/facebook.php";

        //Call Facebook API
        $facebook = new Facebook(array(
            'appId' => FB_APP_ID,
            'secret' => FB_APP_SECRET
        ));
        $fbuser = $facebook->getUser();
        if ($fbuser) {
            $userProfile = $facebook->api('/me?fields=id,first_name,last_name,email,gender,locale,picture');
            
            // Preparing data for database insertion
            $userData['oauth_provider'] = 'facebook';
            $userData['oauth_uid'] = $userProfile['id'];
            $userData['name'] = $userProfile['first_name'].' '.$userProfile['last_name'];
            $userData['email'] = $userProfile['email'];
            $userData['gender'] = $userProfile['gender'];
            //$userData['locale'] = $userProfile['locale'];
            //$userData['profile_url'] = 'http://www.facebook.com/' . $userProfile['id'];
            $userData['image'] = $userProfile['picture']['data']['url'];
            // Insert or update user data
            $userID=$this->user->check_user($userData);
            redirect('student_home','refresh');
        } 
    }
    
}
