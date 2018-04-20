<?php
include('config.php');

if(isset($_POST) && !empty($_POST)){
	
	$id = $_POST['id'];
	
	$sql = mysqli_query($con, "Select * from institute_course where course_institute_id = '$id' ");
	
	if(mysqli_num_rows($sql) > 0){
		
		$co = array();
		
		while($r = mysqli_fetch_assoc($sql)){
			
			$co[] = array('id' => (int) $r['course_id'], 'title' => $r['course_title'], 'details' => $r['course_desc']);
			
		}
		
		$res = array('status' => 1, 'message' => 'Courses Found', 'courses' => $co);
		
	}else
		$res = array('status' => 0, 'message' => 'No Courses Found');
	
	die(json_encode($res));
	
}

?>