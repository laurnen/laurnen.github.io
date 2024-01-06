<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "laurentan@u.northwestern.edu";
    $subject = "New Contact Form Submission";

    $email = $_POST["email"];

    // You can customize the email message as needed
    $message = $_POST["text"];

    // Additional headers
    $headers = "laurentan@u.northwestern.edu"; // Change this to your own email or leave it empty

    // Send email
    mail($to, $subject, $message, $headers);

    exit();
}
?>
