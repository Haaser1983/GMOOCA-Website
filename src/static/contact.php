<?php
declare(strict_types=1);
require __DIR__ . '/private/forms.php';

require_post();
if (is_bot()) redirect('/contact/thanks/');   // pretend success, send nothing

$name    = header_safe(field('name', 100));
$email   = header_safe(field('email', 200));
$topic   = header_safe(field('topic', 60)) ?: 'General question';
$message = field('message', 5000);

if ($name === '' || $message === '') redirect('/contact/?error=missing');
if (!valid_email($email))           redirect('/contact/?error=email');

try {
    if (rate_limited('contact'))    redirect('/contact/?error=rate');
} catch (RuntimeException $e) {
    // storage unavailable: still deliver the message
}

$body = "New message from the gmooca.org contact form\n\n"
      . "Name:  $name\nEmail: $email\nTopic: $topic\n"
      . 'Sent:  ' . gmdate('Y-m-d H:i') . " UTC\n\n"
      . str_repeat('-', 40) . "\n\n$message\n";

if (!send_mail("[gmooca.org] $topic: $name", $body, $email)) redirect('/contact/?error=send');

redirect('/contact/thanks/');
