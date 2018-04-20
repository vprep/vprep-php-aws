<?php
include('config.php');

if(isset($_POST) && !empty($_POST)){
	
	$i = $_POST['i'];
	
	$sql = mysqli_query($con, "SELECT s.subject_id as id,c.course_title as name,s.subject_title as title,s.subject_desc as 'desc' 
FROM `course_subject` as s join `institute_course` as c where s.course_id =  c.course_id and s.created_by='$i'");
	
	if(mysqli_num_rows($sql) > 0){
		
		$co = array();
		
		while($r = mysqli_fetch_assoc($sql)){
			
			$co[] = $r;
			
		}
		
		$res = array('status' => 1, 'message' => 'Subjects Found', 'subjects' => $co);
		
	}else
		$res = array('status' => 0, 'message' => 'No Subjects Found');
	
	die(json_encode($res));
	
}

?>