<?php
include('config.php');

if(isset($_POST) && !empty($_POST)){
	
	$i = $_POST['i'];
	$op = md5($_POST['op']);
	$np = md5($_POST['np']);
	
	$sq = mysqli_query($con, "Select * from users where id='$i' and password='$op'");
	
	if(mysqli_num_rows($sq) != 0){
		
		$sql = mysqli_query($con, "Update users set password='$np' where id='$i'");
		
		if($sql)
			$res = array('status' => 1, 'message' => 'Password Updated');
		else
			$res = array('status' => 2, 'message' => 'Error Updating Password');
		
	}else
		$res = array('status' => 0, 'message' => 'Old Password Does Not Match');
	
	die(json_encode($res));
	
}

?>