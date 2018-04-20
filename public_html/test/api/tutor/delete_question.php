<?php
include('config.php');

if(isset($_POST) && !empty($_POST)){
	
	$i = $_POST['i'];
	
	$sql = mysqli_query($con, "DELETE FROM `test_questions` WHERE id='$i'");
	
	if($sql)
		$res = array('status' => 1, 'message' => 'Question Deleted');
	else
		$res = array('status' => 0, 'message' => 'Error Deleting Question');
	
	die(json_encode($res));
	
}

?>