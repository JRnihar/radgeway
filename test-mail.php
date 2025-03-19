<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer (Ensure the path is correct)
require $_SERVER['DOCUMENT_ROOT'].'/PHPMailer/src/Exception.php';
require $_SERVER['DOCUMENT_ROOT'].'/PHPMailer/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'].'/PHPMailer/src/SMTP.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Enable SMTP Debugging (0 = off, 2 = detailed errors)
    $mail->SMTPDebug  = 2;
    $mail->Debugoutput = function($str, $level) {
        file_put_contents('mail_error.log', $str . PHP_EOL, FILE_APPEND);
    };

    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host       = 'mail.radgewayservice.com';  // Your mail server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'info@radgewayservice.com';  // Your email address
    $mail->Password   = 'YOUR_EMAIL_PASSWORD';       // Your email password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use SSL encryption
    $mail->Port       = 465;                         // SMTP port

    // Sender & Recipient
    $mail->setFrom('info@radgewayservice.com', 'Radgeway Test');
    $mail->addAddress('info@radgewayservice.com');   // Send test email to yourself

    // Email Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email from PHPMailer';
    $mail->Body    = '<h3>This is a test email to verify SMTP settings.</h3>';
    $mail->AltBody = 'This is a test email to verify SMTP settings.';

    // Send the email
    if ($mail->send()) {
        echo "✅ Test email sent successfully!";
    } else {
        echo "❌ Test email failed!";
    }
} catch (Exception $e) {
    echo "❌ Error: " . $mail->ErrorInfo;
    file_put_contents("mail_error.log", "Mail Error: " . $mail->ErrorInfo . PHP_EOL, FILE_APPEND);
}
?>
