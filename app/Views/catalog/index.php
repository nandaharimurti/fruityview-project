<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Katalog Produk | FruityView</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700;800&amp;family=Work+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-tertiary-container": "#4a3d00",
                    "error": "#ba1a1a",
                    "on-primary-fixed": "#2f1500",
                    "on-error": "#ffffff",
                    "inverse-on-surface": "#f1f1ec",
                    "on-error-container": "#93000a",
                    "on-background": "#1a1c19",
                    "tertiary-fixed-dim": "#e9c400",
                    "surface-container": "#eeeee9",
                    "secondary-container": "#91f78e",
                    "inverse-surface": "#2f312e",
                    "tertiary-container": "#c7a600",
                    "outline": "#8a7362",
                    "on-tertiary-fixed-variant": "#544600",
                    "outline-variant": "#ddc1ae",
                    "on-secondary-fixed-variant": "#005313",
                    "secondary-fixed": "#94f990",
                    "on-secondary-fixed": "#002204",
                    "surface-container-lowest": "#ffffff",
                    "surface-bright": "#fafaf4",
                    "on-tertiary-fixed": "#221b00",
                    "secondary": "#006e1c",
                    "tertiary": "#705d00",
                    "surface-container-highest": "#e3e3de",
                    "on-tertiary": "#ffffff",
                    "surface-container-high": "#e8e8e3",
                    "on-secondary-container": "#00731e",
                    "secondary-fixed-dim": "#78dc77",
                    "surface-tint": "#914c00",
                    "primary-fixed": "#ffdcc4",
                    "surface-container-low": "#f4f4ee",
                    "error-container": "#ffdad6",
                    "surface-variant": "#e3e3de",
                    "primary": "#914c00",
                    "inverse-primary": "#ffb77f",
                    "tertiary-fixed": "#ffe170",
                    "surface-dim": "#dadad5",
                    "on-primary": "#ffffff",
                    "primary-fixed-dim": "#ffb77f",
                    "on-secondary": "#ffffff",
                    "surface": "#fafaf4",
                    "on-surface-variant": "#564334",
                    "primary-container": "#ff8a00",
                    "on-primary-fixed-variant": "#6f3900",
                    "on-primary-container": "#613100",
                    "background": "#fafaf4",
                    "on-surface": "#1a1c19"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "margin-desktop": "64px",
                    "margin-mobile": "20px",
                    "gutter": "24px",
                    "container-max": "1280px",
                    "unit": "8px"
            },
            "fontFamily": {
                    "label-bold": ["Plus Jakarta Sans"],
                    "display-lg-mobile": ["Plus Jakarta Sans"],
                    "body-lg": ["Work Sans"],
                    "headline-md": ["Plus Jakarta Sans"],
                    "body-md": ["Work Sans"],
                    "display-lg": ["Plus Jakarta Sans"],
                    "headline-sm": ["Plus Jakarta Sans"]
            },
            "fontSize": {
                    "label-bold": ["14px", {"lineHeight": "20px", "fontWeight": "700"}],
                    "display-lg-mobile": ["40px", {"lineHeight": "48px", "letterSpacing": "-0.01em", "fontWeight": "800"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                    "headline-md": ["32px", {"lineHeight": "40px", "fontWeight": "700"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "display-lg": ["56px", {"lineHeight": "64px", "letterSpacing": "-0.02em", "fontWeight": "800"}],
                    "headline-sm": ["24px", {"lineHeight": "32px", "fontWeight": "700"}]
            }
          },
        },
      }
    </script>
<link rel="stylesheet" href="/public/assets/css/catalog.css">
</head>
<body class="bg-background text-on-background font-body-md selection:bg-primary-fixed selection:text-on-primary-fixed overflow-x-hidden">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-md shadow-sm">
<div class="flex justify-between items-center px-margin-desktop py-4 max-w-container-max mx-auto">
<div class="flex items-center gap-8">
<a class="font-headline-sm text-headline-sm font-black text-primary" href="#">FruityView</a>
<div class="hidden md:flex gap-6 items-center">
<a class="text-on-surface-variant hover:text-primary transition-colors font-body-md text-body-md" href="#">Beranda</a>
<a class="text-primary font-bold border-b-2 border-primary font-body-md text-body-md" href="#">Katalog</a>
</div>
</div>
<div class="flex items-center gap-6">
<!-- Search Bar -->
<div class="hidden lg:flex items-center bg-surface-container-low px-4 py-2 rounded-full border border-outline-variant w-80">
<span class="material-symbols-outlined text-outline">search</span>
<input class="bg-transparent border-none focus:ring-0 text-body-md w-full ml-2" placeholder="Cari buah segar..." type="text"/>
</div>
<!-- Actions -->
<div class="flex items-center gap-4">
<button class="relative p-2 scale-95 active:scale-90 transition-transform">
<span class="material-symbols-outlined text-primary">shopping_cart</span>
<span class="absolute top-0 right-0 bg-primary-container text-on-primary-container text-[10px] font-bold w-4 h-4 flex items-center justify-center rounded-full">3</span>
</button>
<button class="p-2 scale-95 active:scale-90 transition-transform">
<span class="material-symbols-outlined text-primary">account_circle</span>
</button>
</div>
</div>
</div>
</nav>
<main class="pt-24 pb-16 px-margin-desktop max-w-container-max mx-auto">
<!-- Breadcrumb -->
<nav aria-label="Breadcrumb" class="flex mb-8 text-on-surface-variant text-label-bold font-label-bold">
<ol class="inline-flex items-center space-x-1 md:space-x-3">
<li class="inline-flex items-center">
<a class="hover:text-primary transition-colors" href="#">Beranda</a>
</li>
<li>
<div class="flex items-center">
<span class="material-symbols-outlined text-sm">chevron_right</span>
<span class="ml-1 text-primary">Katalog</span>
</div>
</li>
</ol>
</nav>
<div class="flex flex-col md:flex-row gap-gutter">
<!-- Sidebar Filters -->
<!-- Main Content Area -->
<section class="flex-1">
<!-- Header -->
<div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
<div>
<h1 class="text-headline-md font-headline-md text-on-background">Semua Produk</h1>
<p class="text-on-surface-variant font-body-md">Menampilkan 12 dari 120 produk</p>
</div>
<div class="flex items-center gap-2 bg-surface-container-low px-4 py-2 rounded-full border border-outline-variant">
<span class="text-label-bold font-label-bold text-on-surface-variant">Urutkan:</span>
<select class="bg-transparent border-none focus:ring-0 font-label-bold text-primary p-0 cursor-pointer">
<option>Terpopuler</option>
<option>Harga Terendah</option>
<option>Harga Tertinggi</option>
<option>Terbaru</option>
</select>
</div>
</div>
<!-- Product Grid -->
<div class="catalog-grid">
<!-- Product Card 1 -->
<div class="group bg-surface-container-lowest rounded-3xl p-4 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col h-full border border-surface-container">
<div class="relative overflow-hidden rounded-2xl aspect-square mb-4 bg-orange-50">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="A vibrant macro photograph of a fresh, glowing Red Gala apple with water droplets resting on its smooth skin. The lighting is warm and sun-drenched, reminiscent of a bright morning in an orchard. The style is ultra-high definition and commercial-ready, set against a clean, minimal light-mode studio background that highlights the apple's organic curves and intense color." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDSTtQRlSS5N7MZNngqa_Y1SszcWrkHwKHBmvKVCB1bUlX7G9cKI_4EasOcJcJmJS5a-yipV3KcAwNzi-S2ayxX0cQo_kayw9X28Ndx22ZXCpcYOj_4AWL3zufaDdudzPXDG7ZYxbBeKEyAnJ926qvv31696pXUDTKrjiNdm9pvjZ5EzJaj77lj1WYfxpqR5CU59oCnxmrUJwuG7SqgWoi9ZzYcblxKmnp9oVWKqwSXr9RCl9Nxmw1qOunnHzfQ1a73KxsK5i5FoA"/>
<div class="absolute top-2 left-2 bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-label-bold font-label-bold">Organik</div>
</div>
<div class="flex-1">
<h3 class="font-headline-sm text-[18px] text-on-background mb-1">Apel Merah Gala</h3>
<p class="text-on-surface-variant font-body-md mb-2 text-sm">Berat: 1kg / ±5-6 Buah</p>
<div class="flex items-baseline gap-1">
<span class="text-primary font-bold text-headline-sm">Rp 45.000</span>
</div>
</div>
<button class="mt-4 w-full bg-primary-container text-on-primary-container py-3 rounded-full font-label-bold flex items-center justify-center gap-2 hover:bg-primary hover:text-on-primary transition-all active:scale-95">
<span class="material-symbols-outlined">add_shopping_cart</span>
                            Tambah ke Keranjang
                        </button>
</div>
<!-- Product Card 2 -->
<div class="group bg-surface-container-lowest rounded-3xl p-4 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col h-full border border-surface-container">
<div class="relative overflow-hidden rounded-2xl aspect-square mb-4 bg-yellow-50">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="A close-up high-resolution shot of fresh, plump Sunkist oranges displayed on a rustic wooden texture. The lighting is energetic and vibrant, suggesting a high-end gourmet market aesthetic. The oranges have a bright, textured peel, and a few green leaves are visible, adding a touch of natural freshness. The overall mood is wholesome and appetizing." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCgPNtNCl2XquWWLvTLPN_UG2BxXm3ujgEn0bo2aI3WUJQX53z9IsL0LIXFvoNs8Hr1-YihtIXhpLtJE569OL5sPFnEP3l5ySp0wtMJUT5eP9Jed7ktjJHLmMr_7ftE9yYWJoQeGpckG2Ckm9AeCJ29AP2QF9XK8loPTYI68hOn3QG3iXsFJkZYEp5BRnFBsaqguN8KPwa4KYIjwu5cgNFSBi_IbEF9p93aI0IX4rkZZa4n3OaPSreQXbYmH6NWmEVeCxAvD2f9Ow"/>
<div class="absolute top-2 left-2 bg-primary-fixed text-on-primary-fixed px-3 py-1 rounded-full text-label-bold font-label-bold">Lokal</div>
</div>
<div class="flex-1">
<h3 class="font-headline-sm text-[18px] text-on-background mb-1">Jeruk Sunkist</h3>
<p class="text-on-surface-variant font-body-md mb-2 text-sm">Berat: 1kg / ±4 Buah</p>
<div class="flex items-baseline gap-1">
<span class="text-primary font-bold text-headline-sm">Rp 38.000</span>
</div>
</div>
<button class="mt-4 w-full bg-primary-container text-on-primary-container py-3 rounded-full font-label-bold flex items-center justify-center gap-2 hover:bg-primary hover:text-on-primary transition-all active:scale-95">
<span class="material-symbols-outlined">add_shopping_cart</span>
                            Tambah ke Keranjang
                        </button>
</div>
<!-- Product Card 3 -->
<div class="group bg-surface-container-lowest rounded-3xl p-4 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col h-full border border-surface-container">
<div class="relative overflow-hidden rounded-2xl aspect-square mb-4 bg-purple-50">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="A professional studio photograph of a bunch of deep purple, seedless grapes. The grapes are glossy and look chilled, with a faint frosty mist around them. The composition is elegant and focused, using high-key lighting to emphasize the rich, translucent colors. The visual style is clean, modern, and high-contrast, perfectly fitting a premium fresh fruit catalog." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAdaf3nd7AIApHLBlsaar1emh6mWcxyzpP9srBrP4dciNv4rKzcefYrWPXOPl07MJAW9vXwS-npMRGoZFqFCBqIT0olJg8SVJ2V3econ3TpgUFMFfZz_AIUe9JLFeFXs4SGeWp1Wn_jMFyEWvyQUopJEX3tESOXS9Z3oQbCI65AieQ9yA3xYf0TOWzA6rNtiByDc5_p1_XedohAhgUhJ92RTKn_CmSwn6xaoa1_ECp0wCN-eZO_GNT7EiYDAAQZbdIQgVJipjlPrA"/>
<div class="absolute top-2 left-2 bg-tertiary-container text-on-tertiary-container px-3 py-1 rounded-full text-label-bold font-label-bold">Impor</div>
</div>
<div class="flex-1">
<h3 class="font-headline-sm text-[18px] text-on-background mb-1">Anggur Hitam Tanpa Biji</h3>
<p class="text-on-surface-variant font-body-md mb-2 text-sm">Berat: 500g / Pack</p>
<div class="flex items-baseline gap-1">
<span class="text-primary font-bold text-headline-sm">Rp 62.000</span>
</div>
</div>
<button class="mt-4 w-full bg-primary-container text-on-primary-container py-3 rounded-full font-label-bold flex items-center justify-center gap-2 hover:bg-primary hover:text-on-primary transition-all active:scale-95">
<span class="material-symbols-outlined">add_shopping_cart</span>
                            Tambah ke Keranjang
                        </button>
</div>
<!-- Product Card 4 -->
<div class="group bg-surface-container-lowest rounded-3xl p-4 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col h-full border border-surface-container">
<div class="relative overflow-hidden rounded-2xl aspect-square mb-4 bg-green-50">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="A detailed, appetizing shot of a perfectly ripe Hass avocado, sliced in half to show the creamy green flesh and the large central stone. The setting is a minimalist, light-toned kitchen counter. Soft, natural light falls from the side, creating delicate shadows and highlighting the pebbly texture of the dark skin. The image is clean and vibrant, following a wholesome organic aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7uGUKXx57JWcPekk3C0KD6BGMwwt3Hxxp52NQeYUDXBpGz508zy0ygfwZnxgJOTsJvyj5MVGeqChLOJbtgGLdDft3PdryNLT5TQ_NLMvpVFdZrTIDA1hXNT23nVbCMm9VFGyaOsrTKBCln3VpfwJj8xr-W-aG4Ym4cGF_a7NV9RAKsHYmWyPQm4ka_FtkAzoEf_9LTFTthvLpxBMOUev1GpcD3YY5HOH8jlq-0oB7x9NCe_4a0Nt39cgsD14pAO9KvJtIswAZ1A"/>
<div class="absolute top-2 left-2 bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-label-bold font-label-bold">Musiman</div>
</div>
<div class="flex-1">
<h3 class="font-headline-sm text-[18px] text-on-background mb-1">Alpukat Mentega</h3>
<p class="text-on-surface-variant font-body-md mb-2 text-sm">Berat: 1kg / ±3 Buah</p>
<div class="flex items-baseline gap-1">
<span class="text-primary font-bold text-headline-sm">Rp 55.000</span>
</div>
</div>
<button class="mt-4 w-full bg-primary-container text-on-primary-container py-3 rounded-full font-label-bold flex items-center justify-center gap-2 hover:bg-primary hover:text-on-primary transition-all active:scale-95">
<span class="material-symbols-outlined">add_shopping_cart</span>
                            Tambah ke Keranjang
                        </button>
</div>
<!-- Repeat for 6 more cards (Simulated for layout) -->
<!-- Product Card 5 -->
<div class="group bg-surface-container-lowest rounded-3xl p-4 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col h-full border border-surface-container">
<div class="relative overflow-hidden rounded-2xl aspect-square mb-4 bg-red-50">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="A pile of brilliant red strawberries in a small white ceramic bowl. Each berry is speckled with tiny seeds and topped with a fresh green crown. The lighting is crisp and bright, making the red pop against the neutral background. The visual style is fresh, clean, and highly commercial, emphasizing quality and taste for a gourmet fruit service." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAbQuW4PcsrgRb7DoD3WuaW_6RPiFpaHqbXfrZkRyh-ZG54jWFG-A3yf4UlgsXp0H5n1nfw7_3ftjO_Nfa1OOvlzjk3NxNTkdWk2Ft2RXatbuvHTWi4fNgCiTA9lUe836G5KYibHxzmbd8_kYbis71KoSVM2JLUmwybLpxDtx4q0GiJ7tiXX_N8uHSnD7kMpV9r8h6QB9JJ8lL30-pq0whHQH7SzXsnsnPPG2jCN5tJDVdhdy1V1vTIwS1o1etKkmxv1hvuFUNzww"/>
<div class="absolute top-2 left-2 bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full text-label-bold font-label-bold">Organik</div>
</div>
<div class="flex-1">
<h3 class="font-headline-sm text-[18px] text-on-background mb-1">Stroberi Korea</h3>
<p class="text-on-surface-variant font-body-md mb-2 text-sm">Berat: 250g / Pack</p>
<div class="flex items-baseline gap-1">
<span class="text-primary font-bold text-headline-sm">Rp 89.000</span>
</div>
</div>
<button class="mt-4 w-full bg-primary-container text-on-primary-container py-3 rounded-full font-label-bold flex items-center justify-center gap-2 hover:bg-primary hover:text-on-primary transition-all active:scale-95">
<span class="material-symbols-outlined">add_shopping_cart</span>
                            Tambah ke Keranjang
                        </button>
</div>
<!-- Product Card 6 -->
<div class="group bg-surface-container-lowest rounded-3xl p-4 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col h-full border border-surface-container">
<div class="relative overflow-hidden rounded-2xl aspect-square mb-4 bg-blue-50">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Fresh, plump blueberries arranged artistically on a light grey stone surface. Some berries are dusted with a natural silvery bloom. The lighting is soft and diffused, creating a serene, premium feel. The color palette is composed of cool blues and greys, punctuated by the vibrant indigo of the fruit. The overall aesthetic is modern, healthy, and high-end." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC862q5yvUhmcwfyGIyEQgZLuHoPGNSI44jGDcBUmL2CtJIqFbvnAAZRlpliRgU9O0KENedzVdIswOaNdzsDjApwRXnR2ZyCMU2ZWRgUpOJaqI6udvVZ4P326bAK7dsOuA-rfilZEZGjvY62Y522SRFqH1SCIQjEoSqcRmgDPh-l4VSTwOuqzmj5cOn3IEwfqa4_14Hk4TOdxUPyth1y3c0r96lTJC1UF3o0-CdY0Ytoo-2a3qUy36S17hfQZNq43HeB3pt1ScusQ"/>
<div class="absolute top-2 left-2 bg-tertiary-container text-on-tertiary-container px-3 py-1 rounded-full text-label-bold font-label-bold">Premium</div>
</div>
<div class="flex-1">
<h3 class="font-headline-sm text-[18px] text-on-background mb-1">Blueberry Segar</h3>
<p class="text-on-surface-variant font-body-md mb-2 text-sm">Berat: 125g / Pack</p>
<div class="flex items-baseline gap-1">
<span class="text-primary font-bold text-headline-sm">Rp 42.000</span>
</div>
</div>
<button class="mt-4 w-full bg-primary-container text-on-primary-container py-3 rounded-full font-label-bold flex items-center justify-center gap-2 hover:bg-primary hover:text-on-primary transition-all active:scale-95">
<span class="material-symbols-outlined">add_shopping_cart</span>
                            Tambah ke Keranjang
                        </button>
</div>
</div>
<!-- Pagination -->
<div class="mt-16 flex justify-center items-center gap-2">
<button class="w-10 h-10 flex items-center justify-center rounded-full border border-outline-variant hover:bg-surface-container hover:text-primary transition-colors">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="w-10 h-10 flex items-center justify-center rounded-full bg-primary text-on-primary font-bold">1</button>
<button class="w-10 h-10 flex items-center justify-center rounded-full border border-outline-variant hover:bg-surface-container hover:text-primary transition-colors">2</button>
<button class="w-10 h-10 flex items-center justify-center rounded-full border border-outline-variant hover:bg-surface-container hover:text-primary transition-colors">3</button>
<span class="px-2 text-outline">...</span>
<button class="w-10 h-10 flex items-center justify-center rounded-full border border-outline-variant hover:bg-surface-container hover:text-primary transition-colors">10</button>
<button class="w-10 h-10 flex items-center justify-center rounded-full border border-outline-variant hover:bg-surface-container hover:text-primary transition-colors">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</section>
</div>
</main>
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
<script src="/public/assets/js/catalog.js"></script>
</body></html>