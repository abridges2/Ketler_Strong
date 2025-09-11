<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: contact.php', true, 303);
  exit;
}

/* ===== collect ===== */
$fname   = trim($_POST['fname']   ?? '');
$lname   = trim($_POST['lname']   ?? '');
$email   = str_replace(["\r","\n"," "], '', trim($_POST['email'] ?? '')); // prepare for validation
$reason  = trim($_POST['reason']  ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = rtrim((string)($_POST['message'] ?? ''));

/* keep for repopulation on error */
$_SESSION['old'] = [
  'fname'   => $fname,
  'lname'   => $lname,
  'email'   => $email,
  'reason'  => $reason,
  'subject' => $subject,
  'message' => $message,
];

/* ===== validate ===== */
$errors = [];

/* required */
if ($fname === '' || $lname === '' || $email === '' || $subject === '' || $message === '') {
  $errors[] = 'All fields are required. Please fill out the form and try again.';
}

/* friendly name check */
$NAME_RX = '/^[\p{L}\p{M}\'\-\.\s]+$/u';
if ($fname !== '' && !preg_match($NAME_RX, $fname)) {
  $errors[] = 'First name looks invalid (letters, spaces, hyphens, apostrophes only).';
}
if ($lname !== '' && !preg_match($NAME_RX, $lname)) {
  $errors[] = 'Last name looks invalid (letters, spaces, hyphens, apostrophes only).';
}

/* email format (after cleanup) */
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors[] = 'Please enter a valid email address (e.g., name@example.com).';
}

/* reason whitelist */
$allowedReasons = ['Partnership','Media','Speaking','Other'];
if (!in_array($reason, $allowedReasons, true)) {
  $errors[] = 'Please select a reason for contacting.';
}

/* back to form if any errors */
if (!empty($errors)) {
  $_SESSION['errors'] = $errors;
  header('Location: contact.php', true, 303);
  exit;
}

/* ===== send email via PHPMailer (.env-driven) ===== */
require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use Dotenv\Dotenv;

/* load .env (same folder as this file) */
if (file_exists(__DIR__.'/.env')) {
  Dotenv::createImmutable(__DIR__)->load();
}

/* env vars (Mailtrap Sandbox in your .env) */
$HOST      = $_ENV['SMTP_HOST']         ?? 'sandbox.smtp.mailtrap.io';
$PORT      = (int)($_ENV['SMTP_PORT']   ?? 587);
$USER      = $_ENV['SMTP_USERNAME']     ?? '';
$PASS      = $_ENV['SMTP_PASSWORD']     ?? '';
$FROM      = $_ENV['SMTP_FROM']         ?? $USER;
$FROM_NAME = $_ENV['SMTP_FROM_NAME']    ?? 'Ketler Strong Website';
$TO        = $_ENV['SMTP_TO']           ?? 'anything@yourtest.test';

/* header-safe values */
$replyToName = str_replace(["\r","\n"], ' ', trim("$fname $lname"));
$subjectLine = str_replace(["\r","\n"], ' ', $subject);

/* build bodies (escape user text for HTML) */
$htmlBody  = '<h2>New contact form submission</h2>';
$htmlBody .= '<p><strong>Name:</strong> '.htmlspecialchars($replyToName, ENT_QUOTES,'UTF-8').'</p>';
$htmlBody .= '<p><strong>Email:</strong> '.htmlspecialchars($email, ENT_QUOTES,'UTF-8').'</p>';
$htmlBody .= '<p><strong>Reason:</strong> '.htmlspecialchars($reason, ENT_QUOTES,'UTF-8').'</p>';
$htmlBody .= '<p><strong>Subject:</strong> '.htmlspecialchars($subject, ENT_QUOTES,'UTF-8').'</p>';
$htmlBody .= '<hr><p><strong>Message:</strong><br>'.nl2br(htmlspecialchars($message, ENT_QUOTES,'UTF-8')).'</p>';

$textBody =
  "New contact form submission\n\n".
  "Name: $replyToName\n".
  "Email: $email\n".
  "Reason: $reason\n".
  "Subject: $subject\n\n".
  $message;

try {
  $mail = new PHPMailer(true);

  /* transport */
  $mail->isSMTP();
  $mail->Host       = $HOST;
  $mail->Port       = $PORT;
  $mail->SMTPAuth   = true;
  $mail->Username   = $USER;
  $mail->Password   = $PASS;
  $mail->SMTPSecure = ($PORT === 465)
    ? PHPMailer::ENCRYPTION_SMTPS
    : PHPMailer::ENCRYPTION_STARTTLS;
  $mail->CharSet    = 'UTF-8';

  /* envelope & headers */
  $mail->setFrom($FROM, $FROM_NAME);
  $mail->addAddress($TO);
  $mail->addReplyTo($email, $replyToName);

  /* content */
  $mail->isHTML(true);
  $mail->Subject = '['.$reason.'] '.$subjectLine;
  $mail->Body    = $htmlBody;
  $mail->AltBody = $textBody;

  $mail->send();

  unset($_SESSION['old']);
  $_SESSION['flash_success'] = 'Thanks! Your message has been sent.';
  header('Location: contact.php', true, 303);
  exit;

} catch (Exception $e) {
  $_SESSION['flash_error'] = 'Email failed to send. ('.$mail->ErrorInfo.')';
  header('Location: contact.php', true, 303);
  exit;
}
