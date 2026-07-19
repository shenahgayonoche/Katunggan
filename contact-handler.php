<?php
// Simple contact form handler
// Receives POST data from contact.php and sends it via email (and stores optional log).

declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  header('Content-Type: application/json; charset=utf-8');
  echo json_encode(['success' => false, 'message' => 'Method not allowed']);
  exit;
}

header('Content-Type: application/json; charset=utf-8');

$name = trim((string)($_POST['name'] ?? ''));
$email = trim((string)($_POST['email'] ?? ''));
$phone = trim((string)($_POST['phone'] ?? ''));
$inquiry = trim((string)($_POST['inquiry'] ?? ''));
$message = trim((string)($_POST['message'] ?? ''));

if ($name === '' || $email === '' || $message === '') {
  echo json_encode(['success' => false, 'message' => 'Please complete required fields (Name, Email, Message).']);
  exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo json_encode(['success' => false, 'message' => 'Please provide a valid email address.']);
  exit;
}

$to = 'shenah.gayonoche0403@gmail.com';
$from = $email;

$cleanSubject = $inquiry !== '' ? $inquiry : 'New message from Katunggan Cove Resort website';

$inquiryLine = $inquiry !== '' ? $inquiry : '(not provided)';

$bodyLines = [
  'You have received a new contact form submission from katungganCoveResort website.',
  '',
  'Name: ' . $name,
  'Email: ' . $email,
  'Phone: ' . ($phone !== '' ? $phone : '(not provided)'),
  'Inquiry Type: ' . $inquiryLine,
  '',
  'Message:',
  $message,
  '',
  '---',
  'Sent from: ' . ($_SERVER['HTTP_HOST'] ?? 'KatungganCove')
];

$body = implode("\n", $bodyLines);

// Prefer SMTP helper to avoid unreliable PHP mail() on some XAMPP setups
$ok = false;

$script = __DIR__ . DIRECTORY_SEPARATOR . 'send_application_email.py';
if (is_file($script)) {
  $cmd = sprintf(
    '%s %s %s %s',
    'python',
    escapeshellarg($script),
    escapeshellarg($to),
    escapeshellarg($cleanSubject)
  );

  $descriptorspec = [
    0 => ['pipe', 'r'],
    1 => ['pipe', 'w'],
    2 => ['pipe', 'w'],
  ];

  $process = @proc_open($cmd, $descriptorspec, $pipes);

  if (is_resource($process)) {
    // Write message body to STDIN of the python script
    fwrite($pipes[0], $body);
    fclose($pipes[0]);

    $stdout = stream_get_contents($pipes[1]);
    fclose($pipes[1]);

    $stderr = stream_get_contents($pipes[2]);
    fclose($pipes[2]);

    $exitCode = proc_close($process);

    if (trim((string)$stdout) === 'SUCCESS' && $exitCode === 0) {
      $ok = true;
    } else {
      $ok = false;
    }

    if (!$ok) {
      $logDir = __DIR__ . DIRECTORY_SEPARATOR . 'logs';
      if (!is_dir($logDir)) {
        @mkdir($logDir, 0755, true);
      }

      $logFile = $logDir . DIRECTORY_SEPARATOR . 'contact-mail-fail.log';
      @file_put_contents(
        $logFile,
        date('c') . "\n--- PYTHON SMTP FAILED ---\n" . ($stderr ?: $stdout) . "\n\n",
        FILE_APPEND
      );
    }
  }
}

// Fallback to PHP mail() if python helper isn't available
if (!$ok) {
  $headers = [
    'MIME-Version: 1.0',
    'Content-type: text/plain; charset=utf-8',
    'From: ' . $name . ' <' . $from . '>'
  ];

  $ok = @mail($to, $cleanSubject, $body, implode("\r\n", $headers));

  if (!$ok) {
    $logDir = __DIR__ . DIRECTORY_SEPARATOR . 'logs';
    if (!is_dir($logDir)) {
      @mkdir($logDir, 0755, true);
    }
    $logFile = $logDir . DIRECTORY_SEPARATOR . 'contact-mail-fail.log';
    @file_put_contents($logFile, date('c') . "\n" . $body . "\n\n", FILE_APPEND);
  }
}

if ($ok) {
  echo json_encode(['success' => true, 'message' => 'Message sent successfully. Thank you!']);
} else {
  echo json_encode(['success' => false, 'message' => 'Unable to send your message right now. Please try again later.']);
}

