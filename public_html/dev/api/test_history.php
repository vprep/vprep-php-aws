<?php
include('config.php');

function pn($con, $id){
	$qry = "Select * from test_category where id = '$id'";
	
	$sql = mysqli_query($con, $qry);
	
	$name = "";
	
	if(mysqli_num_rows($sql) > 0){
		$name = mysqli_fetch_assoc($sql)['title'];
	}	
	
	return $name;
}

function total($con, $i){
	$qry = "Select * from test_questions where question_type = '$i'";
	
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
	
	foreach(json_decode($json) as $k => $v){
		$ans = answer($con, $k);
		
		$a += 1;
		$na -= 1;
		
		if(strpos($v, $ans)){
			$c += 1;
			$w -= 1;
		}			
		
	}
	
	$s = ($c * 100) / $t;
	
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
			
			$arr[] = array('questions_paper' => $q, 'answers' => $re);
		}

		$result = array('status' => 1, 'message' => 'Test history found', 'history' => $arr);
	
	}else
		$result = array('status' => 0, 'message' => 'No test history found');
	
	die(json_encode($result));
	
}

?>