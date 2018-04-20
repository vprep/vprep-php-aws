<?php
include('config.php');

if(isset($_POST) && !empty($_POST)){
	
	$i = $_POST['i'];
	$si = $_POST['si'];
	$mi = $_POST['mi'];
	$t = $_POST['t'];
	$dt = $_POST['dt'];
	
	$qry = "INSERT INTO `vprep_module`(`module_title`, `module_subject_id`, `module_parent_id`, `module_created_by`, `module_status`, `module_created`) VALUES ('$t', '$si', '$mi', '$i', '1', '$dt')";
	
	$sql = mysqli_query($con, $qry);
	
	if($sql)
		$res = array('status' => 1, 'message' => 'Sub-Module Added');
	else
		$res = array('status' => 0, 'message' => 'Error Adding Sub-Module');
	
	die(json_encode($res));
	
}

?>