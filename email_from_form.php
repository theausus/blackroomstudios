<?php
if(!isset($_POST['submit']))
{
    //This page should not be accessed directly.
    echo "Error, must be submitted from form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
//Validate
if(empty($name)||empty($visitor_email))
{
    echo "Name and email are required";
    exit;
}

$email_from = 'lukehgarrigus@yahoo.com';
$email_subject = "'Website email: $subject";
$email_body = "Name: $name \n Email address: $visitor_email \n Message: $message";
$to = 'lukehgarrigus@yahoo.com';
$headers = "From: $email_from \r\n";
//send
mail($to,$email_subject,$email_body,$headers);
