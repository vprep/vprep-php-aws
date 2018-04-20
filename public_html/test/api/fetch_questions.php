<?php
include('config.php');

if($_SERVER['REQUEST_METHOD'] === "POST"){

	$test_id = $_POST['id'];
	
	$qry = "Select * from test_questions where question_type = '$test_id'";
	
	$sql = mysqli_query($con, $qry);
	
	if(mysqli_num_rows($sql) > 0){
		
		while($row = mysqli_fetch_assoc($sql)){
			
			//if($row['id'] !== "19")
			$qus[] = array('id' => $row['id'],
									'level'	=> $row['difficulty_level'],
									//'question' => str_replace('"', '\"', $row['title']),
									//'question' => htmlspecialchars($row['title'], ENT_COMPAT),
									'question' => $row['title'],
									'option1'	=>	$row['option1'],
									'option2'	=>	$row['option2'],
									'option3'	=>	$row['option3'],
									'option4'	=>	$row['option4'],
									'answer'	=>	$row['correct_ans']
			);
			
		}
		
		$result = array('status' => 1, 'message' => 'Questions Found', 'questions' => $qus);
		
	}else
		
		$result = array('status' => 0, 'message' => 'No Questions Found');
		
	//print_r($result);
		
	die(json_encode($result));
	
}	

?>