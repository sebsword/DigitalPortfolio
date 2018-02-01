<?php
$name = $_POST['full_name'];
$email = $_POST['email'];
$content = $_POST['content'];
$phone = $_POST['phone'];

$to = 'CEO@allenchrology.org';
$subect = 'Contact form mail';
$headers = "From: $email";

$message = wordwrap("Your name: $name\n" .
"Email: $email\n" .
"Phone Number: $phone\n\n" .
"Form Message: \n\n$content");


mail ($to, $subect, $message, $headers);

echo 'Thank you for contacting me <br>
<a href="contact.html">Return to Contacts Page</a>'
?>