<?php
include('config.php');

if(isset($_POST) && !empty($_POST)){
	
	$i = $_POST['i'];
	
	$q = "SELECT book_id as id, book_name as name, book_author as author, book_publisher as publisher, book_price as mrp, book_sale_price as salePrice FROM `vprep_book` WHERE book_uploaded_by = '$i'";
	
	$x = mysqli_query($con, $q);
	
	if(mysqli_num_rows($x) > 0){
		
		$bo = array();
		
		while($r = mysqli_fetch_assoc($x)){
			$bo[] = $r;
		}
		
		$res = array('status' => 1, 'message' => 'Books Found', 'books' => $bo);
		
	}else
		$res = array('status' => 0, 'message' => 'You haven\'t published any book yet');
	
	die(json_encode($res));
	
}

?>