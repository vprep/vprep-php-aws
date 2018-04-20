<?php
include('config.php');

if(isset($_POST) && !empty($_POST)){
	
	$e = $_POST['e'];
	
	$q = "SELECT id, email from users where email = '$e' and user_type=4";
	
	$z = mysqli_query($con, $q);
	
	if(mysqli_num_rows($z) > 0){
		
		$st = array();
		
		while($r = mysqli_fetch_assoc($z))
			$st[] = $r;
		
		$res = array('status' => 1, 'message' => 'Students Found...', 'students' => $st);
		
	}else
		$res = array('status' => 0, 'message' => 'No Students Found...');
	
	die(json_encode($res));
	
}

?>