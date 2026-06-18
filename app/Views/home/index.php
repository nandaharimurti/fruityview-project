<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Main Page - FruityViews</title>
</head>
<body>

<h1>Selamat Datang di FruityViews</h1>

<a href="../catalog/index.php">Katalog Produk</a>

<?php if(isset($_SESSION['user_id'])): ?>
    | <a href="../cart/index.php">Keranjang</a>
    | <a href="../../Controllers/LogoutController.php">Logout</a>
<?php else: ?>
    | <a href="../login/login.php">Login</a>
    | <a href="../register/register.php">Register</a>
<?php endif; ?>

</body>
</html>