<?php
include('config.php');

if(!empty($_POST) && isset($_POST)){
		
	$u = $_POST['username'];
	$p = md5($_POST['password']);
		
	$qry = "Select * from users where username = '$u' and password = '$p' and user_type = '2'";
		
	$sql = mysqli_query($con, $qry);
		
	if(mysqli_num_rows($sql) != 0){
			
		$r = mysqli_fetch_assoc($sql);
			
		$result = array('status' => 1, 'message' => 'Login Successful', 'user_id' => $r['id'], 'institute_id' => $r['created_by'], 'name' => $r['name'], 'email' => $r['email'], 'gender' => $r['gender'], 'image' => $r['image'], 'address' => $r['address'], 'state' => $r['state'], 'city' => $r['city'], 'zip' => $r['zip'], 'phone' => $r['phone']);
			
	}else
			
		$result = array('status' => 0, 'message' => 'Invalid Credentials');
			
	die(json_encode($result));
	
}

?>