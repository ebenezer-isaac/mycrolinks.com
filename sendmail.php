<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['con_name'];
    $phone = $_POST['con_phone'];
    $email = $_POST['con_email'];
    $subject = $_POST['con_subject'];
    $message = $_POST['con_message'];

    $to = 'mail@mycrolinks.com';
    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $body = "You have received a new message from your website contact form.\n\n" .
        "Here are the details:\n\nName: $name\n\nPhone: $phone\n\nEmail: $email\n\nSubject: $subject\n\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Success';
    } else {
        echo 'Failure';
    }
}
?>