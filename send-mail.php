<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Start session for storing form status
session_start();

// Get form data
$name = $_POST['name'] ?? 'Not provided';
$email = $_POST['email'] ?? 'Not provided';
$message = $_POST['message'] ?? 'Not provided';

// Check if we're on localhost
if ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_ADDR'] == '127.0.0.1') {
    // Log email instead of sending
    $log_file = 'email_log.txt';
    $log_content = date('Y-m-d H:i:s') . " - TO: info@radgewayservice.com - FROM: $email - SUBJECT: New Contact Form Message - CONTENT: $message\n\n";
    file_put_contents($log_file, $log_content, FILE_APPEND);
    
    // Return success for testing
    $_SESSION['form_status'] = 'success';
    $_SESSION['form_message'] = '[LOCAL] Email would be sent in production. Check email_log.txt';
    header("Location: contact.php");
    exit;
}

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->Host       = 'mail.radgewayservice.com'; // Your SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'info@radgewayservice.com'; // Your email username
    $mail->Password   = '*!SpSG.gn;Kw';  // Your email password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use SSL encryption
    $mail->Port       = 465;

    // Sender & Recipient
    $mail->setFrom('info@radgewayservice.com', 'Contact Form');
    $mail->addReplyTo($email, $name);
    $mail->addAddress('info@radgewayservice.com'); // Recipient email

    // Email Content
    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Message from ' . $name;
    $mail->Body    = "<p><strong>Name:</strong> $name</p>
                      <p><strong>Email:</strong> $email</p>
                      <p><strong>Message:</strong> " . nl2br(htmlspecialchars($message)) . "</p>";
    $mail->AltBody = "Name: $name\nEmail: $email\nMessage: $message";

    // Send Email
    if ($mail->send()) {
        $_SESSION['form_status'] = 'success';
        $_SESSION['form_message'] = 'Thank you! Your message has been sent successfully.';
    } else {
        $_SESSION['form_status'] = 'error';
        $_SESSION['form_message'] = 'Sorry, there was an error sending your message. Please try again later.';
    }

} catch (Exception $e) {
    $_SESSION['form_status'] = 'error';
    $_SESSION['form_message'] = 'Error: ' . $mail->ErrorInfo;
}

// Redirect back to contact page
header("Location: contact.php");
exit;
?>