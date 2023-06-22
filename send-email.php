<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "gmtgeovane@gmail.com"; // Replace with your email address

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $subject = "Form Submission: $first_name $last_name";
    $body = "Name: $first_name $last_name\n\nEmail: $email\n\nMessage:\n$message";

    // You can add additional headers if needed
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
}
?>
