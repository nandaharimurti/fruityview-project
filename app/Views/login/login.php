<!DOCTYPE html>
<html>
<head>
    <title>Login - FruityViews</title>
</head>
<body>

<h2>Login</h2>

<form action="../../Controllers/AuthController.php" method="POST">
    
    <input type="hidden" name="action" value="login">

    <label>Email</label><br>
    <input type="email" name="email" required><br><br>

    <label>Password</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Login</button>
</form>

<p>Belum punya akun? <a href="../register/register.php">Register</a></p>

</body>
</html>