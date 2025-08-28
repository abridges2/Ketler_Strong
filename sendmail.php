<?php
session_start();

// Retrieve and trim the form inputs and if the input is null assign empty string so validation checks do not pass.
$old = [
  'fname'   => clean($_POST['fname']   ?? ''),
  'lname'   => clean($_POST['lname']   ?? ''),
  'email'   => trim($_POST['email']    ?? ''),
  'reason'  => clean($_POST['reason']  ?? ''),
  'subject' => clean($_POST['subject'] ?? ''),
  'message' => trim($_POST['message']  ?? ''),
];
$_SESSION['old'] = $old;

// Pre-defined array to hold errors
$errors = [];

if ($old['fname'] === '' || $old['lname'] === '' || $old['email'] === '' || $old['subject'] === '' || $old['message'] === '') {
  $errors[] = 'All fields are required. Please fill out the form and try again.';
}

/* friendlier name validation: letters, spaces, hyphens, apostrophes, dots */
$NAME_RX = '/^[\p{L}\p{M}\'\-\.\s]+$/u';
if ($old['fname'] !== '' && !preg_match($NAME_RX, $old['fname'])) {
  $errors[] = 'First name looks invalid (letters, spaces, hyphens, apostrophes only).';
}
if ($old['lname'] !== '' && !preg_match($NAME_RX, $old['lname'])) {
  $errors[] = 'Last name looks invalid (letters, spaces, hyphens, apostrophes only).';
}

/* email: no spaces/newlines + FILTER_VALIDATE_EMAIL */
if (preg_match('/\s/', $old['email']) || preg_match('/[\r\n\x00-\x1F\x7F]/', $old['email'])) {
  $errors[] = 'Email contains invalid characters.';
} elseif (!filter_var($old['email'], FILTER_VALIDATE_EMAIL)) {
  $errors[] = 'Please enter a valid email address (e.g., name@example.com).';
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors[] = 'Please enter a valid email address (e.g., name@example.com).';
}

$allowedReasons = ['Partnership','Media','Speaking','Other'];
if (!in_array($old['reason'], $allowedReasons, true)) {
  $errors[] = 'Please select a reason for contacting.';
}

// Mailer set up
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'user@example.com';                     //SMTP username
    $mail->Password   = 'secret';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>