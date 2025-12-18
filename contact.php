<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "esmi.lira3@outlook.com"; // 🔹 Replace with YOUR email
    $subject = "New Contact Form Message";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)){
        echo "✅ Message sent successfully!";
    } else {
        echo "❌ Error sending message.";
    }
}
?>
