<?php
   
   function send_mail($email,$msg,$name)
   {
        
                 $message = '<div>';
                 $message .= 'Hey, '.'Admin'. '<br><br>';
                 $message .= 'From Team of Careerguidance.<br>';
                 $message .= 'A New Query is sent by '.$name.' <br>';
                 $message .= 'Message: '.$msg.'<br>';
                 $message .= 'Hope you understand this query. <br>';
                 $message .= 'Email :'.$email.'. <br>';
                 $message .= 'Try to solve as soon as Posible. <br><br><br>';
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
        $mail->addAddress('nikhilmutalik66@gmail.com');     // Add a recipient
       
        $mail->addReplyTo(Email);
        //$mail->addCC('nikhilmutalik66@gmail.com');
        
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = "From Team of Careerguidance";
        $mail->Body    = $message;
        $mail->AltBody = "";

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo "<script>alert('Data submitted and mail send successfully');</script>";
        }
        //echo !extension_loaded('openssl')?"Not Available":"Available";
    }
?>