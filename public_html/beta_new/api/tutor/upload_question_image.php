<?php
include('config.php');

if (isset($_POST) && !empty($_POST)) {

	$n = $_POST['n'].'.jpg';
	
	$dir = "/home/absolutprep/public_html/test/uploads/questions/";
	
	$i = $_POST['i'];

	$dir = $dir.$i.'/';
	
	if(!file_exists($dir)){
		mkdir($dir, 0755, true);
	}
	
	$co = false;
	
    //$cn = str_replace(' ', '', $_FILES['q']['name']);
	
	
		$ctn = $_FILES['q']['tmp_name'];
		$cp = $dir.$n;

		if (file_exists($cp)) {
			$rqn = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);
			$cn = 'Qus_' . $rqn . $n;
			$cp = $dir.$cn;
		}

		if (move_uploaded_file($ctn, $cp))
			$co = true;
	
   
		if($co)
			$res = array('status' => 1, 'message' => 'Question image uploaded');
		else
			$res = array('status' => 0, 'message' => 'Question image not uploaded');
	
	
    die(json_encode($res));

}

?>