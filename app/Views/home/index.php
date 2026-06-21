<!DOCTYPE html><html class="light" lang="id" style=""><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>FruityView - Marketplace Buah Segar</title>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700;800&amp;family=Work+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-primary-fixed-variant": "#6f3900",
                    "on-error-container": "#93000a",
                    "on-background": "#1a1c19",
                    "primary-fixed-dim": "#ffb77f",
                    "inverse-on-surface": "#f1f1ec",
                    "surface-container-lowest": "#ffffff",
                    "on-error": "#ffffff",
                    "error": "#ba1a1a",
                    "surface-container": "#eeeee9",
                    "on-secondary-fixed-variant": "#005313",
                    "surface-dim": "#dadad5",
                    "surface": "#fafaf4",
                    "on-primary": "#ffffff",
                    "secondary": "#006e1c",
                    "inverse-primary": "#ffb77f",
                    "surface-bright": "#fafaf4",
                    "tertiary-container": "#c7a600",
                    "outline-variant": "#ddc1ae",
                    "surface-container-highest": "#e3e3de",
                    "primary-fixed": "#ffdcc4",
                    "primary": "#914c00",
                    "on-tertiary": "#ffffff",
                    "secondary-container": "#91f78e",
                    "on-secondary-fixed": "#002204",
                    "error-container": "#ffdad6",
                    "on-primary-container": "#613100",
                    "inverse-surface": "#2f312e",
                    "primary-container": "#ff8a00",
                    "background": "#fafaf4",
                    "tertiary-fixed": "#ffe170",
                    "surface-container-low": "#f4f4ee",
                    "secondary-fixed": "#94f990",
                    "on-secondary-container": "#00731e",
                    "on-tertiary-fixed-variant": "#544600",
                    "surface-container-high": "#e8e8e3",
                    "surface-tint": "#914c00",
                    "on-tertiary-container": "#4a3d00",
                    "secondary-fixed-dim": "#78dc77",
                    "on-tertiary-fixed": "#221b00",
                    "on-surface": "#1a1c19",
                    "on-secondary": "#ffffff",
                    "outline": "#8a7362",
                    "on-surface-variant": "#564334",
                    "on-primary-fixed": "#2f1500",
                    "tertiary-fixed-dim": "#e9c400",
                    "tertiary": "#705d00",
                    "surface-variant": "#e3e3de"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "unit": "8px",
                    "container-max": "1280px",
                    "margin-desktop": "64px",
                    "margin-mobile": "20px",
                    "gutter": "24px"
            },
            "fontFamily": {
                    "display-lg": ["Plus Jakarta Sans"],
                    "body-md": ["Work Sans"],
                    "body-lg": ["Work Sans"],
                    "label-bold": ["Plus Jakarta Sans"],
                    "headline-sm": ["Plus Jakarta Sans"],
                    "display-lg-mobile": ["Plus Jakarta Sans"],
                    "headline-md": ["Plus Jakarta Sans"]
            },
            "fontSize": {
                    "display-lg": ["56px", {"lineHeight": "64px", "letterSpacing": "-0.02em", "fontWeight": "800"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                    "label-bold": ["14px", {"lineHeight": "20px", "fontWeight": "700"}],
                    "headline-sm": ["24px", {"lineHeight": "32px", "fontWeight": "700"}],
                    "display-lg-mobile": ["40px", {"lineHeight": "48px", "letterSpacing": "-0.01em", "fontWeight": "800"}],
                    "headline-md": ["32px", {"lineHeight": "40px", "fontWeight": "700"}]
            }
          },
        },
      }
    </script>
    <link rel="stylesheet" href="/assets/css/home-index.css">
</head>
<body class="bg-background text-on-background font-body-md selection:bg-primary-fixed selection:text-on-primary-fixed">
<!-- TopAppBar -->
<nav class="docked full-width top-0 sticky z-50 bg-surface/80 glass-nav shadow-sm">
<div class="flex justify-between items-center w-full px-margin-desktop py-4 max-w-container-max mx-auto">
<!-- Brand Logo -->
<div class="font-display-lg text-headline-md font-extrabold text-primary">
                FruityView
            </div>
<!-- Navigation Links -->
<div class="hidden md:flex items-center flex-1 max-w-md mx-8">
    <div class="relative w-full group">
        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant group-focus-within:text-primary transition-colors">search</span>
        <input type="text" placeholder="Cari buah segar..." class="w-full bg-surface-container-low border-none rounded-full py-2.5 pl-12 pr-4 text-body-md focus:ring-2 focus:ring-primary/20 focus:bg-white transition-all outline-none text-on-surface placeholder:text-on-surface-variant/60">
    </div>
</div>
<!-- Trailing Icons -->
<div class="flex items-center gap-4">
<button class="p-2 text-on-surface-variant hover:text-primary transition-transform active:scale-95" aria-label="Keranjang">
<span class="material-symbols-outlined">shopping_cart</span>
</button>
<button class="p-2 text-on-surface-variant hover:text-primary transition-transform active:scale-95" aria-label="Akun">
<span class="material-symbols-outlined">account_circle</span>
</button>
</div>
</div>
</nav>
<!-- Hero Section -->
<section class="relative overflow-hidden pt-12 pb-24 md:pt-24 md:pb-32 px-margin-mobile md:px-margin-desktop">
<div class="max-w-container-max mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
<div class="z-10 text-center lg:text-left">
<span class="inline-block px-4 py-1.5 rounded-full bg-secondary-container text-on-secondary-container font-label-bold text-label-bold mb-6">
                    Fresh from Orchard
                </span>
<h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface mb-6">
                    Revolusi Distribusi <span class="text-primary-container">Buah Segar</span>
</h1>
<p class="text-on-surface-variant font-body-lg text-body-lg mb-10 max-w-xl mx-auto lg:mx-0">
                    Menghubungkan langsung kebun buah terbaik dengan meja makan Anda melalui sistem rantai pasok transparan dan terintegrasi.
                </p>
<div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
<button class="px-8 py-4 bg-primary-container text-on-primary-container rounded-full font-label-bold text-label-bold shadow-lg hover:shadow-primary-container/20 transition-all scale-100 hover:scale-105 active:scale-95">
                        Mulai Belanja
                    </button>
<button class="px-8 py-4 border-2 border-primary-container text-primary font-label-bold text-label-bold rounded-full hover:bg-primary-fixed transition-colors">
                        Pelajari Transparansi
                    </button>
</div>
</div>
<div class="relative flex justify-center items-center">
<div class="absolute inset-0 bg-primary-fixed/30 organic-shape blur-3xl -z-10"></div>
<div class="relative w-full aspect-square max-w-[500px]">
<img class="w-full h-full object-contain drop-shadow-2xl" data-alt="A lush, high-resolution close-up of vibrant citrus fruits including sliced oranges and lemons dripping with fresh water droplets. The composition is artistic and professional, set against a soft, sun-drenched orchard background with warm golden hour lighting. The visual style is crisp and modern-organic, emphasizing freshness and high quality for a premium marketplace aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuByLYiMp4hTm174Y-VQCbF6s_RsaLiFmmCjCnv5oFKgPD4FuRfqdF1WyGQTHXC2H_7ZQV9MKskXCf4D2pI7POBiB-nIJnJYe7dgulR8-2JOjHviyda-JbNkgmVIYYyNsdpmQmUpqTBeAHDNRX2r56IsraBLz3P3-GlrGqITnXdhnU_bhPmez0WG1ZIUSRv0EqemAAjdukyYchhkOLViBZrC0jJyVuVwXsK6TvsVt5fR3aadAadea1XPwP-EiJK69FZ0vcVhgPjdtg">
<!-- Floating asset -->
<div class="absolute top-4 right-4 bg-surface rounded-2xl p-4 shadow-xl border border-outline-variant animate-bounce">
<span class="text-primary font-bold">100% Organik</span>
</div>
</div>
</div>
</div>
</section>
<!-- Categories Section -->

<!-- Featured Products -->
<section class="px-margin-mobile md:px-margin-desktop pt-12 pb-24">
<div class="max-w-container-max mx-auto">
<div class="mb-12 text-center">
<h2 class="font-display-lg text-headline-md text-on-surface">Produk Unggulan</h2>
<div class="w-20 h-1 bg-primary-container mx-auto mt-4 rounded-full"></div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
<!-- Product Card 1 -->
<div class="bg-surface rounded-3xl p-4 shadow-sm hover:shadow-lg transition-all border border-outline-variant group">
<div class="aspect-square rounded-2xl bg-surface-container overflow-hidden mb-4">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Close up studio shot of fresh Jeruk Sunkist oranges with deep orange skin and vibrant green leaves, professionally lit with soft shadows on a neutral light background. The fruit looks juicy and high quality." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWcza0m01J5_8Ms8nEmagqtLzAq7PJidswm92SbqLadctxivx_az_P7Ygc8vNqQwd3IUj6R54__2uhYgnKZyHEDIXH_rGFeFFV9ar5YDlnlVpk1UAebL7xng4jpHDGLobQfksHBdqxjYWzvOrdJipaZd6toIpREMq43Rg6IBVD6O__SEX4F_5FASjd1G7HS_jN03zP7mbeLiqq_FTLQFW81WqaZvwnBJaMfFV_zKRca_Wg5_R5ooV5cZWmP4Fa6JDCsqx7bhC0Pw">
</div>
<span class="text-secondary font-label-bold text-[12px] uppercase tracking-wider">Lokal Premium</span>
<h4 class="font-headline-sm text-body-lg font-bold text-on-surface mt-1">Jeruk Sunkist</h4>
<p class="text-primary font-bold text-headline-sm mt-2">Rp 45.000 <span class="text-on-surface-variant text-body-md font-normal">/kg</span></p>
<button class="w-full mt-6 py-3 bg-primary text-on-primary rounded-xl font-label-bold flex justify-center items-center gap-2 hover:bg-primary-container transition-colors active:scale-95">
<span class="material-symbols-outlined text-[20px]">add_shopping_cart</span> Tambah ke Keranjang
                    </button>
</div>
<!-- Product Card 2 -->
<div class="bg-surface rounded-3xl p-4 shadow-sm hover:shadow-lg transition-all border border-outline-variant group">
<div class="aspect-square rounded-2xl bg-surface-container overflow-hidden mb-4">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="High resolution photography of premium red Fuji Apples with a glossy, vibrant skin, arranged in a minimalist modern style. Bright studio lighting highlights the texture and freshness of the fruit." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFVl5d47YvVp0Ewu_WmIvj60BtGmA0qhlolct60Ux_NKHe7kcbbi3BHV5JmVHcsWQFjPhxSvUHqva6LlI4UiL9LA2oCORMyT_PLPUmdKSlVzOgtUyqB0jHahHpGh-W13ycMY12a8hvgMshQKRIhlTVuvOCyV_zRa7uUJQYBPpPbUZHRiPvwfbOXxF8ZTrBYMhoZbkEEgcDxT0NLaShHirL8KQCyIZaO9i9c5IxzkaOsZV3cF7UmV_qaXlaUkJhw-kmf-uCZVbO_A">
</div>
<span class="text-primary font-label-bold text-[12px] uppercase tracking-wider">Impor Terlaris</span>
<h4 class="font-headline-sm text-body-lg font-bold text-on-surface mt-1">Apel Fuji</h4>
<p class="text-primary font-bold text-headline-sm mt-2">Rp 38.000 <span class="text-on-surface-variant text-body-md font-normal">/kg</span></p>
<button class="w-full mt-6 py-3 bg-primary text-on-primary rounded-xl font-label-bold flex justify-center items-center gap-2 hover:bg-primary-container transition-colors active:scale-95">
<span class="material-symbols-outlined text-[20px]">add_shopping_cart</span> Tambah ke Keranjang
                    </button>
</div>
<!-- Product Card 3 -->
<div class="bg-surface rounded-3xl p-4 shadow-sm hover:shadow-lg transition-all border border-outline-variant group">
<div class="aspect-square rounded-2xl bg-surface-container overflow-hidden mb-4">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Close up of fresh green grapes, seedless and crisp, with water droplets on the surface. Minimalist photography style with a light background, emphasizing natural quality and sweetness." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDmwWkeLpMD5unTWks7bY-fUwBXakaw9D4ndfxMSDtC5-YVcKVl7-5Tv2Hi2bdQRf6ibgDpzd75cdkyuanAzRsjyOx0xqZqh_qy49uKMUmNgOnU7teAZRVs_l7ImGap0Fg_zaTluCyS1ikOia0GgDux1Wno_ssLVJvPki-Dq6zdRtGbGZli9_6iTq6fYrCZKyo7_GE12kfXCBi2sec5Y-QIAPY8fUy2v5nHc-XeKaq-S_yaqSk6neQjOkb43HOPCJbHAUTBRUKoBA">
</div>
<span class="text-secondary font-label-bold text-[12px] uppercase tracking-wider">Organik</span>
<h4 class="font-headline-sm text-body-lg font-bold text-on-surface mt-1">Anggur Hijau</h4>
<p class="text-primary font-bold text-headline-sm mt-2">Rp 62.000 <span class="text-on-surface-variant text-body-md font-normal">/pack</span></p>
<button class="w-full mt-6 py-3 bg-primary text-on-primary rounded-xl font-label-bold flex justify-center items-center gap-2 hover:bg-primary-container transition-colors active:scale-95">
<span class="material-symbols-outlined text-[20px]">add_shopping_cart</span> Tambah ke Keranjang
                    </button>
</div>
<!-- Product Card 4 -->
<div class="bg-surface rounded-3xl p-4 shadow-sm hover:shadow-lg transition-all border border-outline-variant group">
<div class="aspect-square rounded-2xl bg-surface-container overflow-hidden mb-4">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Photography of a perfectly ripe honey pineapple, peeled and sliced artfully to show its golden yellow interior. Professional food photography style with bright, sun-like lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBXRnKZSo9p_RAXT-xxCpzj99_IqGfFnDiRGd9nlN5Ga7bWG0ogtSYVyrqbslNXJr2ADWhQmSbcyD8dS2zZyleJ9uPYyWFg6I_GLVtjXd9NfI6H3Ftaj1hK6C_WLBb7PFkVBuBNNJ5H8NiVuv98CkKGVM5w3s-cIZ9hrZIlSTQWSA2lummINi4tihX8Aa4Wp8vLv0MxkuhgTR9d--X8qRwcNVOtJR7XQGiabqtK8iFOmS8yYgZNtivouWWTDqBkSeSGYgkC17RAOA">
</div>
<span class="text-primary font-label-bold text-[12px] uppercase tracking-wider">Musiman</span>
<h4 class="font-headline-sm text-body-lg font-bold text-on-surface mt-1">Nanas Madu</h4>
<p class="text-primary font-bold text-headline-sm mt-2">Rp 25.000 <span class="text-on-surface-variant text-body-md font-normal">/buah</span></p>
<button class="w-full mt-6 py-3 bg-primary text-on-primary rounded-xl font-label-bold flex justify-center items-center gap-2 hover:bg-primary-container transition-colors active:scale-95">
<span class="material-symbols-outlined text-[20px]">add_shopping_cart</span> Tambah ke Keranjang
                    </button>
</div>
<!-- Product Card 5 -->
<div class="bg-surface rounded-3xl p-4 shadow-sm hover:shadow-lg transition-all border border-outline-variant group">
<div class="aspect-square rounded-2xl bg-surface-container overflow-hidden mb-4">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Fresh seedless red watermelon sliced into wedges, vibrant red flesh with a green rind, studio lighting on a clean background." src="https://images.unsplash.com/photo-1587049633562-ad3552a41552?auto=format&amp;fit=crop&amp;q=80&amp;w=800">
</div>
<span class="text-secondary font-label-bold text-[12px] uppercase tracking-wider">Lokal Pilihan</span>
<h4 class="font-headline-sm text-body-lg font-bold text-on-surface mt-1">Semangka Merah</h4>
<p class="text-primary font-bold text-headline-sm mt-2">Rp 12.000 <span class="text-on-surface-variant text-body-md font-normal">/kg</span></p>
<button class="w-full mt-6 py-3 bg-primary text-on-primary rounded-xl font-label-bold flex justify-center items-center gap-2 hover:bg-primary-container transition-colors active:scale-95">
<span class="material-symbols-outlined text-[20px]">add_shopping_cart</span> Tambah ke Keranjang
                    </button>
</div>
<!-- Product Card 6 -->
<div class="bg-surface rounded-3xl p-4 shadow-sm hover:shadow-lg transition-all border border-outline-variant group">
<div class="aspect-square rounded-2xl bg-surface-container overflow-hidden mb-4">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Ripe butter avocado halved to show the creamy yellow interior and large seed, professional food photography." src="https://images.unsplash.com/photo-1523049673857-eb18f1d7b578?auto=format&amp;fit=crop&amp;q=80&amp;w=800">
</div>
<span class="text-secondary font-label-bold text-[12px] uppercase tracking-wider">Organik</span>
<h4 class="font-headline-sm text-body-lg font-bold text-on-surface mt-1">Alpukat Mentega</h4>
<p class="text-primary font-bold text-headline-sm mt-2">Rp 35.000 <span class="text-on-surface-variant text-body-md font-normal">/kg</span></p>
<button class="w-full mt-6 py-3 bg-primary text-on-primary rounded-xl font-label-bold flex justify-center items-center gap-2 hover:bg-primary-container transition-colors active:scale-95">
<span class="material-symbols-outlined text-[20px]">add_shopping_cart</span> Tambah ke Keranjang
                    </button>
</div>
<!-- Product Card 7 -->
<div class="bg-surface rounded-3xl p-4 shadow-sm hover:shadow-lg transition-all border border-outline-variant group">
<div class="aspect-square rounded-2xl bg-surface-container overflow-hidden mb-4">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Premium Korean strawberries, large and bright red with green caps, arranged in a luxury gift box style." src="https://images.unsplash.com/photo-1464965911861-746a04b4bca6?auto=format&amp;fit=crop&amp;q=80&amp;w=800">
</div>
<span class="text-primary font-label-bold text-[12px] uppercase tracking-wider">Impor Premium</span>
<h4 class="font-headline-sm text-body-lg font-bold text-on-surface mt-1">Strawberry Korea</h4>
<p class="text-primary font-bold text-headline-sm mt-2">Rp 85.000 <span class="text-on-surface-variant text-body-md font-normal">/pack</span></p>
<button class="w-full mt-6 py-3 bg-primary text-on-primary rounded-xl font-label-bold flex justify-center items-center gap-2 hover:bg-primary-container transition-colors active:scale-95">
<span class="material-symbols-outlined text-[20px]">add_shopping_cart</span> Tambah ke Keranjang
                    </button>
</div>
<!-- Product Card 8 -->
<div class="bg-surface rounded-3xl p-4 shadow-sm hover:shadow-lg transition-all border border-outline-variant group">
<div class="aspect-square rounded-2xl bg-surface-container overflow-hidden mb-4">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="A bunch of ripe yellow Cavendish bananas, spotless and high quality, studio lighting." src="https://images.unsplash.com/photo-1603833665858-e61d17a86224?auto=format&amp;fit=crop&amp;q=80&amp;w=800">
</div>
<span class="text-secondary font-label-bold text-[12px] uppercase tracking-wider">Lokal Premium</span>
<h4 class="font-headline-sm text-body-lg font-bold text-on-surface mt-1">Pisang Cavendish</h4>
<p class="text-primary font-bold text-headline-sm mt-2">Rp 22.000 <span class="text-on-surface-variant text-body-md font-normal">/sisir</span></p>
<button class="w-full mt-6 py-3 bg-primary text-on-primary rounded-xl font-label-bold flex justify-center items-center gap-2 hover:bg-primary-container transition-colors active:scale-95">
<span class="material-symbols-outlined text-[20px]">add_shopping_cart</span> Tambah ke Keranjang
                    </button>
</div></div><div class="mt-12 text-center">
<button class="px-8 py-4 border-2 border-primary-container text-primary font-label-bold text-label-bold rounded-full hover:bg-primary-fixed transition-colors">
                        Lihat Semua
                    </button>
</div>
</div>
</section>
<!-- Transparency Section (Integrated Supply Chain) -->

<!-- Footer -->
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
<ul class="space-y-2">
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
<script src="/assets/js/home-index.js"></script>


</body></html>