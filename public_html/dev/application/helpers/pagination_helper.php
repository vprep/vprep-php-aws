<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 *  function for getting pagination
 * @param1  $redirect_url   redirect path or page link
 * @param2  $total_count    total count of records
 * 
 */
function get_pagination($redirect_url, $total_count) {
    //die;

    # initialize a instance of codeigniter
    $CI = & get_instance();

    # load default pagination helper 
    $CI->load->library('pagination');

    // Initialize empty array.
    $config = array();

    // Set base_url for every links
    $config["base_url"] = base_url($redirect_url);

    // Set total rows in the result set you are creating pagination for.
    $config["total_rows"] = $total_count;

    // Number of items you intend to show per page.
    $config["per_page"] = DEFAULT_PER_PAGE;

    // Use pagination number for anchor URL.
    $config['use_page_numbers'] = TRUE;

    //Set that how many number of pages you want to view.
    $config['num_links'] = 3;

    // Open tag for CURRENT link.
    $config['cur_tag_open'] = '<li><a class="current">';

    // Close tag for CURRENT link.
    $config['cur_tag_close'] = '</a></li>';

    // By clicking on performing NEXT pagination.
    $config['next_link'] = '<i class="fa fa-angle-double-right" aria-hidden="true"></i>';
    
    // last tag opening tag
    $config['next_tag_open'] = '<li>';
    
    // last tag closing tag
    $config['next_tag_close'] = '</li>';
    
    // By clicking on performing PREVIOUS pagination.
    $config['prev_link'] = '<i class="fa fa-angle-double-left" aria-hidden="true"></i>';
    
    // last tag opening tag
    $config['prev_tag_open'] = '<li>';
    
    // last tag closing tag
    $config['prev_tag_close'] = '</li>';
    
    // first tag opening tag
    $config['first_tag_open'] = '<li>';

    // first tag closing tag

    $config['first_tag_close'] = '</li>';

    // last tag opening tag
    $config['last_tag_open'] = '<li>';

    // last tag closing tag

    $config['last_tag_close'] = '</li>';
    
    # Open tag for pagination.
    $config['full_tag_open'] ='<ul class="pagination pagination-sm no-margin pull-right">';
    
    # close tag for pagination
    $config['full_tag_close'] = '</ul>';
    
    #  The opening tag for the “digit” link.
    $config['num_tag_open'] = '<li>';

    #The opening tag for the “digit” link.
    $config['num_tag_close'] = '</li>';
    
    # activate query string
    $config['page_query_string'] = TRUE;
    
    $CI->pagination->initialize($config);

    return $CI->pagination->create_links();
}

/**
 *  function for getting pagination for frontend
 * @param1  $redirect_url   redirect path or page link
 * @param2  $total_count    total count of records
 * 
 */
function get_froentend_pagination($redirect_url, $total_count) {
    //die;

    # initialize a instance of codeigniter
    $CI = & get_instance();

    # load default pagination helper 
    $CI->load->library('pagination');

    // Initialize empty array.
    $config = array();

    // Set base_url for every links
    $config["base_url"] = base_url($redirect_url);

    // Set total rows in the result set you are creating pagination for.
    $config["total_rows"] = $total_count;

    // Number of items you intend to show per page.
    $config["per_page"] = DEFAULT_PER_PAGE;

    // Use pagination number for anchor URL.
    $config['use_page_numbers'] = TRUE;

    //Set that how many number of pages you want to view.
    $config['num_links'] = 3;

    // Open tag for CURRENT link.
    $config['cur_tag_open'] = '<li><a class="current">';

    // Close tag for CURRENT link.
    $config['cur_tag_close'] = '</a></li>';

    // By clicking on performing NEXT pagination.
    $config['next_link'] = 'NEXT';
    
    // last tag opening tag
    $config['next_tag_open'] = '<li>';
    
    // last tag closing tag
    $config['next_tag_close'] = '</li>';
    
    // By clicking on performing PREVIOUS pagination.
    $config['prev_link'] = 'PREV';
    
    // last tag opening tag
    $config['prev_tag_open'] = '<li>';
    
    // last tag closing tag
    $config['prev_tag_close'] = '</li>';
    
    // first tag opening tag
    $config['first_tag_open'] = '<li>';

    // first tag closing tag

    $config['first_tag_close'] = '</li>';

    // last tag opening tag
    $config['last_tag_open'] = '<li>';

    // last tag closing tag

    $config['last_tag_close'] = '</li>';
    
    # Open tag for pagination.
    $config['full_tag_open'] ='<ul class="pagination">';
    
    # close tag for pagination
    $config['full_tag_close'] = '</ul>';
    
    #  The opening tag for the “digit” link.
    $config['num_tag_open'] = '<li>';

    #The opening tag for the “digit” link.
    $config['num_tag_close'] = '</li>';
    
    # activate query string
    $config['page_query_string'] = TRUE;
    
    $CI->pagination->initialize($config);

    return $CI->pagination->create_links();
}
