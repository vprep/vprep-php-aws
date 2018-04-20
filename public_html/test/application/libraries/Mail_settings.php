<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mail_settings {
    public function __construct() {
        $this->ci =& get_instance();
        
    }
    function send_mail($address,$attach_path='',$subject,$body){
        require 'PHPMailer-master/PHPMailerAutoload.php';

        $mail = new PHPMailer;
        
        $mail_rcd=$this->ci->db->get_where('mail_settings',array('id'=>1))->row_array();        
        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = $mail_rcd['mail_host'];  // Specify main and backup SMTP servers
        $mail->SMTPAuth = ($mail_rcd['mail_smtp_auth']==1)?true:false;                               // Enable SMTP authentication
        $mail->Username = $mail_rcd['mail_username'];                 // SMTP username
        $mail->Password = $this->ci->encrypt->decode($mail_rcd['mail_password']);                           // SMTP password
        $mail->SMTPSecure = $mail_rcd['mail_smtp_secure'];                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = $mail_rcd['mail_port'];                                    // TCP port to connect to

        $mail->From = $mail_rcd['mail_from'];
        $mail->FromName = $mail_rcd['mail_from_name'];
        
        foreach($address as $key=>$value):
            $mail->addAddress($value, $key);     // Add a recipient
        endforeach;
        
        //$mail->addAddress('ellen@example.com');               // Name is optional
        
        $mail->addReplyTo($mail_rcd['mail_from_name'], '');
        $mail->addCC($mail_rcd['mail_cc']);
        $mail->addBCC($mail_rcd['mail_bcc']);

        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            //echo 'Message could not be sent.';
            //echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            //echo 'Message has been sent. ';
        }
        
    }
}
