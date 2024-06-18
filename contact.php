<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $firstName = htmlspecialchars($_POST['first_name1']);
	$lastName = htmlspecialchars($_POST['last_name1']);
    $email = htmlspecialchars($_POST['email1']);
    $phone = htmlspecialchars($_POST['phone1']);

    // Set the recipient email address
    $to = "abdallah.algamal93@gmail.com";  // Replace with your email address

    // Set the email subject
    $subject = "New Appointment Request";

    // Build the email content
    $email_content = "Name: $firstName\n";
	$email_content = "Name: $lastName\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$phone\n";

    // Set the email headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Form submitted successfully!";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    echo "Invalid request.";
}
?>