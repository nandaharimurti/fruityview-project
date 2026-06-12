<?php
// register.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register — FruityView</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="register.css">
</head>
<body>

  <div class="blob blob-1"></div>
  <div class="blob blob-2"></div>
  <div class="blob blob-3"></div>

  <div class="register-wrapper">
    <div class="register-card">

      <div class="card-header">
        <div class="logo-mark">🍉</div>
        <h1 class="card-title">Buat Akun</h1>
        <p class="card-subtitle">Bergabung dengan FruityView hari ini</p>
      </div>

      <?php if (!empty($error)): ?>
        <div class="alert-error"><?= htmlspecialchars($error) ?></div>
      <?php endif; ?>

      <?php if (!empty($success)): ?>
        <div class="alert-success"><?= htmlspecialchars($success) ?></div>
      <?php endif; ?>

      <form class="form-grid" method="POST" action="register.php">
        <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" required>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Masukkan Email" required>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
        </div>

        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" id="alamat" name="alamat" placeholder="Masukkan Alamat" required>
        </div>

        <div class="form-group">
          <label for="ttl">Tempat, Tanggal Lahir</label>
          <input type="text" id="ttl" name="ttl" placeholder="Masukkan Tempat, Tanggal Lahir" required>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="telepon">No. Telepon</label>
            <input type="tel" id="telepon" name="telepon" placeholder="Masukkan nomer" required>
          </div>
          <div class="form-group">
            <label for="kodepos">Kode Pos</label>
            <input type="text" id="kodepos" name="kodepos" placeholder="Kode pos" required>
          </div>
        </div>

        <button type="submit" name="submit" class="btn-register">Register</button>
      </form>

      <p class="login-link">Sudah punya akun? <a href="login.php">Login</a></p>

    </div>
  </div>

</body>
</html>