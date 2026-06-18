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
    <title>Checkout - FruityView</title>
</head>
<body>

<h1>Checkout</h1>

<form action="../../Controllers/CheckoutController.php" method="POST">

    <label>Nama Lengkap</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Alamat Pengiriman</label><br>
    <textarea name="alamat" required></textarea><br><br>

    <label>Metode Pembayaran</label><br>
    <select name="metode_pembayaran" required>
        <option value="">Pilih Metode</option>
        <option value="Transfer Bank">Transfer Bank</option>
        <option value="E-Wallet">E-Wallet</option>
        <option value="COD">COD</option>
    </select><br><br>

    <h3>Total Belanja: Rp 50.000</h3>

    <button type="submit">Bayar</button>

</form>

<br>
<a href="../cart/index.php">Kembali ke Cart</a>

</body>
</html>