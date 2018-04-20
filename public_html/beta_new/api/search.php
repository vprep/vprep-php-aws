<?php
include('config.php');

$ex = '1';
$sub = '2';
$ins = '3';

function getSubjectName($con, $sid){
	return mysqli_fetch_assoc(mysqli_query($con, "Select * from course_subject where subject_id = '$sid'"))['subject_title'];
}

function getCourseName($con, $cid){
	return mysqli_fetch_assoc(mysqli_query($con, "Select * from institute_course where course_id = '$cid'"))['course_title'];
}

if(!empty($_POST) && isset($_POST)){
	
	$type = $_POST['type'];
	$qry = $_POST['query'];
	
	if($type === $ex){
		
		$sql = mysqli_query($con, "Select * from exam_list where exam_name LIKE '%$qry%'");	
		
		if(mysqli_num_rows($sql) > 0){
			
			while($r = mysqli_fetch_assoc($sql)){
			
				$exams[] = array('name' => $r['exam_name'], 'time' => $r['exam_time'], 'max_questions' => $r['exam_max_ques'], 'course_name' => getCourseName($con, $r['course_id']), 'subject_name' => getSubjectName($con, $r['subject_id']), 'details' => $r['exam_detail']);
			
			}
			
			$result = array('status' => 1, 'message' => 'Exams found matching your query', 'exams' => $exams);
			
		}else
			$result = array('status' => 0, 'message' => 'No exams found matching your query');
		
	}else if($type === $sub){
		
		$sql = mysqli_query($con, "Select * from course_subject where subject_title LIKE '%$qry%'");	
		
		if(mysqli_num_rows($sql) > 0){
			
			while($r = mysqli_fetch_assoc($sql)){
			
				$subjects[] = array('course_name' => getCourseName($con, $r['course_id']), 'subject_name' => $r['subject_title']);
			
			}
			
			$result = array('status' => 1, 'message' => 'Subjects found matching your query', 'subjects' => $subjects);
			
		}else
			$result = array('status' => 0, 'message' => 'No subject found matching your query');
		
	}else if($type === $ins){
		
		$sql = mysqli_query($con, "Select * from institute where examsmodel LIKE '%$qry%'");	
		
		if(mysqli_num_rows($sql) > 0){
			
			while($r = mysqli_fetch_assoc($sql)){
			
				$inst[] = array();
			
			}
			
			$result = array('status' => 1, 'message' => 'Institutes found matching your query', 'institutes' => $inst);
			
		}else
			$result = array('status' => 0, 'message' => 'No institutes found matching your query');
		
	}else
		$result = array('status' => 404, 'message' => 'Invalid Request');
	
	die(json_encode($result));
	
}

?>