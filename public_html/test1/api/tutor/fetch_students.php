<?php
include('config.php');

if(isset($_POST) && !empty($_POST)){
	
	$n = $_POST['n'];
	
	$q = "SELECT s.student_id as id, u.email, c.course_title as course FROM `student` as s join institute_course as c on c.course_id=s.course_name join users as u on u.id=s.user_id where u.user_type=4 and s.current_institute='$n'";
	
	$z = mysqli_query($con, $q);
	
	if(mysqli_num_rows($z) > 0){
		
		$st = array();
		
		while($r = mysqli_fetch_assoc($z))
			$st[] = $r;
		
		$res = array('status' => 1, 'message' => 'Students Found...', 'students' => $st);
		
	}else
		$res = array('status' => 0, 'message' => 'No Students Found...');
	
	die(json_encode($res));
	
}

?>