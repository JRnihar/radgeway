<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer (Ensure the path is correct)
require $_SERVER['DOCUMENT_ROOT'].'/PHPMailer/src/Exception.php';
require $_SERVER['DOCUMENT_ROOT'].'/PHPMailer/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'].'/PHPMailer/src/SMTP.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form fields from both contact forms
    $name    = $_POST['name'] ?? 'No Name';
    $phone   = $_POST['phone'] ?? 'No Phone';
    $email   = $_POST['email'] ?? 'No Email';
    $service = $_POST['service'] ?? 'No Service Selected';
    $subject = $_POST['subject'] ?? 'New Inquiry';
    $message = $_POST['message'] ?? 'No Message';

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "❌ Invalid email address!";
        exit;
    }

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Enable SMTP Debugging (0 = off, 2 = debug)
        $mail->SMTPDebug  = 0;
        
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'mail.radgewayservice.com';  // Your mail server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@radgewayservice.com';  // Your email
        $mail->Password   = 'YOUR_EMAIL_PASSWORD';       // Your email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // SSL encryption
        $mail->Port       = 465;                         // SMTP port

        // Sender & Recipient
        $mail->setFrom('info@radgewayservice.com', 'Radgeway Service');
        $mail->addAddress('info@radgewayservice.com');   // Send to yourself
        $mail->addReplyTo($email, $name);                // Reply to sender

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = "New Inquiry from $name";
        $mail->Body    = "
            <h3>New Inquiry Received</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Service Requested:</strong> $service</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong></p>
            <p>$message</p>
        ";
        $mail->AltBody = "New Inquiry\n\nName: $name\nPhone: $phone\nEmail: $email\nService: $service\nSubject: $subject\nMessage:\n$message";

        // Send Email
        if ($mail->send()) {
            echo "✅ Your message has been sent successfully!";
        } else {
            echo "❌ Message could not be sent!";
        }

    } catch (Exception $e) {
        echo "❌ Mail Error: " . $mail->ErrorInfo;
        file_put_contents("mail_error.log", "Mail Error: " . $mail->ErrorInfo . PHP_EOL, FILE_APPEND);
    }
} else {
    echo "❌ Invalid request!";
}
?>
