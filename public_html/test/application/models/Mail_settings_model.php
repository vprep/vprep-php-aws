<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mail_settings_model extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('encrypt');
    }
    function get_mail_settings(){
        return $this->db->get_where('mail_settings',array('id'=>1))->row_array();
    }
    function save_record(){
        $rcd_data=array(
            'mail_host'         =>  clean_variable($this->input->post('mail_host')),
            'mail_smtp_auth'    => clean_variable($this->input->post('mail_smtp_auth')),
            'mail_username'     => clean_variable($this->input->post('mail_username')),
            'mail_smtp_secure'  => clean_variable($this->input->post('mail_smtp_secure')),
            'mail_port'         => clean_variable($this->input->post('mail_port')),
            'mail_from'         => clean_variable($this->input->post('mail_from')),
            'mail_from_name'    => clean_variable($this->input->post('mail_from_name')),
            'mail_cc'           => clean_variable($this->input->post('mail_cc')),
            'mail_bcc'          => clean_variable($this->input->post('mail_bcc'))            
        );
        if(clean_variable($this->input->post('mail_password'))!=''){
            //$rcd_data['mail_password']=md5(clean_variable($this->input->post('mail_password')));
            $rcd_data['mail_password']=$this->encrypt->encode(clean_variable($this->input->post('mail_password')));
        }
        $this->db->update('mail_settings', $rcd_data, array('id' => 1));
        $this->message->set('Mail Settings Updated', 'success', TRUE, ''); 
    }
	
}