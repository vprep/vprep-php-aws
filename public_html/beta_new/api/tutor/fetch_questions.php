<?php
include('config.php');

if(isset($_POST) && !empty($_POST)){
	
	$i = $_POST['i'];
	
	$q = "SELECT q.id , q.title as question, s.subject_title as subject, m.module_title as module, mm.module_title as subModule FROM `test_questions` as q inner join course_subject as s on q.subject_id = s.subject_id inner join vprep_module as m on q.module_id = m.module_id inner join vprep_module as mm on q.sub_module_id = mm.module_id where q.created_by = '$i' ";
	
	$z = mysqli_query($con, $q);
	
	if(mysqli_num_rows($z) > 0){
		
		$qu = array();
		
		while($r = mysqli_fetch_assoc($z)){
			$qu[] = $r;
		}
		
		$res = array('status' => 1, 'message' => 'Questions found', 'questions' => $qu);
		
	}else
		$res = array('status' => 0, 'message' => 'You haven\'t submitted any questions yet');
	
	die(json_encode($res));
	
}

?>