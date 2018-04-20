<?php
include('config.php');

	
	$sql = mysqli_query($con, "Select * from vprep_book");
	
	if(mysqli_num_rows($sql) > 0){
		
		$boo = array();
		
		while($r = mysqli_fetch_assoc($sql)){
			$boo[] = $r;	
		}
		
		$res = array('status' => 1, 'message' => 'Books Found', 'books' => $boo);
		
	}else
		$res = array('status' => 0, 'message' => 'No Books Found');
	
	die(json_encode($res));

?>