<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Checkout | FruityView - Segar dari Kebun</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700;800&family=Work+Sans:wght@400;500&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100..900&family=Work+Sans:wght@100..900&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-primary": "#ffffff",
                    "tertiary-fixed-dim": "#e9c400",
                    "surface-container-highest": "#e3e3de",
                    "surface-tint": "#914c00",
                    "inverse-primary": "#ffb77f",
                    "on-tertiary-fixed-variant": "#544600",
                    "outline-variant": "#ddc1ae",
                    "primary-container": "#ff8a00",
                    "surface-container-high": "#e8e8e3",
                    "tertiary": "#705d00",
                    "surface-bright": "#fafaf4",
                    "on-secondary-fixed-variant": "#005313",
                    "inverse-surface": "#2f312e",
                    "on-error": "#ffffff",
                    "on-primary-fixed": "#2f1500",
                    "on-surface": "#1a1c19",
                    "surface-container-low": "#f4f4ee",
                    "tertiary-fixed": "#ffe170",
                    "background": "#fafaf4",
                    "surface-container-lowest": "#ffffff",
                    "error-container": "#ffdad6",
                    "on-secondary-container": "#00731e",
                    "on-background": "#1a1c19",
                    "on-primary-container": "#613100",
                    "on-error-container": "#93000a",
                    "surface-dim": "#dadad5",
                    "primary": "#914c00",
                    "error": "#ba1a1a",
                    "tertiary-container": "#c7a600",
                    "on-tertiary-fixed": "#221b00",
                    "surface-variant": "#e3e3de",
                    "surface": "#fafaf4",
                    "outline": "#8a7362",
                    "on-surface-variant": "#564334",
                    "secondary-fixed-dim": "#78dc77",
                    "secondary": "#006e1c",
                    "on-tertiary-container": "#4a3d00",
                    "on-tertiary": "#ffffff",
                    "primary-fixed-dim": "#ffb77f",
                    "on-secondary": "#ffffff",
                    "secondary-container": "#91f78e",
                    "primary-fixed": "#ffdcc4",
                    "secondary-fixed": "#94f990",
                    "surface-container": "#eeeee9",
                    "on-primary-fixed-variant": "#6f3900",
                    "on-secondary-fixed": "#002204",
                    "inverse-on-surface": "#f1f1ec"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "margin-mobile": "20px",
                    "unit": "8px",
                    "container-max": "1280px",
                    "margin-desktop": "64px",
                    "gutter": "24px"
            },
            "fontFamily": {
                    "label-bold": ["Plus Jakarta Sans"],
                    "display-lg": ["Plus Jakarta Sans"],
                    "body-md": ["Work Sans"],
                    "headline-md": ["Plus Jakarta Sans"],
                    "display-lg-mobile": ["Plus Jakarta Sans"],
                    "headline-sm": ["Plus Jakarta Sans"],
                    "body-lg": ["Work Sans"]
            },
            "fontSize": {
                    "label-bold": ["14px", {"lineHeight": "20px", "fontWeight": "700"}],
                    "display-lg": ["56px", {"lineHeight": "64px", "letterSpacing": "-0.02em", "fontWeight": "800"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "headline-md": ["32px", {"lineHeight": "40px", "fontWeight": "700"}],
                    "display-lg-mobile": ["40px", {"lineHeight": "48px", "letterSpacing": "-0.01em", "fontWeight": "800"}],
                    "headline-sm": ["24px", {"lineHeight": "32px", "fontWeight": "700"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}]
            }
          },
        },
      }
    </script>
<link href="../../public/assets/css/checkout.css" rel="stylesheet"/>
</head>
<body class="bg-background text-on-surface font-body-md min-h-screen flex flex-col">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-surface/80 dark:bg-surface-dim/80 backdrop-blur-md shadow-sm">
<div class="flex justify-between items-center px-margin-desktop py-4 max-w-container-max mx-auto">
<a class="font-headline-sm text-headline-sm font-black text-primary dark:text-primary-fixed" href="#">FruityView</a>
<div class="hidden md:flex items-center flex-1 max-w-md mx-8">
<div class="relative w-full">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-surface-container-low rounded-full border-none text-body-md focus:ring-2 focus:ring-primary-container" placeholder="Cari buah segar..." type="text"/>
</div>
</div>
<div class="flex items-center gap-6">
<div class="relative cursor-pointer hover:text-primary transition-colors">
<span class="material-symbols-outlined text-2xl">shopping_cart</span>
<span class="absolute -top-2 -right-2 bg-primary-container text-on-primary-container text-[10px] font-bold w-5 h-5 flex items-center justify-center rounded-full">2</span>
</div>
<div class="cursor-pointer hover:text-primary transition-colors">
<span class="material-symbols-outlined text-2xl">account_circle</span>
</div>
</div>
</div>
</nav>
<main class="flex-grow pt-24 pb-20 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto w-full">
<!-- Breadcrumbs -->
<nav class="flex items-center gap-2 mb-8 text-on-surface-variant font-label-bold text-label-bold">
<a class="hover:text-primary transition-colors" href="#">Home</a>
<span class="material-symbols-outlined text-sm">chevron_right</span>
<a class="hover:text-primary transition-colors" href="#">Cart</a>
<span class="material-symbols-outlined text-sm text-primary">chevron_right</span>
<span class="text-primary">Checkout</span>
</nav>
<h1 class="font-headline-md text-headline-md mb-10 text-on-surface">Penyelesaian Pesanan</h1>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
<!-- Left Column: Shipping & Payment -->
<div class="lg:col-span-7 space-y-8">
<!-- Section: Informasi Pengiriman -->
<section class="bg-surface-container-lowest p-8 rounded-xl organic-shadow border border-surface-variant/50">
<div class="flex items-center gap-3 mb-6">
<span class="material-symbols-outlined text-primary text-2xl">local_shipping</span>
<h2 class="font-headline-sm text-headline-sm">Informasi Pengiriman</h2>
</div>
<div class="space-y-5">
<div class="grid grid-cols-1 gap-4">
<div>
<label class="block font-label-bold text-label-bold mb-2 text-on-surface-variant">Nama Lengkap</label>
<input class="w-full p-4 rounded-lg bg-surface-container-low border border-outline-variant transition-all" placeholder="Contoh: Budi Santoso" type="text"/>
</div>
<div>
<label class="block font-label-bold text-label-bold mb-2 text-on-surface-variant">Alamat Lengkap</label>
<textarea class="w-full p-4 rounded-lg bg-surface-container-low border border-outline-variant transition-all" placeholder="Nama jalan, nomor rumah, RT/RW" rows="3"></textarea>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div>
<label class="block font-label-bold text-label-bold mb-2 text-on-surface-variant">Kota / Kabupaten</label>
<input class="w-full p-4 rounded-lg bg-surface-container-low border border-outline-variant transition-all" placeholder="Contoh: Jakarta Selatan" type="text"/>
</div>
<div>
<label class="block font-label-bold text-label-bold mb-2 text-on-surface-variant">Nomor Telepon</label>
<input class="w-full p-4 rounded-lg bg-surface-container-low border border-outline-variant transition-all" placeholder="0812xxxxxxx" type="tel"/>
</div>
</div>
</div>
</div>
</section>
<!-- Section: Metode Pengiriman -->
<section class="bg-surface-container-lowest p-8 rounded-xl organic-shadow border border-surface-variant/50">
<div class="flex items-center gap-3 mb-6">
<span class="material-symbols-outlined text-primary text-2xl">speed</span>
<h2 class="font-headline-sm text-headline-sm">Metode Pengiriman</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<label class="relative flex items-center p-4 border-2 border-primary-container bg-primary-fixed/20 rounded-xl cursor-pointer group">
<input checked="" class="hidden" name="shipping" type="radio"/>
<div class="flex-1">
<p class="font-label-bold text-label-bold text-on-primary-fixed">Reguler</p>
<p class="text-body-md text-on-surface-variant">2-3 Hari Kerja</p>
</div>
<span class="font-label-bold text-primary">Rp 15.000</span>
<span class="material-symbols-outlined text-primary ml-3" style="font-variation-settings: 'FILL' 1;">check_circle</span>
</label>
<label class="relative flex items-center p-4 border-2 border-outline-variant hover:border-primary-container/50 rounded-xl cursor-pointer group transition-all">
<input class="hidden" name="shipping" type="radio"/>
<div class="flex-1">
<p class="font-label-bold text-label-bold">Express</p>
<p class="text-body-md text-on-surface-variant">1 Hari Kerja (Sameday)</p>
</div>
<span class="font-label-bold">Rp 35.000</span>
<span class="material-symbols-outlined text-outline-variant ml-3 group-hover:text-primary-container">radio_button_unchecked</span>
</label>
</div>
</section>
<!-- Section: Metode Pembayaran -->
<section class="bg-surface-container-lowest p-8 rounded-xl organic-shadow border border-surface-variant/50">
<div class="flex items-center gap-3 mb-6">
<span class="material-symbols-outlined text-primary text-2xl">payments</span>
<h2 class="font-headline-sm text-headline-sm">Metode Pembayaran</h2>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
<div class="flex flex-col items-center justify-center p-4 border border-outline-variant rounded-xl hover:border-primary transition-all cursor-pointer bg-white group">
<div class="h-8 w-12 mb-2 flex items-center justify-center">
<span class="material-symbols-outlined text-3xl text-blue-800">credit_card</span>
</div>
<span class="font-label-bold text-xs uppercase tracking-wider">Visa</span>
</div>
<div class="flex flex-col items-center justify-center p-4 border border-primary bg-primary/5 rounded-xl transition-all cursor-pointer group">
<div class="h-8 w-12 mb-2 flex items-center justify-center">
<span class="material-symbols-outlined text-3xl text-[#00aade]">account_balance_wallet</span>
</div>
<span class="font-label-bold text-xs uppercase tracking-wider">GoPay</span>
</div>
<div class="flex flex-col items-center justify-center p-4 border border-outline-variant rounded-xl hover:border-primary transition-all cursor-pointer bg-white group">
<div class="h-8 w-12 mb-2 flex items-center justify-center">
<span class="material-symbols-outlined text-3xl text-[#4d2a86]">wallet</span>
</div>
<span class="font-label-bold text-xs uppercase tracking-wider">OVO</span>
</div>
<div class="flex flex-col items-center justify-center p-4 border border-outline-variant rounded-xl hover:border-primary transition-all cursor-pointer bg-white group">
<div class="h-8 w-12 mb-2 flex items-center justify-center">
<span class="material-symbols-outlined text-3xl text-orange-600">account_balance</span>
</div>
<span class="font-label-bold text-xs uppercase tracking-wider">BNI</span>
</div>
</div>
</section>
</div>
<!-- Right Column: Order Summary -->
<aside class="lg:col-span-5 sticky top-24">
<div class="bg-surface-container-lowest p-8 rounded-2xl organic-shadow border border-surface-variant/50">
<h2 class="font-headline-sm text-headline-sm mb-6 text-on-surface">Ringkasan Pesanan</h2>
<!-- Item List -->
<div class="space-y-4 mb-8" id="order-items">
<?php
    require_once __DIR__ . '/../../Models/CartModel.php';
    $cartModel = new CartModel();
    // Sumber cart checkout: utamakan session cart dari add-to-cart API.
    // Fallback ke sessionStorage/route data yang disiapkan saat klik checkout dari halaman cart.
    $cart = $cartModel->getCart();

    // cart.js menyimpan ke sessionStorage, jadi kita baca dari sessionStorage via script (di bawah)
    // atau alternatif: kalau server--side sudah dipush ke session.
    if (empty($cart) && isset($_SESSION['fv_checkout_cart'])) {
        $cart = $_SESSION['fv_checkout_cart'];
    }




    // Cart format: array of items, try to support a few common structures.
    $subtotal = 0;
    if (!empty($cart) && is_array($cart)) {
        foreach ($cart as $key => $item) {
            // Samakan field dengan api/add-to-cart.php: product_id, name, price, quantity
            $name = $item['name'] ?? ($item['product_name'] ?? ('Item ' . $key));
            $qty = (int)($item['quantity'] ?? $item['qty'] ?? 1);
            $price = (int)($item['price'] ?? $item['unit_price'] ?? 0);



            $lineTotal = $price * $qty;
            $subtotal += $lineTotal;

            $img = $item['image'] ?? ($item['img'] ?? '');
            if (!$img) {
                // optional: keep UI stable without breaking layout
                $img = 'data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=';
            }

            // Tambahkan item yang dipilih dari cart ke checkout (render sesuai isi session cart)
            echo '<div class="flex items-center gap-4">';

            echo '  <div class="w-16 h-16 rounded-xl bg-surface-container overflow-hidden flex-shrink-0">';
            echo '    <img class="w-full h-full object-cover" src="' . htmlspecialchars($img, ENT_QUOTES, 'UTF-8') . '" alt=""/>';
            echo '  </div>';
            echo '  <div class="flex-1">';
            echo '    <p class="font-label-bold text-label-bold">' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '</p>';
            echo '  <p class="text-body-md text-on-surface-variant">1kg × ' . (int)$qty . '</p>';
            echo '  </div>';
            echo '  <p class="font-label-bold text-primary">Rp ' . number_format($lineTotal, 0, ',', '.') . '</p>';
            echo '</div>';
        }
    }

    ?>
</div>
<hr class="border-surface-variant mb-6"/>
<!-- Price Breakdown -->
<div class="space-y-3 mb-8">
<div class="flex justify-between text-on-surface-variant">
<span>Subtotal</span>
<span id="subtotal-amount">Rp <?php echo number_format($subtotal ?? 0, 0, ',', '.'); ?></span>
</div>
<div class="flex justify-between text-on-surface-variant">
<span id="shipping-label">Biaya Pengiriman (Reguler)</span>
<span id="shipping-amount">Rp 15.000</span>

</div>
<div class="flex justify-between font-headline-sm text-headline-sm text-on-surface mt-2 pt-2 border-t border-dashed border-surface-variant">
<span>Total Tagihan</span>
<span class="text-primary-container" id="total-amount">Rp <?php echo number_format(($subtotal ?? 0) + 15000, 0, ',', '.'); ?></span>
</div>
</div>

<!-- CTA Button -->
<div id="payment-popup" class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/40">
    <div class="bg-surface-container-lowest border border-outline-variant rounded-2xl p-6 w-[90%] max-w-sm text-center">
        <div class="flex items-center justify-center">
            <span class="material-symbols-outlined text-primary text-4xl" style="font-variation-settings:'FILL' 1;">verified</span>
        </div>
        <h3 class="mt-3 font-headline-sm text-headline-sm text-on-surface">Pembayaran berhasil</h3>
        <p class="mt-2 text-on-surface-variant text-body-md">Terima kasih telah berbelanja di FruityView.</p>
    </div>
</div>

<button id="pay-now" class="w-full py-4 bg-primary-container text-on-primary font-label-bold text-lg rounded-full organic-shadow hover:bg-primary transition-all active:scale-[0.98] flex items-center justify-center gap-3" type="button">

<span class="material-symbols-outlined">lock</span>
                        Bayar Sekarang
                    </button>

<p class="mt-4 text-center text-xs text-on-surface-variant flex items-center justify-center gap-1">
<span class="material-symbols-outlined text-sm">verified_user</span>
                        Pembayaran aman & terenkripsi oleh FruityView
                    </p>
</div>
<!-- Promo Section -->
<div class="mt-6 p-4 bg-secondary-container/20 rounded-xl border border-secondary-container flex items-center gap-3">
<span class="material-symbols-outlined text-secondary">redeem</span>
<p class="text-label-bold text-on-secondary-container">Kamu menghemat Rp 10.000 dengan promo 'KEBUNSEGAR'</p>
</div>
</aside>
</div>
</main>
<!-- Footer -->
<footer class="bg-surface-container-low dark:bg-surface-container-lowest w-full mt-auto">
<div class="flex flex-col md:flex-row justify-between items-start px-margin-desktop py-12 gap-gutter max-w-container-max mx-auto">
<div class="space-y-4 max-w-xs">
<h3 class="font-headline-sm text-headline-sm font-bold text-primary dark:text-primary-fixed">FruityView</h3>
<p class="text-on-surface-variant text-body-md">Membawa kesegaran kebun langsung ke depan pintu rumah Anda dengan standar kualitas terbaik.</p>
</div>
<div class="grid grid-cols-2 sm:grid-cols-3 gap-12">
<div class="space-y-4">
<h4 class="font-label-bold text-label-bold text-primary">Tautan Cepat</h4>
<ul class="space-y-2 text-on-surface-variant">
<li><a class="hover:text-secondary transition-colors" href="#">About Us</a></li>
<li><a class="hover:text-secondary transition-colors" href="#">Sustainability</a></li>
<li><a class="hover:text-secondary transition-colors" href="#">FAQs</a></li>
</ul>
</div>
<div class="space-y-4">
<h4 class="font-label-bold text-label-bold text-primary">Kebijakan</h4>
<ul class="space-y-2 text-on-surface-variant">
<li><a class="hover:text-secondary transition-colors" href="#">Shipping Policy</a></li>
<li><a class="hover:text-secondary transition-colors" href="#">Contact</a></li>
</ul>
</div>
<div class="space-y-4">
<h4 class="font-label-bold text-label-bold text-primary">Hubungi Kami</h4>
<div class="flex gap-4">
<a class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center hover:bg-secondary-container transition-colors" href="#">
<span class="material-symbols-outlined text-secondary">mail</span>
</a>
<a class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center hover:bg-secondary-container transition-colors" href="#">
<span class="material-symbols-outlined text-secondary">call</span>
</a>
</div>
</div>
</div>
</div>
<div class="border-t border-surface-variant/30 py-6 text-center text-on-surface-variant text-body-md">
            © 2024 FruityView. Orchard Fresh Quality.
        </div>
</footer>
<script src="/public/assets/js/checkout.js"></script>
<script>
    // Ambil cart untuk checkout dari sessionStorage (yang diisi oleh public/assets/js/cart.js)
    // lalu render ke HTML agar ringkasan checkout tampil.
    (function () {
        try {
            const raw = sessionStorage.getItem('fv_checkout_cart');
            if (!raw) return;
            const cart = JSON.parse(raw);
            if (!Array.isArray(cart) || cart.length === 0) return;

            const itemsEl = document.getElementById('order-items');
            const subtotalEl = document.getElementById('subtotal-amount');
            const shippingAmountEl = document.getElementById('shipping-amount');
            const totalEl = document.getElementById('total-amount');
            if (!itemsEl) return;

            let subtotal = 0;
            itemsEl.innerHTML = '';

            cart.forEach((item, idx) => {
                const name = item.name || item.product_name || item.title || ('Item ' + (idx + 1));
                const qty = Number(item.quantity ?? item.qty ?? 1) || 1;
                const price = Number(item.price ?? item.unit_price ?? 0) || 0;
                const lineTotal = price * qty;
                subtotal += lineTotal;
                const img = item.image || item.img || '';

                const wrapper = document.createElement('div');
                wrapper.className = 'flex items-center gap-4';

                wrapper.innerHTML = `
                    <div class="w-16 h-16 rounded-xl bg-surface-container overflow-hidden flex-shrink-0">
                        <img class="w-full h-full object-cover" src="${img || ''}" alt=""/>
                    </div>
                    <div class="flex-1">
                        <p class="font-label-bold text-label-bold">${String(name).replaceAll('<','<').replaceAll('>','>')}</p>
                        <p class="text-body-md text-on-surface-variant">1kg × ${qty}</p>
                    </div>
                    <p class="font-label-bold text-primary">Rp ${Math.round(lineTotal).toLocaleString('id-ID')}</p>
                `;

                itemsEl.appendChild(wrapper);
            });

            // update subtotal & total awal (shipping default Reguler = 15000)
            const shippingFee = 15000;
            if (subtotalEl) subtotalEl.textContent = 'Rp ' + Math.round(subtotal).toLocaleString('id-ID');
            if (shippingAmountEl) shippingAmountEl.textContent = 'Rp ' + shippingFee.toLocaleString('id-ID');
            if (totalEl) totalEl.textContent = 'Rp ' + Math.round(subtotal + shippingFee).toLocaleString('id-ID');

        } catch (e) {
            // silent
        }
    })();
</script>
</body></html>
