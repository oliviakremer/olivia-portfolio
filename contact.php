
<?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'oliviakremer.portfolio@gmail.com';
  $subject = 'New message from your website';
  $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

  if(mail($to, $subject, $body)){
    header('Location: thank-you.html');
  } else {
    echo 'There was an error sending your message. Please try again later.';
  }
}
?>
