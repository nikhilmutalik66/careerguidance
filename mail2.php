<?php
   
   function send_mail1($email,$msg,$name)
   {
        
                 $message = '<div>';
                 $message .= 'Dear, '.$name. '<br><br><br>';
                 $message .= 'This is From Team Careerguidance. <br>';
                 $message .= $msg.'<br>';
                 $message .= 'Thank you for visiting our website. <br><br><br>';
                 $message .= 'Warm regards, <br>Team CreerGuidance, <br>  Careerguidance.dx.am </div>';
                 
                 
        require 'PHPMailerAutoload.php';
        require 'eandp.php';
        
        $mail = new PHPMailer;

        $mail->SMTPDebug = 3;                               // Enable verbose debug output

        
        $mail->Host = 'tls://smtp.mboxhosting.com:587';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = Email;                 // SMTP username
        $mail->Password = Pass;                           // SMTP password
       
        $mail->setFrom(Email, 'Carrer Guidance');
        $mail->addAddress($email);     // Add a recipient
       
        $mail->addReplyTo(Email);
        
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = "From Team of Careerguidance";
        $mail->Body    = $message;
        $mail->AltBody = "";

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo "<script>alert(' mail send successfully');</script>";
        }
        //echo !extension_loaded('openssl')?"Not Available":"Available";
    }
?>