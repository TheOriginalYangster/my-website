<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];


$EmailTo = "will.yang361@gmail.com";
$Subject = "Message from williamsimoneyang.com";

// prepare email body text
$Fields .= "Name: ";
$Fields .= $name;
$Fields .= "\n";

$Fields.= "Email: ";
$Fields .= $email;
$Fields .= "\n";

$Fields .= "Message: ";
$Fields .= $message;
$Fields .= "\n";


// send email
$success = mail($EmailTo,  $Subject,  $Fields, "From:".$email);

