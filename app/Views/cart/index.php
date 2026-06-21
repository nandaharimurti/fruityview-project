<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
</head>
<body>

<h1>Keranjang Belanja</h1>

<p>Daftar buah yang dipilih akan muncul di sini.</p>

<a href="../checkout/index.php">
    <button>Checkout</button>
</a>

</body>
</html>