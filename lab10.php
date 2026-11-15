<?php
session_start();
function e(string $value): string { return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }
if (isset($_GET['logout'])) {
    if (isset($_SESSION['start_time'])) {
        $duration = max(0, time() - (int)$_SESSION['start_time']);
        $name = (string)($_SESSION['name'] ?? 'visitor');
        $_SESSION = [];
        if (ini_get('session.use_cookies')) { $params = session_get_cookie_params(); setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']); }
        session_destroy();
    } else { $duration = 0; $name = 'visitor'; }
    $minutes = intdiv($duration, 60); $seconds = $duration % 60;
    ?><!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Lab 10 — Logged Out</title><link rel="stylesheet" href="assets/style.css"></head><body><main class="container"><nav class="page-nav"><a href="index.html">← All labs</a></nav><section class="panel"><p class="eyebrow">LAB 10 · LOGOUT</p><h1>Thank you, <?= e($name) ?>!</h1><p>Your session lasted <strong><?= $minutes ?> minute(s) and <?= $seconds ?> second(s)</strong>.</p><a class="button" href="lab10.php">Start again</a></section></main></body></html><?php exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim((string)($_POST['name'] ?? ''));
    if ($name !== '') { session_regenerate_id(true); $_SESSION['name'] = $name; $_SESSION['start_time'] = time(); }
}
?><!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Lab 10 — Session Demo</title><link rel="stylesheet" href="assets/style.css"></head><body><main class="container"><nav class="page-nav"><a href="index.html">← All labs</a></nav><section class="panel"><p class="eyebrow">LAB 10 · PHP SESSIONS</p><?php if (isset($_SESSION['name'], $_SESSION['start_time'])): ?><p style="float:right;text-align:right"><strong>Session started</strong><br><?= date('H:i:s', (int)$_SESSION['start_time']) ?></p><h1>Hello, <?= e((string)$_SESSION['name']) ?>!</h1><p>Your name and start time are stored in a PHP session.</p><a class="button" href="?logout=1">Log out</a><?php else: ?><h1>Welcome</h1><p>Enter your name to start a session.</p><form method="post"><label class="field">Name<input name="name" required maxlength="100" autocomplete="name"></label><button type="submit">Start session</button></form><?php endif; ?></section></main></body></html>
