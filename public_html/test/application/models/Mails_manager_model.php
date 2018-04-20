<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mails_manager_model extends CI_Model {
    
    private $tbl='messages';
    private $utility = 'utilities';
    
    function __construct(){
        parent::__construct();
    }
    
    # function for get total services
    function total_messages() {
        return $this->db->count_all($this->tbl);
    }
    
    # function for save appointment details
    function save_appointment($pdata=array()){
        $msg=addslashes($pdata['message']);
        $msg.=!empty($msg)?'<br><br>':''; 
        $msg.='Phone Number: '.$pdata['phone'];
        $insert_arr=array(
            'message_for'   => 'appointment',
            'name'          => $pdata['name'],
            'email'         => $pdata['email'],
            'subject'       => addslashes('Appointment Request: Date - '.$pdata['appointment_date']),
            'messages'      => $msg,
            'created_at'    => time()
        );
        $this->db->insert($this->tbl,$insert_arr);
    }
    
    # function for save contact details
    function save_contact($pdata=array()){
        $msg=addslashes($pdata['message']);
        $msg.=!empty($msg)?'<br><br>':''; 
        $msg.='Phone Number: '.$pdata['phone'];
        $insert_arr=array(
            'message_for'   => 'contact_us',
            'name'          => $pdata['name'],
            'email'         => $pdata['email'],
            'subject'       => $pdata['subject'],
            'messages'      => $msg,
            'created_at'    => time()
        );
        $this->db->insert($this->tbl,$insert_arr);
    }
    
    # function for list of messages
    function messages_list($page = 0){
        $offset = ($page != 0) ? ((int) ($page-1) * DEFAULT_PER_PAGE) : 0;
        $this->db->limit(DEFAULT_PER_PAGE, $offset);
        $this->db->order_by("id", "desc");
        return $this->db->get($this->tbl)->result_array();
    }
    
    # get details of service banner

    function get_message_banner() {
        $this->db->where('meta', 'message');
        $service = $this->db->get($this->utility)->result_array();
        $return_arr = array();
        foreach ($service as $val) {
            $return_arr[$val['meta_key']] = $val;
        }
        return $return_arr;
    }

    # function for save service banner details

    function save_message_details() {
        $pdata = $this->input->post();
        unset($pdata['_wysihtml5_mode']);

        $this->db->where(array('meta' => 'message', 'meta_key' => 'banner_desc'));
        $this->db->update($this->utility, array('meta_value' => addslashes($this->input->post('banner_desc'))));
    }
    
    # function get message details
    
    function get_message_details($mes_id){
        return $this->db->get_where($this->tbl,array('id'=>$mes_id))->row_array();
    }
}
