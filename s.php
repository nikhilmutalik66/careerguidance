<?php
    if(isset($_GET['send']))
    {
        require 'PHPMailerAutoload.php';
        require 'eandp.php';
        $mail = new PHPMailer;

        $mail->SMTPDebug = 3;                               // Enable verbose debug output

        //$mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'tls://smtp.mboxhosting.com:587';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = Email;                 // SMTP username
        $mail->Password = Pass;                           // SMTP password
        //$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        //$mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom(Email, 'Carrer Guidance');
        $mail->addAddress($_GET['email']);     // Add a recipient
       
        $mail->addReplyTo(Email);
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $_GET['sub'];
        $mail->Body    = '<div><h3>your Query is solved</h3></div>';
        $mail->AltBody = $_GET['msg'];

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
        echo !extension_loaded('openssl')?"Not Available":"Available";
    }
?>