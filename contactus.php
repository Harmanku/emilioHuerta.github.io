<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['Phone']))
$Phone = $_POST['Phone'];
if(isset( $_POST['subject']))
$subject =  $_POST['subject'];

$textok = $_POST['textok'];

if ($name === ''){
    echo "Name cannot be empty.";
    die();
    }
    if ($email === ''){
    echo "Email cannot be empty.";
    die();
    } else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Email format invalid.";
    die();
    }
    }
    if ($subject === ''){
    echo "Subject cannot be empty.";
    die();
    }   
    if ($message === ''){
    echo "Message cannot be empty.";
    die();
    }

$content="From: $name \n Email: $email \n Phone: $Phone \n Texting Ok: $textok \n Subject: $subject  \n Message: $message \n "  ;
$recipient = "EmiliosNewsletter@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, "Contact Us Form Submission", $content, $mailheader) or die("Error!");
echo "Email sent!";
?>