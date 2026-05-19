<?php
/**
 * send_email.php — Premium Email Processing Controller for Neko & Kopi Colombo
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';

// 1. Force JSON Response
header('Content-Type: application/json; charset=utf-8');

// 2. Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'status'  => 'error',
        'message' => 'Method Not Allowed. Only POST requests are accepted.'
    ]);
    exit;
}

// 3. Collect and sanitize input parameters
$name    = isset($_POST['name']) ? trim(strip_tags($_POST['name'])) : '';
$email   = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
$subject = isset($_POST['subject']) ? trim(strip_tags($_POST['subject'])) : '';
$message = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : '';

// 4. Validate fields
if (empty($name) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($message)) {
    http_response_code(400);
    echo json_encode([
        'status'  => 'error',
        'message' => 'Please fill out all fields correctly with a valid email address.'
    ]);
    exit;
}

// Format Subject Label
$subjectLabel = 'General Enquiry';
if ($subject === 'reservation') $subjectLabel = 'Table Reservation';
if ($subject === 'event')       $subjectLabel = 'Event Enquiry';
if ($subject === 'feedback')    $subjectLabel = 'Feedback & Suggestions';
if ($subject === 'other')       $subjectLabel = 'Something Else';

// 5. Build Recipient Address
$to = 'nekoteammarketing@gmail.com';

// 6. Build a beautiful, premium HTML Email Template
$emailSubject = "Neko & Kopi Website Enquiry: $subjectLabel by $name";

// HTML Email Layout
$htmlContent = "
<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <title>New Neko &amp; Kopi Message</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #FAF6F0;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
      color: #3A2A1E;
      -webkit-font-smoothing: antialiased;
    }
    .wrapper {
      width: 100%;
      background-color: #FAF6F0;
      padding: 40px 0;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #FFFFFF;
      border-radius: 24px;
      overflow: hidden;
      border: 1px solid rgba(196, 149, 106, 0.15);
      box-shadow: 0 8px 30px rgba(58, 42, 30, 0.03);
    }
    .header {
      background-color: #72997C;
      padding: 30px 40px;
      text-align: center;
    }
    .header-logo {
      width: 55px;
      height: 55px;
      border-radius: 50%;
      border: 2px solid rgba(255, 255, 255, 0.2);
    }
    .header-title {
      font-family: 'Playfair Display', Georgia, serif;
      font-size: 22px;
      color: #FFFFFF;
      margin: 10px 0 0 0;
      font-weight: 600;
      letter-spacing: -0.01em;
    }
    .content {
      padding: 40px;
    }
    .welcome {
      font-size: 15px;
      line-height: 1.6;
      color: #8B6850;
      margin: 0 0 30px 0;
    }
    .meta-table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 30px;
    }
    .meta-row {
      border-bottom: 1px solid #E6DCD2;
    }
    .meta-label {
      padding: 12px 0;
      font-size: 13px;
      font-weight: 700;
      color: #3A2A1E;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      width: 140px;
    }
    .meta-value {
      padding: 12px 0;
      font-size: 15px;
      color: #3A2A1E;
    }
    .message-box {
      background-color: #FAF6F0;
      border-radius: 16px;
      padding: 24px;
      border: 1px dashed rgba(196, 149, 106, 0.25);
      font-size: 15px;
      line-height: 1.6;
      color: #3A2A1E;
      white-space: pre-line;
    }
    .footer {
      background-color: #FAF6F0;
      padding: 30px 40px;
      text-align: center;
      border-top: 1px solid #E6DCD2;
    }
    .footer-text {
      font-size: 12px;
      color: #8B6850;
      margin: 0 0 6px 0;
      line-height: 1.4;
    }
    .footer-copyright {
      font-size: 11px;
      color: rgba(58, 42, 30, 0.4);
      margin: 0;
    }
  </style>
</head>
<body>
  <div class='wrapper'>
    <div class='container'>
      
      <!-- Brand Header -->
      <div class='header'>
        <img class='header-logo' src='cid:neko_logo' alt='Neko &amp; Kopi'>
        <h1 class='header-title'>Neko &amp; Kopi Colombo</h1>
      </div>

      <!-- Core Content -->
      <div class='content'>
        <p class='welcome'>
          Hello Café Manager,<br>
          A new enquiry has been submitted through the website contact form. The details of the sender are listed below:
        </p>

        <table class='meta-table'>
          <tr class='meta-row'>
            <td class='meta-label'>Name</td>
            <td class='meta-value'><strong>$name</strong></td>
          </tr>
          <tr class='meta-row'>
            <td class='meta-label'>Email</td>
            <td class='meta-value'><a href='mailto:$email' style='color:#72997C; text-decoration:none; font-weight:600;'>$email</a></td>
          </tr>
          <tr class='meta-row'>
            <td class='meta-label'>Subject</td>
            <td class='meta-value'>$subjectLabel</td>
          </tr>
        </table>

        <p class='meta-label' style='margin-bottom: 10px;'>Message Content</p>
        <div class='message-box'>
          $message
        </div>
      </div>

      <!-- Footer Info -->
      <div class='footer'>
        <p class='footer-text'>
          <strong>Neko &amp; Kopi Cat Café Colombo</strong><br>
          319/4, 05 Nawala Rd, Nawala, Colombo 00500, Sri Lanka
        </p>
        <p class='footer-copyright'>
          &copy; " . date('Y') . " Neko &amp; Kopi. All rights reserved. &middot; Automated Web Service
        </p>
      </div>

    </div>
  </div>
</body>
</html>
";

// 7. Deliver email using PHPMailer SMTP
$mail = new PHPMailer(true);

// Load local configurations safely
$configPath = __DIR__ . '/../config.php';
$config = file_exists($configPath) ? require $configPath : [];

$smtpHost   = $config['smtp_host'] ?? 'smtp.gmail.com';
$smtpUser   = $config['smtp_user'] ?? 'gallagevishwa@gmail.com';
$smtpPass   = $config['smtp_pass'] ?? 'ybilquylwxpfhuxv'; // Safe local fallback
$smtpPort   = $config['smtp_port'] ?? 587;
$smtpSecure = ($config['smtp_secure'] ?? 'tls') === 'ssl' ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
$recipient  = $config['recipient'] ?? 'gallagevishwa@gmail.com';

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = $smtpHost;
    $mail->SMTPAuth   = true;
    $mail->Username   = $smtpUser;
    $mail->Password   = $smtpPass; // App Password
    $mail->SMTPSecure = $smtpSecure;
    $mail->Port       = $smtpPort;

    // Recipients
    $mail->setFrom($smtpUser, 'Neko & Kopi Website');
    $mail->addAddress($recipient); // Send to recipient address
    $mail->addReplyTo($email, $name); // Reply to the sender

    // Embedded Logo Attachment
    $logoPath = __DIR__ . '/../assets/images/logo.png';
    if (file_exists($logoPath)) {
        $mail->addEmbeddedImage($logoPath, 'neko_logo', 'logo.png');
    }

    // Content
    $mail->isHTML(true);
    $mail->Subject = $emailSubject;
    $mail->Body    = $htmlContent;
    $mail->AltBody = strip_tags($message);

    $mail->send();

    echo json_encode([
        'status'  => 'success',
        'message' => 'Thank you! Our café team and residents have safely received your note. We will curl back to you within 24 hours.'
    ]);
} catch (Exception $e) {
    echo json_encode([
        'status'  => 'error',
        'message' => 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo
    ]);
}
exit;
