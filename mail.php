<?php
$to="shridharbhinge@gmail.com";
$subject=" responce";
$message=" Thank you";
$header ="form:education@careerguidance.dx.am";
if(mail($to,$subject,$message,$header))
{
echo "mail send success";}
else{
echo" not send";
}
?>