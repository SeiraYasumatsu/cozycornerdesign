<?php
// Replace this with your email
$to = "cozycornerdesign.ca@gmail.com";  // 🔥 Replace with your actual email address
$subject = "New Contact Form Message";

// Collect form data
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$title = htmlspecialchars($_POST['title']);
$message = htmlspecialchars($_POST['message']);

// Validate required fields
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format.";
    exit;
}

// Prepare email content
$body = "
    Name: $name\n
    Email: $email\n
    Title: $title\n
    Message: $message
";

// Email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8";

// Send email
if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully! I will get back to you soon.";
} else {
    echo "Please fill out all required fields.";
}
?>
