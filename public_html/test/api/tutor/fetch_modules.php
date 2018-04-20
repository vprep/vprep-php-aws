<?php
include('config.php');

if(isset($_POST) && !empty($_POST)){
	
	$i = $_POST['i'];
	
	$qry = "SELECT m.module_id as i, m.module_title as t, m.module_parent_id as pi, m.module_subject_id as si, c.subject_title as n FROM `vprep_module` as m join `course_subject` as c WHERE m.module_subject_id = c.subject_id and m.module_parent_id='0' and module_created_by='$i'";
	
	$sql = mysqli_query($con, $qry);
	
	if(mysqli_num_rows($sql) > 0){
		
		$mo = array();
		
		while($r = mysqli_fetch_assoc($sql))
			$mo[] = $r;
		
		$res = array('status' => 1, 'message' => 'Modules Found', 'modules' => $mo);
		
	}else
		$res = array('status' => 0, 'message' => 'No Modules Found');
	
	die(json_encode($res));
	
}

?>