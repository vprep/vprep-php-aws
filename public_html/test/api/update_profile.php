<?php
include('config.php');

if(!empty($_POST) && isset($_POST)){

	$uid = $_POST['user_id'];

	$n = $_POST['name'];
	$u = $_POST['username'];
	$e = $_POST['email'];
	$a = $_POST['address'];
	$c = $_POST['city'];
	$s = $_POST['state'];
	$z = $_POST['zip'];
	$g = $_POST['gender'];
	$phone = $_POST['phone'];
	
	$query = "Select * from users where id = '$uid'";
		
		$sql = mysqli_query($con, $query);
		
		if(mysqli_num_rows($sql) != 0){
		
			$d = date_timestamp_get(date_create());
			
			$qry = "UPDATE `users` SET `name`='$n',`username`='$u',`address`='$a',`city`='$c',`state`='$s',`zip`='$z',`email`='$e',`phone`='$phone',`gender`='$g', `updated_at`='$d' WHERE id = '$uid'";
			
			if(mysqli_query($con, $qry))
				$result = array('status' => 2, 'message' => 'Profile Updated');
			else
				$result = array('status' => 0, 'message' => 'Error occured');
		
		}else
			$result = array('status' => 1, 'message' => "User dosen't exists");
		
		die(json_encode($result));	
	
}

?>