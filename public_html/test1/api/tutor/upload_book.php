<?php
include('config.php');

function ran(){
    return substr(str_shuffle("@-_0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);
}

if (isset($_POST) && !empty($_POST)) {

	$i = $_POST['i'];
	$n = $_POST['n'];
	$a = $_POST['a'];
	$p = $_POST['p'];
	$mp = $_POST['mp'];
	$sp = $_POST['sp'];
	$d = $_POST['d'];
	$dt = $_POST['dt'];
	
	$dir = "/home/absolutprep/public_html/test/uploads/ebook/cover/";
	
	$co = false;
	$bo = false;
	
    $cn = str_replace(' ', '', $_FILES['c']['name']);
	if($cn){
		$ctn = $_FILES['c']['tmp_name'];
		$cp = $dir.$cn;

		if (file_exists($cp)) {
			$cn = 'COVER_' . ran() . $cn;
			$cp = $dir.$cn;
		}

		if (move_uploaded_file($ctn, $cp))
			$co = true;
	}
    
    $bn = str_replace(' ', '', $_FILES['b']['name']);
	if($bn){
		$btn = $_FILES['b']['tmp_name'];
		$bp = $dir.$bn;

		if (file_exists($bp)) {
			$bn = 'BOOK_' . ran() . $bn;
			$bp = $dir.$bn;
		}

		if (move_uploaded_file($btn, $bp))
			$bo = true;
	}
   
    if($bo){
		if($co){
	   
			$qry = "INSERT INTO `vprep_book`(`book_name`, `book_cover_page`, `book_file_name`, `book_file_type`, `book_author`, `book_publisher`, `book_detail`, `book_price`, `book_sale_price`, `book_status`, `book_uploaded_by`, `book_added_on`, `book_updated_on`) VALUES ('$n', '$cn', '$bn', 'NULL', '$a', '$p', '$d', '$mp', '$sp', '1', '$i', '$dt', '$dt')";
				
			$sql = mysqli_query($con, $qry);

			if ($sql)
				$res = array('status' => 1, 'message' => 'Book Saved');
			else
				$res = array('status' => 0, 'message' => 'Error saving book', 'err' => $qry);

		}else
			$res = array('status' => 2, 'message' => 'Error uploading cover image');
	}else
			$res = array('status' => 3, 'message' => 'Error uploading book');
	
    die(json_encode($res));

}

?>