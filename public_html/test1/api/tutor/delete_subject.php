<?php
include('config.php');

if(isset($_POST) && !empty($_POST)){
	
	$i = $_POST['i'];
	
	$sql = mysqli_query($con, "DELETE FROM `course_subject` WHERE subject_id='$i'");
	
	if($sql)
		$res = array('status' => 1, 'message' => 'Subject Deleted');
	else
		$res = array('status' => 0, 'message' => 'Error Deleting Subject');
	
	die(json_encode($res));
	
}

?>