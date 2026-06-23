<?php
// Start session
session_start();

// Return JSON response
header('Content-Type: application/json');

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    http_response_code(401);
    echo json_encode([
        'success' => false,
        'message' => 'User not logged in'
    ]);
    exit;
}

// Get POST data
$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['product_id']) || !isset($data['quantity'])) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Missing required fields'
    ]);
    exit;
}

// Initialize cart in session if not exists
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add product to cart
$product_id = $data['product_id'];
$quantity = $data['quantity'];

// Check if product already exists in cart
$found = false;
foreach ($_SESSION['cart'] as &$item) {
    if ($item['product_id'] == $product_id) {
        $item['quantity'] += $quantity;
        $found = true;
        break;
    }
}

// If product not found, add new item
if (!$found) {
    $_SESSION['cart'][] = [
        'product_id' => $product_id,
        'name' => $data['name'] ?? 'Product',
        'price' => $data['price'] ?? 0,
        'quantity' => $quantity
    ];
}

echo json_encode([
    'success' => true,
    'message' => 'Product added to cart',
    'cartCount' => count($_SESSION['cart'])
]);
?>
