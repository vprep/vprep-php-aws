<?php
include('config.php');

if(isset($_POST) && !empty($_POST)){
	
	$i = $_POST['i'];
	$t = $_POST['t'];
	$d = $_POST['d'];
	
	$sql = mysqli_query($con, "Update `institute_course` set course_title='$t', course_desc='$d' where course_id='$i'");
	
	if($sql)
		$res = array('status' => 1, 'message' => 'Course Updated');
	else
		$res = array('status' => 0, 'message' => 'Error Updating Course');
	
	die(json_encode($res));
	
}

?>