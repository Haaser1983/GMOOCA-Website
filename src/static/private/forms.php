<?php
/**
 * Shared helpers for contact.php and notify.php.
 * This folder is blocked from the web by private/.htaccess.
 */
declare(strict_types=1);

const SITE_EMAIL   = 'info@gmooca.org';      // where messages are delivered
const FROM_EMAIL   = 'no-reply@gmooca.org';  // must be a mailbox/domain on this host
const RATE_LIMIT   = 5;                      // submissions allowed...
const RATE_WINDOW  = 600;                    // ...per IP in this many seconds

/** Writable storage outside the web root when possible, else private/data. */
function storage_dir(): string {
    $candidates = [
        dirname($_SERVER['DOCUMENT_ROOT'] ?? __DIR__ . '/..') . '/gmooca-data',
        __DIR__ . '/data',
    ];
    foreach ($candidates as $dir) {
        if (is_dir($dir) || @mkdir($dir, 0750, true)) {
            if (is_writable($dir)) return $dir;
        }
    }
    throw new RuntimeException('No writable storage directory');
}

function redirect(string $path): never {
    header('Location: ' . $path, true, 303);
    exit;
}

function require_post(): void {
    if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
        header('Allow: POST', true, 405);
        exit('Method not allowed');
    }
}

/** Bots fill hidden fields; humans don't. */
function is_bot(): bool {
    return trim((string)($_POST['website'] ?? '')) !== '';
}

function field(string $name, int $max): string {
    $v = trim((string)($_POST[$name] ?? ''));
    return mb_substr($v, 0, $max);
}

/** Strip anything that could inject extra mail headers. */
function header_safe(string $s): string {
    return trim(preg_replace('/[\r\n\t]+/', ' ', $s) ?? '');
}

function valid_email(string $email): bool {
    return $email !== '' && strlen($email) <= 200 && filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/** Simple file-based limit per IP (IP is stored hashed). */
function rate_limited(string $bucket): bool {
    $file = storage_dir() . "/ratelimit-$bucket.json";
    $key  = hash('sha256', ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . $bucket);
    $now  = time();

    $fh = fopen($file, 'c+');
    if (!$fh) return false;
    flock($fh, LOCK_EX);
    $data = json_decode(stream_get_contents($fh) ?: '{}', true) ?: [];

    foreach ($data as $k => $times) {           // drop expired entries
        $data[$k] = array_values(array_filter($times, fn($t) => $t > $now - RATE_WINDOW));
        if (!$data[$k]) unset($data[$k]);
    }
    $limited = count($data[$key] ?? []) >= RATE_LIMIT;
    if (!$limited) $data[$key][] = $now;

    ftruncate($fh, 0);
    rewind($fh);
    fwrite($fh, json_encode($data));
    flock($fh, LOCK_UN);
    fclose($fh);
    return $limited;
}

function send_mail(string $subject, string $body, ?string $replyTo = null): bool {
    $headers = [
        'From: GMOOCA website <' . FROM_EMAIL . '>',
        'Content-Type: text/plain; charset=UTF-8',
        'X-Mailer: gmooca.org',
    ];
    if ($replyTo) $headers[] = 'Reply-To: ' . $replyTo;
    $subject = '=?UTF-8?B?' . base64_encode(header_safe($subject)) . '?=';
    return mail(SITE_EMAIL, $subject, $body, implode("\r\n", $headers), '-f' . FROM_EMAIL);
}

/** Only allow redirects back to a path on this site. */
function safe_return(string $path, string $fallback = '/'): string {
    return (preg_match('#^/(?!/)[A-Za-z0-9/_\-]*$#', $path) === 1) ? $path : $fallback;
}
