<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FruityView</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
  <style>
    *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

    body {
      font-family: 'Inter', sans-serif;
      min-height: 100vh;
      background: #0a0a0a;
      color: #fff;
      overflow-x: hidden;
    }

    /* NAVBAR */
    nav {
      position: fixed;
      top: 0; left: 0; right: 0;
      z-index: 100;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px 60px;
      background: rgba(10,10,10,0.6);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid rgba(255,255,255,0.06);
    }

    .nav-logo {
      font-family: 'Playfair Display', serif;
      font-size: 22px;
      font-weight: 900;
      background: linear-gradient(135deg, #6be85a, #b8f550);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      letter-spacing: -0.5px;
    }

    .nav-links {
      display: flex;
      gap: 36px;
      list-style: none;
    }

    .nav-links a {
      color: rgba(255,255,255,0.65);
      text-decoration: none;
      font-size: 14px;
      font-weight: 400;
      letter-spacing: 0.2px;
      transition: color 0.2s;
    }

    .nav-links a:hover { color: #fff; }

    .nav-cta {
      background: linear-gradient(135deg, #6be85a, #b8f550);
      color: #0a2200 !important;
      padding: 9px 22px;
      border-radius: 100px;
      font-weight: 600 !important;
      font-size: 13px !important;
    }

    /* HERO */
    .hero {
      min-height: 100vh;
      display: grid;
      grid-template-columns: 1fr 1fr;
      align-items: center;
      padding: 0 60px;
      padding-top: 80px;
      position: relative;
      overflow: hidden;
    }

    .hero::before {
      content: '';
      position: absolute;
      top: -200px; left: -200px;
      width: 600px; height: 600px;
      background: radial-gradient(circle, rgba(107,232,90,0.15) 0%, transparent 70%);
      pointer-events: none;
    }

    .hero::after {
      content: '';
      position: absolute;
      bottom: -150px; right: -100px;
      width: 500px; height: 500px;
      background: radial-gradient(circle, rgba(184,245,80,0.1) 0%, transparent 70%);
      pointer-events: none;
    }

    .hero-left {
      z-index: 2;
      max-width: 560px;
    }

    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(107,232,90,0.1);
      border: 1px solid rgba(107,232,90,0.25);
      color: #6be85a;
      font-size: 12px;
      font-weight: 500;
      padding: 7px 16px;
      border-radius: 100px;
      margin-bottom: 28px;
      letter-spacing: 0.5px;
      text-transform: uppercase;
    }

    .hero-badge span {
      width: 6px; height: 6px;
      background: #6be85a;
      border-radius: 50%;
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0%, 100% { opacity: 1; transform: scale(1); }
      50% { opacity: 0.5; transform: scale(0.8); }
    }

    .hero-title {
      font-family: 'Playfair Display', serif;
      font-size: 72px;
      font-weight: 900;
      line-height: 1.0;
      margin-bottom: 24px;
      letter-spacing: -2px;
    }

    .hero-title .green {
      background: linear-gradient(135deg, #6be85a, #b8f550);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .hero-desc {
      font-size: 16px;
      color: rgba(255,255,255,0.55);
      line-height: 1.8;
      margin-bottom: 44px;
      max-width: 440px;
      font-weight: 300;
    }

    .hero-actions {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .btn-primary {
      display: inline-block;
      background: linear-gradient(135deg, #6be85a, #b8f550);
      color: #0a2200;
      font-weight: 700;
      font-size: 14px;
      padding: 15px 36px;
      border-radius: 100px;
      text-decoration: none;
      letter-spacing: 0.5px;
      text-transform: uppercase;
      transition: transform 0.2s, box-shadow 0.2s;
      box-shadow: 0 8px 32px rgba(107,232,90,0.25);
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 12px 40px rgba(107,232,90,0.35);
    }

    .btn-secondary {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      color: rgba(255,255,255,0.65);
      font-size: 14px;
      font-weight: 400;
      text-decoration: none;
      transition: color 0.2s;
    }

    .btn-secondary:hover { color: #fff; }

    .btn-secondary svg {
      width: 32px; height: 32px;
      border: 1px solid rgba(255,255,255,0.15);
      border-radius: 50%;
      padding: 8px;
      transition: border-color 0.2s;
    }

    .btn-secondary:hover svg { border-color: rgba(255,255,255,0.4); }

    /* STATS */
    .hero-stats {
      display: flex;
      gap: 40px;
      margin-top: 56px;
      padding-top: 40px;
      border-top: 1px solid rgba(255,255,255,0.08);
    }

    .stat-item {}

    .stat-num {
      font-family: 'Playfair Display', serif;
      font-size: 28px;
      font-weight: 700;
      color: #fff;
      line-height: 1;
    }

    .stat-label {
      font-size: 12px;
      color: rgba(255,255,255,0.4);
      margin-top: 4px;
      font-weight: 400;
    }

    /* HERO RIGHT - fruit visual */
    .hero-right {
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 2;
    }

    .fruit-circle {
      width: 480px;
      height: 480px;
      border-radius: 50%;
      background: linear-gradient(145deg, rgba(107,232,90,0.12), rgba(184,245,80,0.06));
      border: 1px solid rgba(107,232,90,0.15);
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    .fruit-circle::before {
      content: '';
      position: absolute;
      inset: 20px;
      border-radius: 50%;
      border: 1px dashed rgba(107,232,90,0.1);
    }

    .fruit-emoji {
      font-size: 120px;
      filter: drop-shadow(0 20px 40px rgba(107,232,90,0.3));
      animation: float 4s ease-in-out infinite;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-16px); }
    }

    .orbit-item {
      position: absolute;
      width: 64px; height: 64px;
      background: rgba(255,255,255,0.04);
      border: 1px solid rgba(255,255,255,0.08);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 28px;
    }

    .orbit-1 { top: 30px; right: 60px; }
    .orbit-2 { bottom: 60px; right: 20px; }
    .orbit-3 { bottom: 40px; left: 50px; }
    .orbit-4 { top: 60px; left: 30px; }

    /* FEATURES SECTION */
    .section {
      padding: 100px 60px;
    }

    .section-label {
      font-size: 11px;
      font-weight: 500;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: #6be85a;
      margin-bottom: 16px;
    }

    .section-title {
      font-family: 'Playfair Display', serif;
      font-size: 44px;
      font-weight: 700;
      line-height: 1.15;
      margin-bottom: 16px;
      letter-spacing: -1px;
    }

    .section-sub {
      color: rgba(255,255,255,0.45);
      font-size: 15px;
      line-height: 1.7;
      max-width: 480px;
      font-weight: 300;
    }

    .features-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      margin-top: 60px;
    }

    .feature-card {
      background: rgba(255,255,255,0.03);
      border: 1px solid rgba(255,255,255,0.07);
      border-radius: 20px;
      padding: 32px;
      transition: border-color 0.2s, background 0.2s;
    }

    .feature-card:hover {
      border-color: rgba(107,232,90,0.2);
      background: rgba(107,232,90,0.04);
    }

    .feature-icon {
      font-size: 36px;
      margin-bottom: 20px;
    }

    .feature-name {
      font-size: 17px;
      font-weight: 500;
      margin-bottom: 10px;
      color: #fff;
    }

    .feature-desc {
      font-size: 13px;
      color: rgba(255,255,255,0.45);
      line-height: 1.7;
      font-weight: 300;
    }

    /* FOOTER */
    footer {
      padding: 40px 60px;
      border-top: 1px solid rgba(255,255,255,0.06);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    footer p {
      font-size: 13px;
      color: rgba(255,255,255,0.3);
    }

    footer .footer-logo {
      font-family: 'Playfair Display', serif;
      font-size: 18px;
      font-weight: 700;
      background: linear-gradient(135deg, #6be85a, #b8f550);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
  </style>
</head>
<body>

  <nav>
    <div class="nav-logo">FruityView</div>
    <ul class="nav-links">
      <li><a href="#">Produk</a></li>
      <li><a href="#">Tentang</a></li>
      <li><a href="#">Blog</a></li>
     <a href="<?= base_url('register') ?>" class="nav-cta">Daftar Sekarang
</a>
    </ul>
  </nav>

  <section class="hero">
    <div class="hero-left">
      <div class="hero-badge">
        <span></span>
        Buah Segar Pilihan Terbaik
      </div>
      <h1 class="hero-title">
        Nikmati Buah<br>
        <span class="green">Berkualitas</span><br>
        Premium
      </h1>
      <p class="hero-desc">
        Fruit View menghadirkan pengalaman menikmati buah dalam tampilan yang lebih dari sekadar sajian biasa. Setiap buah dipilih dengan kualitas terbaik, disusun dengan komposisi warna dan bentuk yang segar dan memanjakan mata.
      </p>
      <div class="hero-actions">
        <a href="#" class="btn-primary">Halaman Belanja</a>
        <a href="register.html" class="btn-secondary">
          <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5">
            <circle cx="8" cy="8" r="7"/>
            <path d="M6 8l2 2 4-4" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          Daftar Gratis
        </a>
      </div>
      <div class="hero-stats">
        <div class="stat-item">
          <div class="stat-num">200+</div>
          <div class="stat-label">Jenis Buah</div>
        </div>
        <div class="stat-item">
          <div class="stat-num">50K+</div>
          <div class="stat-label">Pelanggan</div>
        </div>
        <div class="stat-item">
          <div class="stat-num">4.9★</div>
          <div class="stat-label">Rating</div>
        </div>
      </div>
    </div>

    <div class="hero-right">
      <div class="fruit-circle">
        <div class="fruit-emoji">🍉</div>
        <div class="orbit-item orbit-1">🍍</div>
        <div class="orbit-item orbit-2">🍇</div>
        <div class="orbit-item orbit-3">🥭</div>
        <div class="orbit-item orbit-4">🍓</div>
      </div>
    </div>
  </section>

  <section class="section">
    <p class="section-label">Mengapa FruityView</p>
    <h2 class="section-title">Lebih dari sekadar<br>toko buah biasa</h2>
    <p class="section-sub">Kami menghadirkan pengalaman berbelanja buah yang menyenangkan, segar, dan terpercaya langsung ke tangan Anda.</p>

    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-icon">🌿</div>
        <div class="feature-name">100% Segar & Organik</div>
        <div class="feature-desc">Setiap buah dipilih langsung dari kebun terbaik dan dijamin kesegaran hingga ke tangan Anda.</div>
      </div>
      <div class="feature-card">
        <div class="feature-icon">🚚</div>
        <div class="feature-name">Pengiriman Cepat</div>
        <div class="feature-desc">Pesan hari ini, terima besok. Sistem logistik kami memastikan buah tetap segar saat tiba.</div>
      </div>
      <div class="feature-card">
        <div class="feature-icon">⭐</div>
        <div class="feature-name">Kurasi Kualitas</div>
        <div class="feature-desc">Tim ahli kami mengkurasi setiap produk agar hanya yang terbaik yang sampai ke meja makan Anda.</div>
      </div>
    </div>
  </section>

  <footer>
    <div class="footer-logo">FruityView</div>
    <p>© 2025 FruityView. Semua hak dilindungi.</p>
    <p>Made with 🍉 for fruit lovers</p>
  </footer>

</body>
</html>
