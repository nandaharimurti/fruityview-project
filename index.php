<?php
// Load bootstrap resources if present (keeps firebase available)
if (file_exists(__DIR__ . '/firebase/firebase.php')) {
    require __DIR__ . '/firebase/firebase.php';
}

// Serve the home view as the site root
require __DIR__ . '/app/Views/home/index.php';