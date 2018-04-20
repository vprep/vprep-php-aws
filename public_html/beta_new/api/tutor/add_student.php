<?php
include('config.php');

if(isset($_POST) && !empty($_POST)){
	
	$i = $_POST['i'];
	$uid = $_POST['uid'];
	$c = $_POST['c'];
	
	//INSERT INTO `vprep_student_institute`(`si_row_id`, `si_student_id`, `si_course_id`, `si_institute_id`, `si_status`) VALUES ()
	
	if(mysqli_num_rows(mysqli_query($con, "Select * from `vprep_student_institute` where `si_student_id`='$i' and `si_course_id`='$c'")) == 0){
	
		$q = "INSERT INTO `vprep_student_institute`(`si_student_id`, `si_course_id`, `si_institute_id`, `si_status`) VALUES ('$i', '$c', '$uid', '1')";
	
		$z = mysqli_query($con, $q);
		
		if($z){
			mysqli_query($con, "Update users set created_by='$uid' where id='$i'");
			$res = array('status' => 1, 'message' => 'Student Added');
		}else
			$res = array('status' => 0, 'message' => 'Error occurred while adding student');
		
	}else
		$res = array('status' => 2, 'message' => 'Student already added');
	
	die(json_encode($res));
	
}

?>