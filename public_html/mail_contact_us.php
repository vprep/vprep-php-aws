<?php $to = "swadhin@vprep.in";
 $subject = "Contact us query" ;
 
 
 $body = '<body>';
 $body .= 'Email Id=';
 $body .= $_POST["q4_email"] . "\r\n";
 $body .= 'Name = ';
$body .= $_POST["q3_name"] . "\r\n";
$body .= 'Contact Number = ';
$body .= $_POST["q5_contactNumber"] . "\r\n";
$body .= 'Message = ';
$body .= $_POST["q7_message"] . "\r\n";


$body .='</body>';

    $headers = 'From:cpanel@vprep.in ' . "\r\n" ;
    $headers .='Reply-To: '. $to . "\r\n" ;
    $headers .='X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";   
    
if(mail($to, $subject, $body,$headers)) {
  echo('<br>'."Email Sent  ".'</br>');
  //$this->message->set('Your Query has been Submitted, Our team will get in touch with you.', 'success', TRUE);
        
        header('Location: http://vprep.in/contact_us.php?confirm=1');
  } 
  else 
  {
  echo("<p>Email Message delivery failed...</p>");
  }
  
  ?>