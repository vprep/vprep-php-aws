<?php
include('config.php');

if(isset($_POST) && !empty($_POST)){
	
	$i = $_POST['i'];
	
	$sql = mysqli_query($con, "DELETE FROM `institute_course` WHERE course_id='$i'");
	
	if($sql)
		$res = array('status' => 1, 'message' => 'Course Deleted');
	else
		$res = array('status' => 0, 'message' => 'Error Deleting Course');
	
	die(json_encode($res));
	
}

?>