<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Keluar - FruityView</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700;800&amp;family=Work+Sans:wght@400;500&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "surface-container-low": "#f4f4ee",
                    "on-tertiary-fixed": "#221b00",
                    "primary-fixed-dim": "#ffb77f",
                    "on-error-container": "#93000a",
                    "on-secondary-fixed-variant": "#005313",
                    "primary-container": "#ff8a00",
                    "surface-container-highest": "#e3e3de",
                    "surface": "#fafaf4",
                    "secondary": "#006e1c",
                    "primary": "#914c00",
                    "background": "#fafaf4",
                    "on-surface-variant": "#564334",
                    "on-primary-fixed-variant": "#6f3900",
                    "on-error": "#ffffff",
                    "secondary-fixed-dim": "#78dc77",
                    "tertiary-container": "#c7a600",
                    "surface-dim": "#dadad5",
                    "surface-container": "#eeeee9",
                    "surface-tint": "#914c00",
                    "surface-container-high": "#e8e8e3",
                    "surface-container-lowest": "#ffffff",
                    "on-secondary-fixed": "#002204",
                    "on-secondary-container": "#00731e",
                    "outline": "#8a7362",
                    "on-secondary": "#ffffff",
                    "inverse-surface": "#2f312e",
                    "secondary-fixed": "#94f990",
                    "surface-variant": "#e3e3de",
                    "inverse-primary": "#ffb77f",
                    "secondary-container": "#91f78e",
                    "on-tertiary-fixed-variant": "#544600",
                    "on-tertiary-container": "#4a3d00",
                    "on-tertiary": "#ffffff",
                    "inverse-on-surface": "#f1f1ec",
                    "error": "#ba1a1a",
                    "on-primary": "#ffffff",
                    "surface-bright": "#fafaf4",
                    "tertiary-fixed": "#ffe170",
                    "tertiary": "#705d00",
                    "on-surface": "#1a1c19",
                    "outline-variant": "#ddc1ae",
                    "on-primary-fixed": "#2f1500",
                    "primary-fixed": "#ffdcc4",
                    "on-primary-container": "#613100",
                    "tertiary-fixed-dim": "#e9c400",
                    "error-container": "#ffdad6",
                    "on-background": "#1a1c19"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "margin-desktop": "64px",
                    "container-max": "1280px",
                    "margin-mobile": "20px",
                    "unit": "8px",
                    "gutter": "24px"
            },
            "fontFamily": {
                    "headline-sm": ["Plus Jakarta Sans"],
                    "display-lg": ["Plus Jakarta Sans"],
                    "label-bold": ["Plus Jakarta Sans"],
                    "body-lg": ["Work Sans"],
                    "body-md": ["Work Sans"],
                    "display-lg-mobile": ["Plus Jakarta Sans"],
                    "headline-md": ["Plus Jakarta Sans"]
            },
            "fontSize": {
                    "headline-sm": ["24px", {"lineHeight": "32px", "fontWeight": "700"}],
                    "display-lg": ["56px", {"lineHeight": "64px", "letterSpacing": "-0.02em", "fontWeight": "800"}],
                    "label-bold": ["14px", {"lineHeight": "20px", "fontWeight": "700"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "display-lg-mobile": ["40px", {"lineHeight": "48px", "letterSpacing": "-0.01em", "fontWeight": "800"}],
                    "headline-md": ["32px", {"lineHeight": "40px", "fontWeight": "700"}]
            }
          },
        },
      }
    </script>
<link href="/public/assets/css/logout.css" rel="stylesheet"/>
</head>
<body class="bg-background text-on-background font-body-md min-h-screen flex flex-col">
<!-- TopNavBar (Simplified for Logout) -->
<header class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-md shadow-sm">
<div class="flex justify-between items-center px-margin-desktop py-4 max-w-container-max mx-auto">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary-container text-3xl" style="font-variation-settings: 'FILL' 1;">eco</span>
<span class="font-headline-sm text-headline-sm font-black text-primary">FruityView</span>
</div>
<nav class="hidden md:flex gap-8 items-center">
<a class="font-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Tautan Cepat</a>
<a class="font-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Hubungi Kami</a>
</nav>
</div>
</header>
<!-- Main Content Canvas -->
<main class="flex-grow flex items-center justify-center pt-32 pb-20 px-margin-mobile md:px-margin-desktop relative overflow-hidden">
<!-- Animated Background Elements -->
<div class="absolute top-1/4 -left-20 w-64 h-64 bg-secondary-container/20 rounded-full blur-3xl -z-10 float-animation"></div>
<div class="absolute bottom-1/4 -right-20 w-80 h-80 bg-primary-container/10 rounded-full blur-3xl -z-10 float-animation" style="animation-delay: -3s;"></div>
<!-- Logout Success Card -->
<div class="max-w-xl w-full">
<div class="bg-surface-container-lowest rounded-[2.5rem] p-8 md:p-16 shadow-[0_20px_50px_rgba(145,76,0,0.1)] border border-surface-container-high text-center relative overflow-hidden">
<!-- Success Illustration Area -->
<div class="mb-10 relative inline-block">
<div class="w-32 h-32 bg-secondary-container rounded-full flex items-center justify-center mx-auto mb-6 relative z-10 scale-110">
<span class="material-symbols-outlined text-secondary text-6xl" style="font-variation-settings: 'wght' 700;">check_circle</span>
</div>
<!-- Decorative fruit splash -->
<div class="absolute -top-4 -right-4 w-12 h-12 bg-tertiary-fixed rounded-full blur-sm opacity-60"></div>
<div class="absolute -bottom-2 -left-6 w-16 h-16 bg-primary-fixed rounded-full blur-md opacity-40"></div>
</div>
<div class="space-y-4">
<h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface">
                        Anda Telah Keluar
                    </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-sm mx-auto">
                        Terima kasih telah mengunjungi FruityView. Sampai jumpa kembali!
                    </p>
</div>
<!-- Action Buttons -->
<div class="mt-12 flex flex-col gap-4">
<button class="bg-primary-container text-white font-label-bold text-lg py-4 px-10 rounded-full shadow-lg hover:shadow-xl hover:-translate-y-1 active:scale-95 transition-all duration-300">
                        Masuk Kembali
                    </button>
<a class="text-primary font-label-bold hover:text-primary-container transition-colors py-2" href="#">
                        Kembali ke Beranda
                    </a>
</div>
<!-- Floating Fruit Elements (Purely Decorative) -->
<img class="absolute -bottom-10 -right-10 w-32 h-32 opacity-20 rotate-12 pointer-events-none" data-alt="A hyper-realistic, studio-lit photo of a fresh organic orange with green leaves, positioned as a decorative element with soft depth of field, set against a clean light background to maintain the Orchard Fresh brand aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCMtdU3LeelNUNKn4tySrcPQ4TqkxB40vc3OxlnjahUF-PFZqqLf08A4WR78v_PWu6_qimj15_aj7XuIbsiKpQs_GTxudbGl2txKMLcp6gbNB0FcA2F4X15x31X4BuL0Sq8pV1MnuOJ7-qspcmnA-cYQxHQ82Q22N-xKZEEnJU08XcdquH48EO_t78bE1DE1V9DvXW3Sg4GON08NPuFUIhJgZoYIVvOa0GhpDC4Nysr6hebyJVo2MjyjM4YdD2-YFGVyYMxbfZE_g"/>
<img class="absolute -top-6 -left-6 w-24 h-24 opacity-20 -rotate-12 pointer-events-none" data-alt="A vibrant and crisp studio shot of a fresh green lime, captured in high resolution with natural lighting and soft shadows, appearing to float gracefully to complement a modern UI layout." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBdp-7KJaG_3o6laV37Z-4XecXHJRqlWYb1zJZMP85YSOBQcfn9IC4IBiFA3CM3-ufcRLlt_tT4n4ytcgDtOeOAVHX-V0ZzZEyrSln-JBEMHT6UtbVAMUS0X7KPprJNPwt5-TT0aEzW8V6OYyr9LScJMLA5p4AJYfoG41yGfZ5gkLvLdpQ-dzQ0HNWY5OQ-gN1-n749UXiINwp4ClF1Fyn7GaFIAtq2zuzQ3IUYNISHy6Dug5rmrddGP7QgBsF8ItG863yleRFD4A"/>
</div>
<!-- Quick Summary / Promotional Bento (Optional high-end touch) -->
<div class="mt-8 grid grid-cols-2 gap-4">
<div class="bg-secondary-container/30 p-6 rounded-[2rem] border border-secondary-container/50">
<span class="material-symbols-outlined text-secondary mb-2">shopping_basket</span>
<h3 class="font-label-bold text-on-secondary-container">Baru di Katalog</h3>
<p class="text-xs text-on-secondary-container/80">Cek stok buah musim dingin kami sekarang.</p>
</div>
<div class="bg-tertiary-container/30 p-6 rounded-[2rem] border border-tertiary-container/50">
<span class="material-symbols-outlined text-tertiary mb-2">local_shipping</span>
<h3 class="font-label-bold text-on-tertiary-container">Pengiriman Cepat</h3>
<p class="text-xs text-on-tertiary-container/80">Langganan untuk ongkir gratis bulan depan.</p>
</div>
</div>
</div>
</main>
<!-- Footer -->
<footer class="w-full mt-auto bg-surface-container-low">
<div class="flex flex-col md:flex-row justify-between items-start md:items-center px-margin-desktop py-12 gap-gutter max-w-container-max mx-auto">
<div class="space-y-4">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary-container text-2xl" style="font-variation-settings: 'FILL' 1;">eco</span>
<span class="font-headline-sm text-headline-sm font-bold text-primary">FruityView</span>
</div>
<p class="text-on-surface-variant font-body-md max-w-xs">
                    Menghadirkan kesegaran kebun langsung ke depan pintu Anda dengan standar kualitas tertinggi.
                </p>
<p class="text-on-surface-variant opacity-60 text-sm">© 2024 FruityView. Orchard Fresh Quality.</p>
</div>
<div class="flex flex-wrap gap-12">
<div class="space-y-4">
<h4 class="font-label-bold text-secondary">Tautan Cepat</h4>
<ul class="space-y-2">
<li><a class="text-on-surface-variant hover:text-secondary transition-colors" href="#">Tentang Kami</a></li>
<li><a class="text-on-surface-variant hover:text-secondary transition-colors" href="#">Keberlanjutan</a></li>
<li><a class="text-on-surface-variant hover:text-secondary transition-colors" href="#">Kebijakan Pengiriman</a></li>
</ul>
</div>
<div class="space-y-4">
<h4 class="font-label-bold text-secondary">Hubungi Kami</h4>
<ul class="space-y-2">
<li><a class="text-on-surface-variant hover:text-secondary transition-colors" href="#">Bantuan</a></li>
<li><a class="text-on-surface-variant hover:text-secondary transition-colors" href="#">FAQs</a></li>
<li><a class="text-on-surface-variant hover:text-secondary transition-colors" href="#">Kontak</a></li>
</ul>
</div>
</div>
</div>
</footer>
<script src="/public/assets/js/logout.js"></script>
</body></html>