<?php
include('config.php');

function mo($con, $si){
	$ex = mysqli_query($con, "Select module_id as mi, module_title as mt from vprep_module where module_subject_id = '$si' and module_parent_id=0");
	if(mysqli_num_rows($ex) > 0){
		$ar = array();
		while($r = mysqli_fetch_assoc($ex)){
			$ar[] = $r;
		}
		return $ar;
	}else
		return array();
}

if(isset($_POST) && !empty($_POST)){

	$i = $_POST['i'];

	$qry = "Select subject_id as si, subject_title as st from course_subject where created_by = '$i' ";
	
	$sql = mysqli_query($con, $qry);
	
	if(mysqli_num_rows($sql) > 0){
		
		$da = array();
		
		while($r = mysqli_fetch_assoc($sql)){
			
			$zz = $r;
			
			$zz['m'] = mo($con, $r['si']);
			
			$da[] = $zz;
		
		}
		
		$res = array('status' => 1, 'message' => 'Data Found', 'data' => $da);
	
	}else
		$res = array('status' => 0, 'message' => 'Nothing Found');
	
	die(json_encode($res));
	
}

?>