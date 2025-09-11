<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Allura&family=Tenor+Sans&display=swap" rel="stylesheet">
      <script defer src="script.js"></script>
  <title>Contact</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg py-3 sticky-top shadow-sm flex-column">
      <a class="navbar-brand animated-element fade-in-left" href="#">Ketler Strong</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end pe-2 pb-4" id="navbarNavAltMarkup">
          <div class="navbar-nav">
              <a class="nav-item nav-link pe-5 animated-element fade-in-right" href="#login.php">Log In <span class="sr-only"></span></a>
              <a class="nav-item nav-link pe-5 animated-element fade-in-right" href="contact.php">Contact <span class="sr-only"></span></a>
              <a class="nav-item nav-link pe-5 animated-element fade-in-right" href="#">Follow</a>
              <a class="nav-item nav-link pe-5 animated-element fade-in-right" href="https://nobad.store/">Shop</a>
          </div>
      </div>
  </nav>

  <div class="container rounded contact-container py-2 my-1">
`
    <form action="sendmail.php" method="POST" novalidate>
      <?php if (!empty($_SESSION['errors'])): ?>
        <div class="alert alert-danger">
          <ul class="mb-0">
            <?php foreach ($_SESSION['errors'] as $msg): ?>
              <li><?= htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php unset($_SESSION['errors']); ?>
      <?php endif; ?>

    <!-- Name Row -->
    <div class="row">
        <div class="col-md-6 mb-3">
          <label for="fname" class="form-label">First Name:</label>
          <input type="text" id="fname" name="fname" placeholder="John" required class="form-control">
        </div>
        <div class="col-md-6 mb-3">
          <label for="lname" class="form-label">Last Name:</label>
          <input type="text" id="lname" name="lname" placeholder="Doe" required class="form-control">
        </div>
      </div>

    <!-- Email -->
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="john.doe@example.com" required>
    </div>

    <fieldset class="mb-3">
      <legend class="col-form-label pt-0">Reason for contacting</legend>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="reason" id="reason-partnership" value="Partnership" required>
        <label class="form-check-label" for="reason-partnership">Partnership</label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="reason" id="reason-media" value="Media" required>
        <label class="form-check-label" for="reason-media">Media</label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="reason" id="reason-speaking" value="Speaking" required>
        <label class="form-check-label" for="reason-speaking">Speaking</label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="reason" id="reason-other" value="Other" required>
        <label class="form-check-label" for="reason-other">Other</label>
      </div>
    </fieldset>

    <div class="mb-3">
      <label for="subject" class="form-label">Subject</label>
      <input type="text" class="form-control" id="subject" name="subject" placeholder="e.g. collaboration with ____" required>
    </div>

    <div class="mb-4">
      <label for="message" class="form-label">Message</label>
      <textarea class="form-control" id="message" name="message" rows="4" placeholder="Body of the email sent to Reese's team." required></textarea>
    </div>

    <button type="submit" class="btn btn-primary contact-button">Send</button>
  </form>
</div>

</body>
</html>