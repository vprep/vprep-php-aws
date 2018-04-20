<?php
include('config.php');

function qus($con, $i){
	$qry = "Select * from test_questions where question_type = '$i'";
	
	$sql = mysqli_query($con, $qry);
	
	$qus = array();
	
	if(mysqli_num_rows($sql) > 0){
		
		while($row = mysqli_fetch_assoc($sql)){
			
			$qus[] = array('id' => $row['id'],
									'level'	=> $row['difficulty_level'],
									'question' => $row['title'],
									'option1'	=>	$row['option1'],
									'option2'	=>	$row['option2'],
									'option3'	=>	$row['option3'],
									'option4'	=>	$row['option4'],
									'answer'	=>	$row['correct_ans']
			);
			
		}
		
	}
		
		return $qus;
}

if(!empty($_POST) && isset($_POST)){

	$id = $_POST['institute_id'];

	$qry = "Select * from test_category where created_by = '$id'";

	$sql = mysqli_query($con, $qry);
	
	if(mysqli_num_rows($sql) > 0){
		
		while($row = mysqli_fetch_assoc($sql)){
			
			$i = $row['id'];
			
			$tests[] = array('id'	=>	$i,
									  'title'	=>	$row['title'],
									  'description'	=>	trim($row['description']),
									  'time'	=>	$row['test_time'],
									  'questions'	=>	qus($con, $i)
			);
			
		}
		
		$result = array('status' => 1, 'message' => 'Tests Found', 'tests' => $tests);
		
	}else
		$result = array('status' => 0, 'message' => 'No Test Found');
	
	die(json_encode($result));
	
}

?>