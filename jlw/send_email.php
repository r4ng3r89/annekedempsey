<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];

    $to = "reinier.olivier@gmail.com";
    $subject = "JLW Plumbing Service Request";
    $message = "Name: " . $name . "\nPhone: " . $phone . "\nDescription: " . $description;
    $headers = "From: reinier.olivier@gmail.com"; // Replace with your domain

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your request has been sent.";
    } else {
        echo "Sorry, there was an error sending your request.";
    }
} else {
    echo "Invalid request.";
}
?>