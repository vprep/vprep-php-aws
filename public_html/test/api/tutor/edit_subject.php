<?php
include('config.php');

if(isset($_POST) && !empty($_POST)){
	
	$i = $_POST['i'];
	$ci = $_POST['ci'];
	$t = $_POST['t'];
	$d = $_POST['d'];
	
	$qry = "UPDATE `course_subject` SET `course_id`='$ci',`subject_title`='$t',`subject_desc`='$d' WHERE `subject_id`='$i'";
	
	//$qry = "INSERT INTO `course_subject`(`course_id`, `created_by`, `subject_title`, `subject_desc`, `subject_status`, `subject_created`) VALUES ('$ci', '$i', '$t', '$d', '1', '$dt')";
	
	$sql = mysqli_query($con, $qry);
	
	if($sql)
		$res = array('status' => 1, 'message' => 'Subject Updated');
	else
		$res = array('status' => 0, 'message' => 'Error Updating Subject');
	
	die(json_encode($res));
	
}

?>