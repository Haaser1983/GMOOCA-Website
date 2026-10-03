<?php
declare(strict_types=1);
require __DIR__ . '/private/forms.php';

require_post();
$return = safe_return((string)($_POST['return'] ?? '/'), '/');
if (is_bot()) redirect('/notify/thanks/');

$email = strtolower(header_safe(field('email', 200)));
if (!valid_email($email)) redirect($return . '?notify=email#notify');

try {
    if (rate_limited('notify')) redirect($return . '?notify=rate#notify');

    $file = storage_dir() . '/forum-launch-list.csv';
    $fh = fopen($file, 'c+');
    flock($fh, LOCK_EX);
    $exists = false;
    while (($row = fgetcsv($fh, escape: '\\')) !== false) {
        if (($row[0] ?? '') === $email) { $exists = true; break; }
    }
    if (!$exists) {
        fseek($fh, 0, SEEK_END);
        fputcsv($fh, [$email, gmdate('c')], escape: '\\');
    }
    flock($fh, LOCK_UN);
    fclose($fh);
} catch (Throwable $e) {
    redirect($return . '?notify=error#notify');
}

if (!$exists) {
    send_mail('[gmooca.org] New forum launch sign-up', "New sign-up for the forum launch list:\n\n$email\n", null);
}
redirect('/notify/thanks/');
