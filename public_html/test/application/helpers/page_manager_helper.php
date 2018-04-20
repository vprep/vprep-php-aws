<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

# function for getting blog count in categories
function get_blog_count($cat_id){
    $CI =& get_instance();
    return $CI->db->get_where('blogs',array('category_id'=>$cat_id))->num_rows();
}

# function for getting page footer text 
function page_footer(){
    $CI =& get_instance();
    return $CI->db->get_where('utilities',array('meta'=>'home','meta_key'=>'footer_desc'))->row_array()['meta_value'];
}

# function for getting latest blogs
function latest_updates($limit=0){
    $CI =& get_instance();
    $CI->db->select('blog_id,title,blog_image,created_at');
    $CI->db->limit($limit);
    $CI->db->order_by('blog_id','desc');
    return $CI->db->get('blogs')->result_array();
}

# function for latest comment
function latest_comment($limit=0){
    $CI =& get_instance();
    $CI->db->limit($limit);
    $CI->db->where('is_approved','1');
    $CI->db->order_by('comment_id','desc');    
    return $CI->db->get('blogs_comments')->result_array();
}