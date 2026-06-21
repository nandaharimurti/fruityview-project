<!DOCTYPE html><html class="light" lang="id" style=""><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Keranjang Belanja - FruityView</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700;800&amp;family=Work+Sans:wght@400;500&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100..900&amp;family=Work+Sans:wght@100..900&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="../../../public/assets/css/cart.css">
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "tertiary-container": "#c7a600",
                    "on-surface-variant": "#564334",
                    "on-tertiary": "#ffffff",
                    "surface-dim": "#dadad5",
                    "tertiary": "#705d00",
                    "outline": "#8a7362",
                    "on-tertiary-container": "#4a3d00",
                    "on-secondary-fixed-variant": "#005313",
                    "primary": "#914c00",
                    "background": "#fafaf4",
                    "secondary-fixed": "#94f990",
                    "on-surface": "#1a1c19",
                    "on-secondary-container": "#00731e",
                    "surface-container-high": "#e8e8e3",
                    "secondary": "#006e1c",
                    "secondary-container": "#91f78e",
                    "on-background": "#1a1c19",
                    "on-primary-fixed": "#2f1500",
                    "on-error-container": "#93000a",
                    "on-tertiary-fixed-variant": "#544600",
                    "surface-tint": "#914c00",
                    "surface-container-highest": "#e3e3de",
                    "inverse-surface": "#2f312e",
                    "surface": "#fafaf4",
                    "on-secondary-fixed": "#002204",
                    "on-error": "#ffffff",
                    "on-secondary": "#ffffff",
                    "on-tertiary-fixed": "#221b00",
                    "tertiary-fixed": "#ffe170",
                    "surface-variant": "#e3e3de",
                    "on-primary-container": "#613100",
                    "inverse-primary": "#ffb77f",
                    "surface-container-low": "#f4f4ee",
                    "surface-container-lowest": "#ffffff",
                    "surface-bright": "#fafaf4",
                    "error-container": "#ffdad6",
                    "inverse-on-surface": "#f1f1ec",
                    "on-primary-fixed-variant": "#6f3900",
                    "surface-container": "#eeeee9",
                    "secondary-fixed-dim": "#78dc77",
                    "primary-fixed": "#ffdcc4",
                    "error": "#ba1a1a",
                    "tertiary-fixed-dim": "#e9c400",
                    "primary-fixed-dim": "#ffb77f",
                    "on-primary": "#ffffff",
                    "primary-container": "#ff8a00",
                    "outline-variant": "#ddc1ae"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "margin-desktop": "64px",
                    "gutter": "24px",
                    "margin-mobile": "20px",
                    "container-max": "1280px",
                    "unit": "8px"
            },
            "fontFamily": {
                    "headline-sm": ["Plus Jakarta Sans"],
                    "body-md": ["Work Sans"],
                    "headline-md": ["Plus Jakarta Sans"],
                    "label-bold": ["Plus Jakarta Sans"],
                    "body-lg": ["Work Sans"],
                    "display-lg-mobile": ["Plus Jakarta Sans"],
                    "display-lg": ["Plus Jakarta Sans"]
            },
            "fontSize": {
                    "headline-sm": ["24px", {"lineHeight": "32px", "fontWeight": "700"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "headline-md": ["32px", {"lineHeight": "40px", "fontWeight": "700"}],
                    "label-bold": ["14px", {"lineHeight": "20px", "fontWeight": "700"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                    "display-lg-mobile": ["40px", {"lineHeight": "48px", "letterSpacing": "-0.01em", "fontWeight": "800"}],
                    "display-lg": ["56px", {"lineHeight": "64px", "letterSpacing": "-0.02em", "fontWeight": "800"}]
            }
          },
        },
      }
    </script>
</head>
<body class="min-h-screen flex flex-col">
<!-- Top Navigation Bar (Shared Component Strategy) -->
<header class="sticky top-0 w-full z-50 shadow-sm bg-surface/80 dark:bg-surface-container/80 backdrop-blur-md h-20">
<nav class="flex justify-between items-center px-margin-desktop max-w-container-max mx-auto h-full">
<!-- Brand Logo -->
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-3xl" style="font-variation-settings: 'FILL' 1;">eco</span>
<h1 class="font-display-lg text-headline-sm text-primary dark:text-primary-fixed-dim tracking-tight">FruityView</h1>
</div>
<!-- Search Bar (on_left context) -->
<div class="hidden md:flex flex-1 max-w-md mx-12">
<div class="relative w-full group">
<input class="w-full bg-surface-container-low border-none rounded-full py-2.5 pl-12 pr-4 focus:ring-2 focus:ring-primary/20 transition-all font-body-md" placeholder="Cari buah segar..." type="text">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
</div>
</div>
<!-- Trailing Icon Actions -->
<div class="flex items-center gap-6">

<div class="flex items-center gap-4">
<button class="p-2 rounded-full hover:bg-primary-container/10 text-primary transition-all relative">
<span class="material-symbols-outlined text-2xl">shopping_cart</span>
<span class="absolute top-1 right-1 bg-primary text-white text-[10px] w-4 h-4 flex items-center justify-center rounded-full font-bold">2</span>
</button>
<button class="p-2 rounded-full hover:bg-primary-container/10 text-on-surface-variant transition-all">
<span class="material-symbols-outlined text-2xl">account_circle</span>
</button>
</div>
</div>
</nav>
</header>
<!-- Main Content Area -->
<main class="flex-grow max-w-container-max mx-auto px-margin-desktop py-12 w-full">
<!-- Breadcrumbs -->
<nav class="flex items-center gap-2 mb-8 text-on-surface-variant font-body-md">
<a class="hover:text-primary transition-colors" href="#">Beranda</a>
<span class="material-symbols-outlined text-sm">chevron_right</span>
<span class="text-primary font-bold">Keranjang</span>
</nav>
<!-- Title -->
<div class="mb-12">
<h2 class="font-headline-md text-headline-md text-on-surface">Keranjang Belanja</h2>
<p class="text-on-surface-variant font-body-md">Anda memiliki 2 item di keranjang Anda</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
<!-- Cart Items List -->
<section class="lg:col-span-8 flex flex-col gap-6">
<!-- Product Card 1 -->
<div class="bg-surface-container-lowest p-6 rounded-xl flex items-center gap-6 custom-shadow transition-transform hover:scale-[1.01] duration-300">
<div class="w-32 h-32 rounded-lg overflow-hidden bg-surface-container flex-shrink-0">
<img class="w-full h-full object-cover" data-alt="A high-resolution, vibrant close-up of a cluster of organic Red Gala Apples with droplets of fresh dew on their skin. The lighting is bright and warm, mimicking a morning market stall, set against a soft, cream-colored minimalist background. The style is professional commercial photography with a shallow depth of field." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA1HFZhnNRmp_XZwjGuoWYQm0Ab91ECWraqvNwrgMeoZJlT_UC3GGlEamQ0_S-GKReqTW_FP-IH0LKgC925zHAxMJLWAwyIa57izs17cnFeuIxo2c095GYQISi3qhhNjFZ2bkoVak3TuKgh1A_JYx46yr-p0SFaONCs21zk6zSXIy23KHXQ6NvOZ0gxNTu7OkNDUn7oakSjmN7djFjZB5cu5c6T3mVVC8xp7Q6twea6cdNHrKyyrDpfmWKJ57Ag4HybPieocVgrpA">
</div>
<div class="flex-grow">
<div class="flex justify-between items-start">
<div>
<h3 class="font-headline-sm text-lg text-on-surface">Apel Merah Gala</h3>
<p class="text-on-surface-variant font-body-md">Organik • 1kg</p>
</div>
<button class="text-on-surface-variant hover:text-error transition-colors p-1">
<span class="material-symbols-outlined">delete</span>
</button>
</div>
<div class="flex justify-between items-end mt-6">
<div class="flex items-center bg-surface-container rounded-full p-1 border border-outline-variant">
<button class="w-8 h-8 flex items-center justify-center hover:bg-surface-container-highest rounded-full transition-colors">
<span class="material-symbols-outlined text-sm">remove</span>
</button>
<span class="px-4 font-label-bold text-on-surface">1</span>
<button class="w-8 h-8 flex items-center justify-center hover:bg-surface-container-highest rounded-full transition-colors">
<span class="material-symbols-outlined text-sm">add</span>
</button>
</div>
<span class="font-headline-sm text-primary">Rp 45.000</span>
</div>
</div>
</div>
<!-- Product Card 2 -->
<div class="bg-surface-container-lowest p-6 rounded-xl flex items-center gap-6 custom-shadow transition-transform hover:scale-[1.01] duration-300">
<div class="w-32 h-32 rounded-lg overflow-hidden bg-secondary-container/20 flex-shrink-0">
<img class="w-full h-full object-cover" data-alt="Vivid, bright orange Sunkist oranges arranged artistically on a clean surface. One orange is sliced in half to show the juicy, vibrant interior texture. The lighting is crisp and natural, highlighting the citrus's pore-heavy rind. The overall aesthetic is wholesome and energetic, fitting a modern organic marketplace brand." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCKrGvKqYagWoYAlsI5952OrGUlPGr1FxUxwXDgiNhZxcckswY-K6qOdt_EkEUUH2vjNQbaidiXyzWeZNjIdEt6iAY2-o1r0nIwT_bvYb2T6HA1vpKlBc3NYwBcKCmhaiUlvMel5osQWyjI1safZ-nrd-od5Mw8DAq6ALM_U9oa_HMsCi6DUGYu0Uy0LbJ_1S4eJyL5x-qnC6Fdl-XkGY_U0y79Db8-vk8crjEisyiVHb1NbyBWmmkeN7brnKoLlyJSXhdfYXxrQQ">
</div>
<div class="flex-grow">
<div class="flex justify-between items-start">
<div>
<h3 class="font-headline-sm text-lg text-on-surface">Jeruk Sunkist</h3>
<p class="text-on-surface-variant font-body-md">Import • 500g</p>
</div>
<button class="text-on-surface-variant hover:text-error transition-colors p-1">
<span class="material-symbols-outlined">delete</span>
</button>
</div>
<div class="flex justify-between items-end mt-6">
<div class="flex items-center bg-surface-container rounded-full p-1 border border-outline-variant">
<button class="w-8 h-8 flex items-center justify-center hover:bg-surface-container-highest rounded-full transition-colors">
<span class="material-symbols-outlined text-sm">remove</span>
</button>
<span class="px-4 font-label-bold text-on-surface">2</span>
<button class="w-8 h-8 flex items-center justify-center hover:bg-surface-container-highest rounded-full transition-colors">
<span class="material-symbols-outlined text-sm">add</span>
</button>
</div>
<span class="font-headline-sm text-primary">Rp 56.000</span>
</div>
</div>
</div>
<!-- Empty Cart Incentive / Suggestions -->

</section>
<!-- Order Summary Sidebar -->
<aside class="lg:col-span-4 flex flex-col gap-6 sticky top-24">
<div class="bg-surface-container-low p-8 rounded-2xl border border-outline-variant">
<h3 class="font-headline-sm text-xl mb-6 text-on-surface">Ringkasan Pesanan</h3>
<div class="space-y-4 mb-8">
<div class="flex justify-between font-body-md text-on-surface-variant">
<span class="">Subtotal</span>
<span class="">Rp 101.000</span>
</div>
<div class="flex justify-between font-body-md text-on-surface-variant">
<span class="">Pengiriman (Estimasi)</span>
<span class="">Rp 15.000</span>
</div>
<div class="flex justify-between font-body-md text-on-surface-variant">
<span class="">Diskon</span>
<span class="text-secondary">- Rp 5.000</span>
</div>
<div class="pt-4 border-t border-outline-variant flex justify-between">
<span class="font-headline-sm text-lg text-on-surface">Total Harga</span>
<span class="font-headline-sm text-lg text-primary">Rp 111.000</span>
</div>
</div>
<!-- Promo Code Input -->
<div class="mb-8">
<label class="block text-sm font-label-bold mb-2 text-on-surface-variant">Kode Promo</label>
<div class="flex gap-2">
<input class="flex-grow bg-surface-container-lowest border-outline-variant rounded-lg px-4 py-2 text-sm focus:ring-primary focus:border-primary" placeholder="Masukkan kode" type="text">
<button class="bg-secondary text-white px-4 py-2 rounded-lg font-label-bold hover:bg-secondary-fixed-dim hover:text-on-secondary transition-all">Pakai</button>
</div>
</div>
<!-- CTA Button -->
<button class="w-full bg-primary-container text-white font-headline-sm text-lg py-4 rounded-full flex items-center justify-center gap-2 hover:brightness-105 active:scale-95 transition-all shadow-lg shadow-primary/20">
                        Lanjut ke Pembayaran
                        <span class="material-symbols-outlined">arrow_forward</span>
</button>
<p class="text-center mt-6 text-on-surface-variant text-sm font-body-md">
                        Pesanan Anda akan dikemas dengan ramah lingkungan 🌿
                    </p>
</div>
<!-- Payment Methods Placeholder Icons -->
<div class="flex flex-col items-center gap-4 py-4 opacity-60">
<p class="text-xs font-label-bold uppercase tracking-widest text-on-surface-variant">Metode Pembayaran Aman</p>
<div class="flex gap-4 grayscale">
<div class="w-10 h-6 bg-surface-container-highest rounded flex items-center justify-center text-[10px] font-bold">VISA</div>
<div class="w-10 h-6 bg-surface-container-highest rounded flex items-center justify-center text-[10px] font-bold">GOPAY</div>
<div class="w-10 h-6 bg-surface-container-highest rounded flex items-center justify-center text-[10px] font-bold">OVO</div>
<div class="w-10 h-6 bg-surface-container-highest rounded flex items-center justify-center text-[10px] font-bold">BNI</div>
</div>
</div>
</aside>
</div>
</main>
<!-- Footer (Shared Component) -->
<footer class="bg-surface-container-low">
<div class="w-full py-16 px-margin-desktop grid grid-cols-1 md:grid-cols-2 justify-between items-center max-w-container-max mx-auto">
<div class="mb-8 md:mb-0">
<div class="font-display-lg text-headline-sm font-bold text-on-surface mb-4">FruityView</div>
<p class="text-on-surface-variant font-body-md text-body-md max-w-sm mb-6">
                    Platform marketplace buah segar premium dengan komitmen transparansi rantai pasok untuk kesehatan masyarakat.
                </p>
<p class="text-on-surface-variant font-body-md text-body-md">
                    © 2024 FruityView Marketplace. Orchard Fresh Quality Guaranteed.
                </p>
</div>
<div class="grid grid-cols-2 gap-8 md:justify-items-end">
<div class="space-y-3">
<h5 class="font-label-bold text-label-bold text-primary">Tautan Cepat</h5>
<ul class="space-y-2">
<li class=""><a class="text-on-surface-variant hover:underline decoration-primary transition-opacity font-body-md text-body-md" href="#">Supply Chain</a></li>
<li class=""><a class="text-on-surface-variant hover:underline decoration-primary transition-opacity font-body-md text-body-md" href="#">Sustainability</a></li>
<li class=""><a class="text-on-surface-variant hover:underline decoration-primary transition-opacity font-body-md text-body-md" href="#">Wholesale</a></li>
<li class=""><a class="text-on-surface-variant hover:underline decoration-primary transition-opacity font-body-md text-body-md" href="#">Privacy Policy</a></li>
</ul>
</div>
<div class="space-y-3">
<h5 class="font-label-bold text-label-bold text-primary">Hubungi Kami</h5>
<div class="flex gap-4">
<a class="w-10 h-10 rounded-full bg-surface-container-highest flex items-center justify-center hover:bg-primary-fixed transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">mail</span>
</a>
<a class="w-10 h-10 rounded-full bg-surface-container-highest flex items-center justify-center hover:bg-primary-fixed transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">call</span>
</a>
</div>
</div>
</div>
</div>
</footer>
<!-- Simple Interactivity for Quantity Selector -->
<script src="../../../public/assets/js/cart.js"></script>

</body></html>