<?php
if(!isset($_POST['submit']))

{

    echo "error; you need to submit the form!";
}

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

if(empty($name) || empty($visitor_email))
{
    echo "Name and email are mandatory!";
    exit;
}

$email_from = 'hanne.salmi92@gmail.com';
$email_subject = "New form submission";
$email_body = "You have received a new message from the user $name \n" .
    "email address $visitor_email\n" .
    "Here is the message:\n $message";

$to = "hanne.salmi92@gmail.com";
$headers = "From: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);

?>