<!DOCTYPE html>
<html>
<head>
    <title>Register - FruityViews</title>
</head>
<body>

<h2>Register</h2>

<form action="../../Controllers/AuthController.php" method="POST">
    <label>Nama</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email</label><br>
    <input type="email" name="email" required><br><br>

    <label>Password</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Register</button>
</form>

<p>Sudah punya akun? <a href="../login/login.php">Login</a></p>

</body>
</html>*