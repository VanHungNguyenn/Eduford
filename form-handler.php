<?php
    $name = $_POST[''];
    $visitor_email = $_POST[''];
    $subject = $_POST[''];
    $massage = $_POST[''];

    $email_from = 'info@yourwebsite.com';
    $email_subject = 'New Form Submission';
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "Subject: $subject.\n".
                    "User Message: $massage.\n".

    $to = 'vanhungnguyenbku@gmail.com';

    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to, $email_subject, $email_body, $headers);
    header("Location: contact.html");
?>