<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// sanitize Function for cleaning data
function clean_variable($var) {
    $CI = & get_instance();
    // return clean string
    return str_replace("'", "", $CI->db->escape($CI->security->xss_clean($var)));
}

function pr($var) {
    ?><pre><?php print_r($var); ?></pre><?php
}

function get_latest_table_id($tbl_name, $field = '') {
    $CI = & get_instance();
    $query = $CI->db->get($tbl_name);
    if ($query->num_rows() >= 1) {
        if (empty($field)) {
            return ($query->last_row()->id + 1);
        } else {
            return ($query->last_row()->$field + 1);
        }
    }
    return 1;
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function urlencrypt($input) {
  return $input;  
//return urlencode(strtr(base64_encode($input), '+/=', '-_,'));
}
function urlencrypt1($input) {
  //  return $input;
return urlencode(strtr(base64_encode($input), '+/=', '-_,'));
}

function urldecrypt($input) {
return $input;   
// return base64_decode(strtr(urldecode($input), '-_,', '+/='));
}
function urldecrypt1($input) {
   // return $input;
return base64_decode(strtr(urldecode($input), '-_,', '+/='));
}

function get_report_test_name($test_array) {
    $test_array=json_decode(stripslashes($test_array),true);
    $return_string = '';
    
    # load report model
    $CI = & get_instance();
    $CI->load->model('report_model','report');
    # get test list in id name format
    $test_name = $CI->report->test_list_opt();

    # if test array
    if (!empty($test_array) && count($test_array) > 0) {
        # temporary count
        $temp_count = count($test_array);
        foreach ($test_array as $key => $val) {
            if ($key == $temp_count-1) {
                $return_string.=$test_name[$val];
            } else {
                $return_string.=$test_name[$val] . ', ';
            }
        }
    }
    return $return_string;
}

# upload docts

function upload_doc($name, $path) {
    $CI = & get_instance();
    $config = array(
        'upload_path' => realpath("uploads/$path"),
        'allowed_types' => "txt|xls|xlsx|doc|docx|pdf|pps|ppsx",
        'overwrite' => FALSE,
        'max_size' => "2048000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
    );
    $CI->load->library('upload', $config);
    if ($CI->upload->do_upload($name)) {
        return array('status' => TRUE, 'data' => $CI->upload->data());
    } else {
        return array('status' => FALSE, 'error' => $CI->upload->display_errors());
    }
}
# function for download files
function download_file($file) {
    $file_name = $file;
    $mime = 'application/force-download';
    header('Pragma: public');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Cache-Control: private', false);
    header('Content-Type: ' . $mime);
    header('Content-Disposition: attachment; filename="' . basename($file_name) . '"');
    header('Content-Transfer-Encoding: binary');
    header('Connection: close');
    readfile($file_name);
    exit();
}
