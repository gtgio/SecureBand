<?php
$email_to = 'gmdevelopmentnl@gmail.com'; //your email
$business = 'GM.inc'; //business name
$topic = $_POST['topic'];
$name = $_POST['name'];
$email_from = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$autoResponse = true; //set to false if you don't want to send an auto reply
$autoResponseSubject = "GM Beats contact form";
$autoResponseMessage = "Hi,

Thanks for reaching out! I will check your message and answer it as fast as possible. You'll get an answer within 48 hours.

Best regards,

GM.inc";
$autoResponseHeaders = "From: $business <$email_to>\r\n";
$autoResponseHeaders .= "Reply-To: $business <$email_to>\r\n";

$headers = "From: $name <$email_from>\r\n";
$headers .= "Reply-To: $name <$email_from>\r\n";

if(@mail($email_to, $topic.': '.$subject, $message, $headers)){
 if($autoResponse === true){
  mail($email_from, $autoResponseSubject, $autoResponseMessage, $autoResponseHeaders);
 }
 echo '1';
} else {
 echo '0';
}
?>
