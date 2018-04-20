<?php
include('config.php');

if($_SERVER['REQUEST_METHOD'] === "POST"){
	
	$json = json_decode(file_get_contents("php://input"), true);
	
	if($json){
		
		$i = $json['fb_id'];
		
		$query = "Select * from users where oauth_uid = '$i'";
		
		$sql = mysqli_query($con, $query);
		
		if(mysqli_num_rows($sql) == 0){
			
			$n = $json['name'];
			$e = $json['email'];
			$g = $json['gender'];
			$p = $json['photo'];
		
			$d = date_timestamp_get(date_create());
			
			$qry = "INSERT INTO `users`(`oauth_provider`, `oauth_uid`, `name`, `username`, `password`, `address`, `city`, `state`, `zip`, `email`, `phone`, `gender`, `dob`, `image`, `user_type`, `is_tutor`, `is_institute`, `is_active`, `created_at`, `created_by`, `updated_by`, `updated_at`) VALUES ('facebook', '$i', '$n', '', '', '', '', '', '', '$e', '', '$g', '0000-00-00', '$p', '4', '0', '0', '1', '$d', 0, 0, '$d')";
			
			if(mysqli_query($con, $qry)){
				$id =  mysqli_fetch_assoc(mysqli_query($con, "Select * from users where oauth_uid = '$i' "))['id'];
				$result = array('status' => 2, 'message' => 'Login Successful', 'type' => 'User joined', 'user_id' => $id);
			}else
				$result = array('status' => 0, 'message' => 'Error occured', 'type' => 'error creating user');
		
		}else{
			$id = mysqli_fetch_assoc($sql)['id'];
			$result = array('status' => 1, 'message' => 'Login Successful', 'type' => 'user already created', 'user_id' => $id);
		}
		
		die(json_encode($result));
	}
	
}

?>