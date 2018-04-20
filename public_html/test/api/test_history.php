<?php
include('config.php');

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

function pn($con, $id){
	$qry = "Select * from exam_list where exam_id = '$id'";
	$sql = mysqli_query($con, $qry);
	$name = "";
	if(mysqli_num_rows($sql) > 0)
		$name = mysqli_fetch_assoc($sql)['exam_name'];
	return $name;
}

function total($con, $i){
	$qry = "Select * from test_questions where exam_id = '$i'";
	$sql = mysqli_query($con, $qry);
	return mysqli_num_rows($sql);
}

function answer($con, $i){
	$qry = "Select * from test_questions where id = '$i'";
	$sql = mysqli_query($con, $qry);
	return mysqli_fetch_assoc($sql)['correct_ans'];
}

function decode($con, $json, $tc){
	$t = intval(total($con, $tc));
	$a = 0;
	$na = $t;
	$c = 0;
	$w = $t;
	
	$json = str_replace('\\', '', $json);
	
	foreach(json_decode($json) as $k => $v){
		$ans = answer($con, $k);
		
		$a += 1;
		$na -= 1;
				
		if($v === $ans){
			$c += 1;
			$w -= 1;
		}			
		
	}
	
	if($t != 0)
		$s = ($c * 100) / $t;
	else
		$s = 0;
	
	return array('total' => $t, 'attempted' => $a, 'not_attempted' => $na, 'correct' => $c, 'wrong' => $w, 'score' => $s);
}

if(!empty($_POST) && isset($_POST)){
	
	$id = $_POST['user_id'];
	
	$qry = "Select * from test_answers where userid = '$id'";
	
	$sql = mysqli_query($con, $qry);
	
	if(mysqli_num_rows($sql) != 0){
	
		while($a = mysqli_fetch_assoc($sql)){
			
			$tc = $a['test_category'];
			
			$q = pn($con, $tc);
			
			$j = $a['test_answers'];
			
			$re = decode($con, $j, $tc);
			
			$quss = qus($con, $tc);
			
			$arr[] = array('questions_paper' => $q, 'answers' => $re, 'questions' => $quss);
		}

		$result = array('status' => 1, 'message' => 'Test history found', 'history' => $arr);
	
	}else
		$result = array('status' => 0, 'message' => 'No test history found');
	
	die(json_encode($result));
	
}

?>