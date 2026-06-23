<?php
// Start session to check if user is logged in
session_start();

// Return JSON response
header('Content-Type: application/json');

$isLoggedIn = isset($_SESSION['user_id']);

echo json_encode([
    'isLoggedIn' => $isLoggedIn,
    'user' => $isLoggedIn ? [
        'id' => $_SESSION['user_id'],
        'name' => $_SESSION['name'] ?? '',
        'email' => $_SESSION['email'] ?? ''
    ] : null
]);
?>
