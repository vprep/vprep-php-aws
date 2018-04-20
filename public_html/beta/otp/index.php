<!DOCTYPE html>
<html>
<title>Form</title>
<body>
<form action="otpprocess.php" method="post">
Name:<input class="input" type="text" placeholder="name" name="name" required><br><br>
Email:<input class="input" type="email" placeholder="email" name="email" required><br><br>
Phone:<input class="input" type="text" placeholder="phone" name="phone" required><br><br>
<button type="submit" name="btn-save">Submit</button>
</form>

<?php
echo "Hello world!"; 
//setup the request, you can also use CURLOPT_URL
$auth = '188367AuKEOSHv6b5a34f9b4';



<!-- $ch = curl_init('http://control.msg91.com/api/sendotp.php?authkey=188367AuKEOSHv6b5a34f9b4&mobile=919538713596&message=Yo testing ur%20OTP%20is%200808&otp=0808'); -->



// Returns the data/output as a string instead of raw data


// get stringified data/output. See CURLOPT_RETURNTRANSFER
$data = curl_exec($ch);

echo $data;

// get info about the request
$info = curl_getinfo($ch);
echo "Hello world! info: "+$info; 

// close curl resource to free up system resources
curl_close($ch)
?>
</body>
</html>