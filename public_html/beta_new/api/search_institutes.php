<?php
include('config.php');

function exam($con, $e){
	$sql = mysqli_query($con, "Select created_by from exam_list where exam_name LIKE '%$e%'");	
	$iid = array();
	if(mysqli_num_rows($sql) > 0)
		while($r = mysqli_fetch_assoc($sql))
			$iid[] = $r['created_by'];
	return $iid;
}

function subject($con, $s){
	$sql = mysqli_query($con, "Select created_by from course_subject where subject_title LIKE '%$s%'");	
	$iid = array();
	if(mysqli_num_rows($sql) > 0)
		while($r = mysqli_fetch_assoc($sql))
			$iid[] = $r['created_by'];
	return $iid;
}

function location($con, $l){
	$sql = mysqli_query($con, "Select id from users where address LIKE '%$l%' or state LIKE '%$l%' or city LIKE '%$l%' ");	
	$iid = array();
	if(mysqli_num_rows($sql) > 0)
		while($r = mysqli_fetch_assoc($sql))
			$iid[] = $r['id'];
	return $iid;
}

function inst($con, $q){
	return mysqli_fetch_assoc(mysqli_query($con, $q));
}

if(!empty($_POST) && isset($_POST)){
	
	$e = $_POST['exam'];
	$s = $_POST['subject'];
	$l = $_POST['location'];
		
	$ea = array();
	$sa = array();
	$la = array();
	$ins = array();
	
	if($e){
		$ei = exam($con, $e);
		if(count($ei) > 0)
			foreach($ei as $i){
				$q = "Select i.institute_id, i.user_id, u.name, u.address, u.city, u.state, phone, u.image, i.history from users u JOIN institute i ON u.id=i.user_id where i.institute_id = $i";
				$r = inst($con, $q);
				if($r)
					$ea[] = $r;
			}
	}
	
	if($s){
		$si = subject($con, $s);
		if(count($si) > 0)
			foreach($si as $i)	{
				$q = "Select i.institute_id, i.user_id, u.name, u.address, u.city, u.state, phone, u.image, i.history from users u JOIN institute i ON u.id=i.user_id where i.institute_id = $i";
				$r = inst($con, $q);
				if($r)
					$sa[] = $r;	
			}
	}
	
	if($l){
		$li = location($con, $l);
		if(count($li) > 0)
			foreach($li as $i){
				$q = "Select i.institute_id, i.user_id, u.name, u.address, u.city, u.state, phone, u.image, i.history from users u JOIN institute i ON u.id=i.user_id where i.user_id = $i";
				$r = inst($con, $q);
				if($r)
					$la[] = $r;
			}
	}
		
	if(count($ea) > 0)
		$ins = array_merge($ins, $ea);
	
	if(count($sa) > 0)
		$ins = array_merge($ins, $sa);
	
	if(count($la) > 0)
		$ins = array_merge($ins, $la);
	
	
	if(count($ins) > 0)
		$result = array('status' => 1, 'message' => 'Institutes Found', 'institutes' => array_unique($ins, SORT_REGULAR));	
	else
		$result = array('status' => 0, 'message' => 'No Institutes Found');
	
	die(json_encode($result));
	
}

?>