<?php
include('config.php');

if(isset($_POST) && !empty($_POST)){
	
	$i = $_POST['i'];
	
	$sql = mysqli_query($con, "DELETE FROM `vprep_book` WHERE book_id='$i'");
	
	if($sql)
		$res = array('status' => 1, 'message' => 'Book Deleted');
	else
		$res = array('status' => 0, 'message' => 'Error Deleting Book');
	
	die(json_encode($res));
	
}

?>