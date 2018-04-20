<?php
include('config.php');

//if(!empty($_POST) && isset($_POST)){

	//$test_id = $_POST['test_id'];
	
	$test_id = 3;
	
	$qry = "Select * from test_questions where question_type = '$test_id'";
	
	$sql = mysqli_query($con, $qry);
	
	if(mysqli_num_rows($sql) > 0){
		
		while($row = mysqli_fetch_assoc($sql)){
			
			$q[] = array('id' => $row['id'],
									'level'	=> $row['difficulty_level'],
									'question' => $row['title'],
									'option1'	=>	$row['option1'],
									'option2'	=>	$row['option2'],
									'option3'	=>	$row['option3'],
									'option4'	=>	$row['option4']
			);
			
		}
		
		$result = array('status' => 1, 'message' => 'Questions Found', 'questions' => $q);
		
	}else
		
		$result = array('status' => 0, 'message' => 'No Questions Found');
	
	//die(json_encode($result));
	
	print_r($result);
	
//}	

?>