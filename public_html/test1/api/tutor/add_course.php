<?php
include('config.php');

if(isset($_POST) && !empty($_POST)){
	
	$i = $_POST['i'];
	$t = $_POST['t'];
	$d = $_POST['d'];
	$dt = $_POST['dt'];
	
	$sql = mysqli_query($con, "INSERT INTO `institute_course`(`course_title`, `course_desc`, `course_institute_id`, `course_created`) VALUES ('$t', '$d', '$i', '$dt')");
	
	if($sql)
		$res = array('status' => 1, 'message' => 'Course Added');
	else
		$res = array('status' => 0, 'message' => 'Error Adding Course');
	
	die(json_encode($res));
	
}

?>