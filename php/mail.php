<?php

$name = $_POST["name"];
$from = $_POST["email"];
$subject = "Message from konkurssi";
$to = "info@konkurssiapua.fi";
$phone = $_POST["phone"];
$message =  $_POST["msg"];


$txt = "name: " . $name . "\r\n". "\r\n" ."Telephone Nr.:". $phone ."\r\n". "\r\n". "Email: " . $from ."\r\n". "\r\n" . "message: " . $message;

$headers = "From: " . $from . "\r\n";
$headers = "Call-To: " . $from . "\r\n";
$headers = "Reply-To: " . $from . "\r\n";

$mail_status = mail($to, $subject, $txt, $headers);

if ($mail_status) {
    header("Location: /index.html?mail_status=sent");
} else {
    header("Location: /index.html?mail_status=error");
}
