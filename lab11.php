<?php
$now = new DateTimeImmutable('now');
$days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
$day = $days[(int)$now->format('w')];
?><!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Lab 11 — Date and Time</title><link rel="stylesheet" href="assets/style.css"></head><body><main class="container"><nav class="page-nav"><a href="index.html">← All labs</a></nav><section class="panel"><p class="eyebrow">LAB 11 · PHP DATE/TIME</p><h1>Current Server Date and Time</h1><p><strong>Date:</strong> <?= htmlspecialchars($now->format('F j, Y'), ENT_QUOTES, 'UTF-8') ?></p><p><strong>Time:</strong> <?= htmlspecialchars($now->format('h:i:s A'), ENT_QUOTES, 'UTF-8') ?></p><p><strong>Day:</strong> <?= htmlspecialchars($day, ENT_QUOTES, 'UTF-8') ?></p><small>Time zone: <?= htmlspecialchars($now->getTimezone()->getName(), ENT_QUOTES, 'UTF-8') ?></small></section></main></body></html>
