
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'oliviakremer.portfolio@gmail.com';
    $subject = 'New message from your website';
    $message = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    header('Location: thank-you.html'); 
    exit;
}
?>
