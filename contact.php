<?php
// Basic secure contact form handler (expand with PHPMailer for production)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = filter_input(INPUT_POST, 'name',    FILTER_SANITIZE_STRING);
    $email   = filter_input(INPUT_POST, 'email',   FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    if ($name && $email && $message && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Replace with real mail logic (PHPMailer recommended for security)
        // mail('admin@gmooca.org', 'GMOOCA Contact Form', $message, "From: $email\r\nReply-To: $email");
        echo '<div class="alert alert-success mt-3">Thank you, ' . htmlspecialchars($name) . '! Your message has been sent.</div>';
    } else {
        echo '<div class="alert alert-danger mt-3">Please fill all fields with valid information.</div>';
    }
}
?>

<!-- The form is in contact.html – this file only processes POST -->