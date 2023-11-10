<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $email = $_POST["email"];

    // Send email
    $to = $email;
    $subject = "Email Test";
    $message = "Hey $first_name, this is just an email test.";
    $headers = "From: your_email@example.com"; // Replace with your email address

    mail($to, $subject, $message, $headers);

    // Redirect to a thank-you page
    header("Location: thank_you.html");
    exit();
}
?>
