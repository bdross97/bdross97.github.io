<?php
$to = 'brayden.d.ross@gmail.com';
$subject = 'Message from ' . $_POST['fullname'];
$message = $_POST['message'];
$headers = 'From: ' . $_POST['email'];

if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Email sending failed.";
}
?>