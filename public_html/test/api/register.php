<?php
include('config.php');
require_once "Mailer/PHPMailerAutoload.php";

function send($n, $u, $e, $p){
	$mail = new PHPMailer;
	
	$mail->From = "info@absolutprep.com";
	$mail->FromName = "AbsolutPrep";
	
	//$mail->addAddress("ansh0437@gmail.com");
	$mail->addAddress($e);

	$mail->Subject = "Absolutprep.com : Account Login Details.";
	$mail->IsHTML(true);
	$mail->Body = getMessage($n, $u, $p);
	
	$mail->send();
}

if(!empty($_POST) && isset($_POST)){

	$n = $_POST['name'];
	$u = $_POST['username'];
	$e = $_POST['email'];
	$p = $_POST['password'];
	$a = $_POST['address'];
	$c = $_POST['city'];
	$s = $_POST['state'];
	$z = $_POST['zip'];
	$g = $_POST['gender'];
	$phone = $_POST['phone'];
	
	$p = md5($p);
	
	$query = "Select * from users where email = '$e'";
		
		$sql = mysqli_query($con, $query);
		
		if(mysqli_num_rows($sql) == 0){
		
			$d = date_timestamp_get(date_create());
			
			$qry = "INSERT INTO `users`(`oauth_provider`, `oauth_uid`, `name`, `username`, `password`, `address`, `city`, `state`, `zip`, `email`, `phone`, `gender`, `dob`, `image`, `user_type`, `is_tutor`, `is_institute`, `is_active`, `created_at`, `created_by`, `updated_by`, `updated_at`) VALUES ('', '', '$n', '$u', '$p', '$a', '$c', '$s', '$z', '$e', '$phone', '$g', '0000-00-00', '', '4', '0', '0', '1', '$d', 0, 0, '$d')";
			
			if(mysqli_query($con, $qry)){
				send($n, $u, $e, $p);
				$id =  mysqli_fetch_assoc(mysqli_query($con, "Select * from users where email = '$e' "))['id'];
				$result = array('status' => 2, 'message' => 'Registration Successful', 'user_id' => $id);
			}else
				$result = array('status' => 0, 'message' => 'Error occured');
		
		}else
			$result = array('status' => 1, 'message' => 'Email already exists');
		
		die(json_encode($result));	
	
}

function getMessage($name = NULL, $username = NULL, $password = NULL) {
	$message = '		<html><body>		<table style="border:10px solid #DD861F;" align="center" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="650">		<tbody><tr>		<td align="left" valign="top"><table style="border-bottom:1px solid #cccccc;background:#242C42" border="0" cellpadding="0" cellspacing="0" width="650">		<tbody><tr>		<td style="padding:10px" align="left" valign="middle" width="275">		<img class="CToWUd" alt="www.absolutprep.com" src="http://dev.absolutprep.com/assets/frontend/images/splash-logo.png"  width="235"></td>		<td style="font-family:Arial;font-size:14px;color:#555555;padding:30px" align="right" valign="middle" width="255">&nbsp;</td>		</tr>		</tbody></table></td>		</tr>		<tr>		<td align="left" valign="top"><table border="0" cellpadding="0" cellspacing="0" width="650">		<tbody><tr><td colspan="3" height="30" width="100%"><img class="CToWUd" src="http://ci6.googleusercontent.com/proxy/CYcJtcDb1U4TDZ5dMxOrXLhXyIUvj1tK4lWR5o_OQCd4dw42ohEKCQ2yv0PZnsNKaHvzysO0bkiP7kGcMKR24u2GndhQJqWcr4YcXIk08EnTxvAyXgJn-ZgNeeNche1Kuw=s0-d-e1-ft#http://cdn5.f-cdn.com/img/blank.gif?v=d21d1c04745849be6d176cdeb8d06f4b&amp;m=2" height="1" width="1"></td></tr>		<tr>		<td width="30"><img class="CToWUd" src="http://ci6.googleusercontent.com/proxy/CYcJtcDb1U4TDZ5dMxOrXLhXyIUvj1tK4lWR5o_OQCd4dw42ohEKCQ2yv0PZnsNKaHvzysO0bkiP7kGcMKR24u2GndhQJqWcr4YcXIk08EnTxvAyXgJn-ZgNeeNche1Kuw=s0-d-e1-ft#http://cdn5.f-cdn.com/img/blank.gif?v=d21d1c04745849be6d176cdeb8d06f4b&amp;m=2" height="1" width="1"></td>		<td style="font-size:13px;color:#333333" width="590">		<p style="font-family:Arial;font-size:18px;color:#434A54;margin-bottom:0.5em;margin-top:0">Hello ' . $name . ',</p>		<p>You are registered to use AbsolutPrep services.</p>		<p>&nbsp;</p>		<p>You login details are given below. Once logged in please complete your Profile information.</p>		<p>&nbsp;</p>		<p>Your Login detail are :</p>		<p>Username : ' . $username . '</p>		<p>Password : ' . $password . '</p>		<p>Click on the Login button to login in your account and complete your Profile information.</p>		<p><span><a href="http://test.absolutprep.com/sign-in.html" target="_blank" style="color:#fff;background-color:#242C42;padding:10px;text-decoration:none;font-size:14px;">Login</a></span></p>		<p><br /></p>		<p>Thanks for being our awesome student!</p>		<p>For any enquiry mail us on <a href="mailto:info@absolutprep.com" style="color:#DD861F;text-decoration:none">info@absolutprep.com</a></p>		</p>		 		<div><b> Thank you,</b> </div>		<div><b> <span class="il">www.absolutprep.com</span></b>  </div>		</td>		<td width="30"><img class="CToWUd" src="http://ci6.googleusercontent.com/proxy/CYcJtcDb1U4TDZ5dMxOrXLhXyIUvj1tK4lWR5o_OQCd4dw42ohEKCQ2yv0PZnsNKaHvzysO0bkiP7kGcMKR24u2GndhQJqWcr4YcXIk08EnTxvAyXgJn-ZgNeeNche1Kuw=s0-d-e1-ft#http://cdn5.f-cdn.com/img/blank.gif?v=d21d1c04745849be6d176cdeb8d06f4b&amp;m=2" height="1" width="1"></td>		</tr>            		<tr><td colspan="3" height="30" width="100%"><img class="CToWUd" src="http://ci6.googleusercontent.com/proxy/CYcJtcDb1U4TDZ5dMxOrXLhXyIUvj1tK4lWR5o_OQCd4dw42ohEKCQ2yv0PZnsNKaHvzysO0bkiP7kGcMKR24u2GndhQJqWcr4YcXIk08EnTxvAyXgJn-ZgNeeNche1Kuw=s0-d-e1-ft#http://cdn5.f-cdn.com/img/blank.gif?v=d21d1c04745849be6d176cdeb8d06f4b&amp;m=2" height="1" width="1"></td></tr>		</tbody></table></td>		</tr>		</tbody></table>		</body>		</html> ';
		
		return $message;
	}

?>