<?php
include('config.php');

if(isset($_POST) && !empty($_POST)){
	
	$i = $_POST['i'];
	
	$qry = "SELECT m.module_id as i, m.module_title as t, m.module_parent_id as pi, m.module_subject_id as si, c.subject_title as n FROM `vprep_module` as m join `course_subject` as c WHERE m.module_subject_id = c.subject_id and module_created_by='$i' and m.module_parent_id !='0'";
	
	$sql = mysqli_query($con, $qry);
	
	if(mysqli_num_rows($sql) > 0){
		
		$mo = array();
		
		while($r = mysqli_fetch_assoc($sql)){
			$sd = $r;
			$sd['pn'] = mysqli_fetch_assoc(mysqli_query($con, "Select * from vprep_module where module_id='$r[pi]'"))['module_title'];
			$mo[] = $sd;
		}
		
		$res = array('status' => 1, 'message' => 'Sub-Modules Found', 'modules' => $mo);
		
	}else
		$res = array('status' => 0, 'message' => 'No Sub-Modules Found');
	
	die(json_encode($res));
	
}

?>