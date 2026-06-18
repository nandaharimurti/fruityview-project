<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FruityViews</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, sans-serif;
        }

        body{
            background:#f8f9fa;
        }

        nav{
            background:#28a745;
            color:white;
            padding:15px 50px;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        nav a{
            color:white;
            text-decoration:none;
            margin-left:15px;
            font-weight:bold;
        }

        .hero{
            text-align:center;
            padding:100px 20px;
        }

        .hero h1{
            font-size:48px;
            color:#28a745;
        }

        .hero p{
            margin-top:15px;
            font-size:18px;
            color:#555;
        }

        .btn{
            display:inline-block;
            margin-top:25px;
            padding:12px 25px;
            background:#28a745;
            color:white;
            text-decoration:none;
            border-radius:8px;
        }

        .features{
            display:flex;
            justify-content:center;
            gap:20px;
            padding:50px;
            flex-wrap:wrap;
        }

        .card{
            background:white;
            width:250px;
            padding:20px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
            text-align:center;
        }

        footer{
            background:#28a745;
            color:white;
            text-align:center;
            padding:15px;
            margin-top:50px;
        }
    </style>
</head>
<body>

<nav>
    <h2>🍎 FruityViews</h2>

    <div>
        <a href="../login/login.php">Login</a>
        <a href="../register/register.php">Register</a>
    </div>
</nav>

<section class="hero">
    <h1>Selamat Datang di FruityViews</h1>
    <p>Marketplace Buah Segar, Berkualitas, dan Terpercaya.</p>

    <a href="../catalog/index.php" class="btn">
        Lihat Katalog
    </a>
</section>

<section class="features">

    <div class="card">
        <h3>🍎 Buah Segar</h3>
        <p>Produk berkualitas langsung dari petani.</p>
    </div>

    <div class="card">
        <h3>🚚 Pengiriman Cepat</h3>
        <p>Pesanan dikirim dengan cepat dan aman.</p>
    </div>

    <div class="card">
        <h3>💳 Pembayaran Mudah</h3>
        <p>Mendukung berbagai metode pembayaran.</p>
    </div>

</section>

<footer>
    <p>© 2026 FruityViews Marketplace</p>
</footer>

</body>
</html>