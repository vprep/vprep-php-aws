<?php
include('config.php');

if(isset($_POST) && !empty($_POST)){
	
	$i = $_POST['i'];
	$n = $_POST['n'];
	$c = $_POST['c'];
	
	if(mysqli_num_rows(mysqli_query($con, "Select * from `student` where `user_id`='$i' and `current_institute`='$n'")) == 0){
	
		$q = "INSERT INTO `student`(`user_id`, `current_institute`, `prepairing_for`, `course_name`) VALUES ('$i', '$n', '', '$c')";
	
		$z = mysqli_query($con, $q);
		
		if($z)
			$res = array('status' => 1, 'message' => 'Student Added');
		else
			$res = array('status' => 0, 'message' => 'Error occurred while adding student');
		
	}else
		$res = array('status' => 2, 'message' => 'Student already added');
	
	die(json_encode($res));
	
}

?>