<!DOCTYPE html><html class="light" lang="en" style="width: 1280px; height: 1295px; overflow: hidden; position: relative;"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>User Profile | FruityView</title>

<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700;800&amp;family=Work+Sans:wght@400;500&amp;display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "outline-variant": "#ddc1ae",
                    "outline": "#8a7362",
                    "on-surface-variant": "#564334",
                    "surface-container-highest": "#e3e3de",
                    "on-tertiary-container": "#4a3d00",
                    "primary-container": "#ff8a00",
                    "error-container": "#ffdad6",
                    "primary-fixed": "#ffdcc4",
                    "on-primary-fixed-variant": "#6f3900",
                    "on-secondary-fixed": "#002204",
                    "inverse-surface": "#2f312e",
                    "secondary-fixed": "#94f990",
                    "on-surface": "#1a1c19",
                    "error": "#ba1a1a",
                    "surface-variant": "#e3e3de",
                    "surface": "#fafaf4",
                    "secondary-fixed-dim": "#78dc77",
                    "tertiary-fixed-dim": "#e9c400",
                    "primary-fixed-dim": "#ffb77f",
                    "on-error": "#ffffff",
                    "surface-container-high": "#e8e8e3",
                    "surface-container": "#eeeee9",
                    "primary": "#914c00",
                    "secondary-container": "#91f78e",
                    "on-primary-fixed": "#2f1500",
                    "on-secondary": "#ffffff",
                    "on-tertiary-fixed-variant": "#544600",
                    "background": "#fafaf4",
                    "on-primary": "#ffffff",
                    "tertiary-container": "#c7a600",
                    "on-tertiary-fixed": "#221b00",
                    "secondary": "#006e1c",
                    "inverse-primary": "#ffb77f",
                    "on-error-container": "#93000a",
                    "surface-bright": "#fafaf4",
                    "inverse-on-surface": "#f1f1ec",
                    "on-secondary-container": "#00731e",
                    "on-primary-container": "#613100",
                    "on-background": "#1a1c19",
                    "surface-container-lowest": "#ffffff",
                    "surface-container-low": "#f4f4ee",
                    "tertiary-fixed": "#ffe170",
                    "surface-tint": "#914c00",
                    "on-tertiary": "#ffffff",
                    "surface-dim": "#dadad5",
                    "on-secondary-fixed-variant": "#005313",
                    "tertiary": "#705d00"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "unit": "8px",
                    "gutter": "24px",
                    "margin-mobile": "20px",
                    "margin-desktop": "64px",
                    "container-max": "1280px"
            },
            "fontFamily": {
                    "label-bold": ["Plus Jakarta Sans"],
                    "body-md": ["Work Sans"],
                    "body-lg": ["Work Sans"],
                    "headline-sm": ["Plus Jakarta Sans"],
                    "headline-md": ["Plus Jakarta Sans"],
                    "display-lg": ["Plus Jakarta Sans"]
            },
            "fontSize": {
                    "label-bold": ["14px", {"lineHeight": "20px", "fontWeight": "700"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                    "headline-sm": ["24px", {"lineHeight": "32px", "fontWeight": "700"}],
                    "headline-md": ["32px", {"lineHeight": "40px", "fontWeight": "700"}],
                    "display-lg": ["56px", {"lineHeight": "64px", "letterSpacing": "-0.02em", "fontWeight": "800"}]
            }
          },
        },
      }
    </script>
<link rel="stylesheet" href="/public/assets/css/profile.css">
</head>
<body class="bg-background text-on-background font-body-md min-h-screen">
<header class="sticky top-0 w-full z-50 bg-surface/80 backdrop-blur-md shadow-[0_4px_20px_rgba(145,76,0,0.1)]">
<div class="flex justify-between items-center h-16 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
<div class="flex items-center gap-8">
<span class="font-headline-sm text-headline-sm font-extrabold text-primary">FruityView</span>
</div>
<div class="flex items-center gap-4">
<div class="w-8 h-8 rounded-full overflow-hidden border border-outline-variant">

</div>
</div>
</div>
</header>
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-12 flex flex-col lg:flex-row gap-12">

<aside class="lg:w-64 flex-shrink-0">
<div class="bg-surface border border-outline-variant rounded-2xl p-4 sticky top-28">
<div class="flex items-center gap-3 mb-8 px-2">
<div class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center text-on-primary-container">
<span class="material-symbols-outlined" style="font-variation-settings: &quot;FILL&quot; 1;">person</span>
</div>
<div>
<p class="font-label-bold text-label-bold text-on-surface">Siska Maharani</p>
<p class="text-xs text-on-surface-variant">Fresh Member</p>
</div>
</div>
<nav class="space-y-1"><a class="flex items-center gap-3 text-on-surface-variant hover:text-primary px-4 py-3 rounded-xl font-body-md transition-all active:scale-98" href="#">
<span class="material-symbols-outlined">home</span>
<span class="font-body-md text-body-md">Beranda</span>
</a>
<a class="flex items-center gap-3 bg-primary-container text-on-primary-container px-4 py-3 rounded-xl font-bold transition-all active:scale-98" href="#">
<span class="material-symbols-outlined active-nav">person</span>
<span class="font-body-md text-body-md">My Profile</span>
</a>

<div class="pt-8 px-4">

<button class="w-full mt-4 border border-outline text-on-surface-variant font-label-bold text-label-bold py-3 rounded-full shadow-sm hover:bg-surface-container-low active:scale-95 transition-all flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-sm">logout</span>
Logout
</button></div>
</nav>
</div>
</aside>

<main class="flex-grow">
<header class="mb-8">
<h1 class="font-headline-md text-headline-md text-primary mb-2">Informasi Akun Anda</h1>
<p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">Kelola detail profil, informasi kontak, dan lihat riwayat aktivitas belanja Anda di satu tempat yang aman.</p>
</header>

<section class="bg-surface-container-lowest border border-outline-variant rounded-3xl p-6 md:p-8 mb-10 shadow-sm transition-all hover:shadow-md">
<div class="flex flex-col md:flex-row gap-8 items-start">

<div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-6 flex-grow"><div>
<p class="text-xs font-label-bold text-primary uppercase tracking-wider mb-1">Nama Lengkap</p>
<p class="font-headline-sm text-headline-sm text-on-surface">Siska Maharani</p>
</div>
<div>
<p class="text-xs font-label-bold text-primary uppercase tracking-wider mb-1">Alamat Email</p>
<p class="font-body-lg text-body-lg text-on-surface">siska.maharani@fruityview.com</p>
</div>
<div>
<p class="text-xs font-label-bold text-primary uppercase tracking-wider mb-1">Nomor Telepon</p>
<p class="font-body-lg text-body-lg text-on-surface">+62 812 3456 7890</p>
</div>
<div>
<p class="text-xs font-label-bold text-primary uppercase tracking-wider mb-1">Tanggal Bergabung</p>
<p class="font-body-lg text-body-lg text-on-surface">12 Januari 2023</p>
</div></div>
</div>
</section>

<section class="grid grid-cols-1 md:grid-cols-3 gap-6">
</section>
</main>
</div>

<footer class="w-full py-12 bg-surface-container-lowest border-t border-outline-variant mt-24">
<div class="w-full px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto flex flex-col md:flex-row justify-between items-center gap-8">
<div class="text-center md:text-left">
<span class="font-headline-sm text-headline-sm text-primary block mb-2">FruityView</span>
<p class="text-on-surface-variant font-body-md text-body-md">© 2024 FruityView Marketplace. Stay Fresh.</p>
</div>
<div class="flex gap-8">




</div>
</div>
</footer>

<nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 py-2 pb-safe lg:hidden bg-surface/90 backdrop-blur-lg shadow-lg rounded-t-xl">
<a class="flex flex-col items-center justify-center text-on-surface-variant hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined">home</span>
<span class="text-[10px] font-label-bold">Home</span>
</a>
<a class="flex flex-col items-center justify-center text-on-surface-variant hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined">history</span>
<span class="text-[10px] font-label-bold">Orders</span>
</a>
<a class="flex flex-col items-center justify-center text-on-surface-variant hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined">shopping_cart</span>
<span class="text-[10px] font-label-bold">Cart</span>
</a>
<a class="flex flex-col items-center justify-center bg-primary-container text-on-primary-container rounded-full px-4 py-1" href="#">
<span class="material-symbols-outlined active-nav">person</span>
<span class="text-[10px] font-label-bold">Profile</span>
</a>
</nav>
<script src="/public/assets/js/profile.js"></script>


</body></html>