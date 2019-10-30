<?php

if(!isset($_POST["submit"])) 
{
echo "error; you need to submit the form!";
}
    $recipient="kristian.claire.101@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    //validate

if(empty($sender) || empty($senderEmail))
{
    echo "Please make sure you have entered your name and email address!";
    exit;
}

$email_from = "kristian.claire.101@gmail.com";
$email_subject = "New Form Submission";
$email_body = "You have received a new message from the user $sender.\n".
"email address: $senderEmail\n".   
"Here is the message:\n $message".   

$to = "kristian.claire.101@gmail.com";
$headers = "From: $email_from \r\n";

//send the mail

mail($to,$email_subject,$email_body,$headers);

  

?>


