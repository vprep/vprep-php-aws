<?php defined('BASEPATH') OR exit('No direct script access allowed');

function custom_rules(){
    return array(
        'required'=>'Field is required',
        'username'=>'Username or password is not valid',
        'password'=>'Username or password is not valid',
        'email'   =>'email is already exist.'
    );
}
function username($value){
    if(!ctype_alnum($value)){
        return false;
    }
    return true;
}
function password(){
    
}
