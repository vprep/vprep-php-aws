<?php
include('config.php');

if(!empty($_POST) && isset($_POST)){
	
	$w = strtolower($_POST['request']);
	
	if($w === strtolower("facebook_login")){
		
		$id = $_POST['id'];
		
		$qry = "Select * from users where oauth_uid = '$id'";
		
		$sql = mysqli_query($con, $qry);
		
		if(mysqli_num_rows($sql) != 0){
			
			$r = mysqli_fetch_assoc($sql);
			
			$result = array('status' => 1, 'message' => 'Login Successful',  'user_id' => $r['id'], 'institute_id' => $r['created_by']);
			
		}else
			
			$result = array('status' => 0, 'message' => 'Invalid Credentials');
		
	}else if($w === strtolower("simple_login")){
		
		$u = $_POST['username'];
		$p = md5($_POST['password']);
		
		$qry = "Select * from users where username = '$u' and password = '$p'";
		
		$sql = mysqli_query($con, $qry);
		
		if(mysqli_num_rows($sql) != 0){
			
			$r = mysqli_fetch_assoc($sql);
			
			$result = array('status' => 1, 'message' => 'Login Successful', 'user_id' => $r['id'], 'institute_id' => $r['created_by'], 'name' => $r['name'], 'email' => $r['email'], 'gender' => $r['gender'], 'image' => $r['image']);
			
		}else
			
			$result = array('status' => 0, 'message' => 'Invalid Credentials');
		
	}
	
	die(json_encode($result));
	
}

?>