<?php
include('config.php');

if(isset($_POST) && !empty($_POST)){
	
	$i = $_POST['i'];
	$si = $_POST['si'];
	$t = $_POST['t'];
	
	$qry = "UPDATE `vprep_module` SET `module_subject_id`='$si',`module_title`='$t' WHERE `module_id`='$i'";
	
	$sql = mysqli_query($con, $qry);
	
	if($sql)
		$res = array('status' => 1, 'message' => 'Module Updated');
	else
		$res = array('status' => 0, 'message' => 'Error Updating Module');
	
	die(json_encode($res));
	
}

?>