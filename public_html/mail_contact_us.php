<?php
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
// Modify the path in the require statement below to refer to the
// location of your Composer autoload.php file.
//require 'path_to_sdk_inclusion';

// Instantiate a new PHPMailer
require '/var/www/vprep.in/public_html/vendor/autoload.php';
$mail = new PHPMailer;

// Tell PHPMailer to use SMTP
$mail->isSMTP();

// Replace sender@example.com with your "From" address.
// This address must be verified with Amazon SES.
$mail->setFrom('swadhin@vprep.in', 'Sender Name');

// Replace recipient@example.com with a "To" address. If your account
// is still in the sandbox, this address must be verified.
// Also note that you can include several addAddress() lines to send
// email to multiple recipients.
$mail->addAddress('info@vprep.in', 'Recipient Name');

// Replace smtp_username with your Amazon SES SMTP user name.
$mail->Username = 'AKIAJDZWH53MYONX2GPA';

// Replace smtp_password with your Amazon SES SMTP password.
$mail->Password = 'AnQ0WCCqc/PUP8T5hQIdG4goacmF1HQk6sXU4198HE7e';

// Specify a configuration set. If you do not want to use a configuration
// set, comment or remove the next line.
//$mail->addCustomHeader('X-SES-CONFIGURATION-SET', 'ConfigSet');

// If you're using Amazon SES in a region other than US West (Oregon),
// replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
// endpoint in the appropriate region.
$mail->Host = 'email-smtp.us-east-1.amazonaws.com';

// The subject line of the email
$mail->Subject = 'Amazon SES test (SMTP interface accessed using PHP)';
//$mail->SMTPDebug = 2;
// The HTML-formatted body of the email
$mail->Body = $body;

// Tells PHPMailer to use SMTP authentication
$mail->SMTPAuth = true;

// Enable TLS encryption over port 587
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Tells PHPMailer to send HTML-formatted email
$mail->isHTML(true);

// The alternative email body; this is only displayed when a recipient
// opens the email in a non-HTML email client. The \r\n represents a
// line break.
$mail->AltBody = "Email Test\r\nThis email was sent through the 
    Amazon SES SMTP interface using the PHPMailer class.";

//if(!$mail->send()) {
 //   echo "Email1 not sent. " , $mail->ErrorInfo , PHP_EOL;
//} else {
  //  echo "Email sent!" , PHP_EOL;
   // header("Location: http://vprep.in/new_home.php?confirm=1#contactForm");

//}

?>






