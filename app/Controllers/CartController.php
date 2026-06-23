<?php
session_start();

require_once __DIR__ . '/../Models/CartModel.php';

$action = $_POST['action'] ?? null;
$cartModel = new CartModel();

if ($action === 'clear') {
    $cartModel->clearCart();
    header('Location: ../Views/cart/index.php');
    exit;
}

header('Location: ../Views/cart/index.php');
exit;