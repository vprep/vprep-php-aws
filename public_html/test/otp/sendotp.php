<?php

$mob = $_GET['phone'];

$random_otp = (rand(1000,9999));

$body = "Your Vprep OTP is: $random_otp. Enter it to login to your account.";

$post_data = array(
    // 'From' doesn't matter; For transactional, this will be replaced with your SenderId;
    // For promotional, this will be ignored by the SMS gateway
    'From'   => '08039236324',
    'To'    => $mob,
    'Priority'      => 'high',
    'Body'  => $body,
);
 
$exotel_sid = "vprep"; // Your Exotel SID - Get it from here: http://my.exotel.in/Exotel/settings/site#api-settings
$exotel_token = "98102ae587fe40ada422d1e02574a1523435c44f"; // Your exotel token - Get it from here: http://my.exotel.in/Exotel/settings/site#
 
$url = "http://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Sms/send";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FAILONERROR, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
 
$http_result = curl_exec($ch);
$error = curl_error($ch);
$http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);

$json = json_encode($http_result);
curl_close($ch);
echo $json;
 





?>