<?php
include('config.php');

if(isset($_POST) && !empty($_POST)){
	
	$i = $_POST['i'];
	$si = $_POST['si'];
	$mi = $_POST['mi'];
	$t = $_POST['t'];
	
	$qry = "UPDATE `vprep_module` SET `module_subject_id`='$si',`module_title`='$t',`module_parent_id`='$mi' WHERE `module_id`='$i'";
	
	$sql = mysqli_query($con, $qry);
	
	if($sql)
		$res = array('status' => 1, 'message' => 'Sub-Module Updated');
	else
		$res = array('status' => 0, 'message' => 'Error Updating Sub-Module');
	
	die(json_encode($res));
	
}

?>