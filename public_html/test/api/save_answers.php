<?php
include('config.php');

if(!empty($_POST) && isset($_POST)){
	
	$i = $_POST['user_id'];
	$t = $_POST['test_id'];
	$a = $_POST['answers'];
	
	$d = date_timestamp_get(date_create());
	
	$qry = "INSERT INTO `test_answers`(`userid`, `test_category`, `test_answers`, `start_at`, `end_at`, `created_at`) VALUES ('$i', '$t', '$a', '$d', '$d', '$d')";
	
	$sql = mysqli_query($con, $qry);
	
	if($sql)
		$result = array('status' => 1, 'message' => 'Answers Saved');
	else
		$result = array('status' => 0, 'message' => 'Error Saving Answers');
	
	die(json_encode($result));
	
}

?>