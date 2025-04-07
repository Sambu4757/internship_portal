<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs and sanitize
    $name = htmlspecialchars(strip_tags($_POST["name"]));
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(strip_tags($_POST["message"]));

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address.");
    }

    // Email details
    $to = "your-email@example.com"; // Change this to your email
    $subject = "New Contact Form Submission from $name";
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain";
    
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message.";
    }
} else {
    echo "Invalid request.";
}
?>
