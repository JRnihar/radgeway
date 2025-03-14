

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
  $mail->Host       = 'mail.radgewayservice.com'; // Your SMTP server
$mail->SMTPAuth   = true;
$mail->Username   = 'info@radgewayservice.com'; // Your email username
$mail->Password   = '*!SpSG.gn;Kw';  // Replace with your actual email password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use SSL encryption
$mail->Port       = 465;

    // Sender & Recipient
    $mail->setFrom($email, $name);
    $mail->addAddress('info@radgewayservice.com'); // Change to your email

    // Email Content
    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Message';
    $mail->Body    = "<p><strong>Name:</strong> $name</p>
                      <p><strong>Email:</strong> $email</p>
                      <p><strong>Message:</strong> $message</p>";

    // Send Email
    if ($mail->send()) {
        echo "✅ Your message has been sent successfully!";
    } else {
        echo "❌ Failed to send message.";
    }

} catch (Exception $e) {
    echo "❌ Error: " . $mail->ErrorInfo;
}
?>
