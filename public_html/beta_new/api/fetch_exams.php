<?php
include('config.php');

function ifTaken($con, $id, $exam_id){
	$qry = "Select * from test_answers where userid = '$id' and test_category = '$exam_id' ";
	
	$sql = mysqli_query($con, $qry);
	
	return mysqli_num_rows($sql) > 0;
}

function mod($con, $mid){
	$qry = "Select * from test_category where id = '".$mid."' ";
	
	$sql = mysqli_query($con, $qry);
	
	if(mysqli_num_rows($sql) > 0){
		$r = mysqli_fetch_assoc($sql);
		return array('id' => $r['id'], 'title' => $r['title'], 'description' => $r['description']);
	} else 
		return array();
}

function qus($con, $i){
	$qry = "Select * from vprep_exam_question where qiz_exam_id = '".$i."'";
	
	$sql = mysqli_query($con, $qry);
	
	$qus = array();
	
	if(mysqli_num_rows($sql) > 0){
		
		while($ran = mysqli_fetch_assoc($sql)){
		
			$gqid = $ran['qiz_question_id'];
			
			$sql2 = mysqli_query($con, "Select * from test_questions where id = '".$gqid."' ");
			
			if(mysqli_num_rows($sql2) > 0){
			
				$row = mysqli_fetch_assoc($sql2);
			
				$ti = $row['title'];
				
				$qi = $row['ques_img'];
				$qib = false;
				
				if($qi){
					$qib = true;
					$qi = 'http://test.absolutprep.com/uploads/'.$qi;
				}
				
				$o1i = $o2i = $o3i = $o4i = "";
				
				$o1 = $row['option1'];
				$o2 = $row['option2'];
				$o3 = $row['option3'];
				$o4 = $row['option4'];
				$o1t = $row['option1_type'];
				$o2t = $row['option2_type'];
				$o3t = $row['option3_type'];
				$o4t = $row['option4_type'];
				$o1b = false;
				$o2b = false;
				$o3b = false;
				$o4b = false;
				
				if($o1t == 1){
					$o1b = true;
					$o1i = 'http://test.absolutprep.com/uploads/'.$o1;
				}
				
				if($o2t == 1){
					$o2b = true;
					$o2i = 'http://test.absolutprep.com/uploads/'.$o2;
				}
				
				if($o3t == 1){
					$o3b = true;
					$o3i = 'http://test.absolutprep.com/uploads/'.$o3;
				}
				
				if($o4t == 1){
					$o4b = true;
					$o4i = 'http://test.absolutprep.com/uploads/'.$o4;
				}
				
				$qus[] = array('id' => $row['id'],
										'level'	=> $row['difficulty_level'],
										'question' => $ti,
										'is_option1_image' 	=> 	$o1b,
										'is_option2_image' 	=> 	$o2b,
										'is_option3_image' 	=> 	$o3b,
										'is_option4_image' 	=> 	$o4b,
										'option1_image'			=>	$o1i,
										'option2_image'			=>	$o2i,
										'option3_image'			=>	$o3i,
										'option4_image'			=>	$o4i,
										'option1'	=>	$o1,
										'option2'	=>	$o2,
										'option3'	=>	$o3,
										'option4'	=>	$o4,
										'answer'	=>	$row['correct_ans'],
										'is_question_image' => $qib,
										'question_image' => $qi,
										'module'	=> 	mod($con, $row['module_id'])
				);
			
			}
			
		}
		
	}
	
		return $qus;
}

if(!empty($_POST) && isset($_POST)){

	$id = $_POST['institute_id'];
	$uid= $_POST['user_id'];

	$qry = "Select * from exam_list where created_by = '$id'";

	$sql = mysqli_query($con, $qry);
	
	if(mysqli_num_rows($sql) > 0){
		
		$tests = array();
		
		while($row = mysqli_fetch_assoc($sql)){
			
			$i = $row['exam_id'];
			
			if(!ifTaken($con, $uid, $i)){
				$desc = trim($row['exam_detail']);
				
				$tests[] = array('id'	=>	$i,
										  'title'	=>	$row['exam_name'],
										  'description'	=>	$desc,
										  'time'	=>	$row['exam_time'],
										  'max_qus'	=>	$row['exam_max_ques'],
										  'questions'	=>	qus($con, $i)
				);
			}
		}
		
		$result = array('status' => 1, 'message' => 'Tests Found', 'tests' => $tests);
		
	}else
		$result = array('status' => 0, 'message' => 'No Test Found');
	
	die(json_encode($result));
	
	//print_r($result);
	
}

?>