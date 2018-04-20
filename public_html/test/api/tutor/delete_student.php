<?php
include('config.php');

if(isset($_POST) && !empty($_POST)){
	
	$i = $_POST['i'];
	
	$sql = mysqli_query($con, "DELETE FROM `vprep_student_institute` WHERE si_student_id='$i'");
	
	if($sql)
		$res = array('status' => 1, 'message' => 'Student Deleted');
	else
		$res = array('status' => 0, 'message' => 'Error Deleting Student');
	
	die(json_encode($res));
	
}

?>