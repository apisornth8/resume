<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set up the recipient email address (your Gmail address)
    $to = "apisornth8@gmail.com";

    // Set up the email subject
    $subject = "New Contact Form Submission";

    // Build the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Set up additional headers
    $headers = "From: $email";

    // Attempt to send the email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Thank you for contacting Me! I will get back to you soon.";
    } else {
        echo "Error sending email. Please try again later.";
    }
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: index.html");
    exit();
}
?>
