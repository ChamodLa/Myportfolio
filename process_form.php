<?php
if (isset($_POST['submit'])) {
    $to = 'productionscs83@gmail.com';
    $subject = 'Form submission from Protfolio website';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //email body
    $email_body = "Name: $name\nEmail: $email\nMessage:\n$message";

    //headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $email_body, $headers)) {
        echo 'Mail Sent. Thank you for contacting us!';
    } else {
        echo 'Oops! Something went wrong. Please try again later.';
    }
}
?>
