<!DOCTYPE html><html class="light" lang="id" style=""><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>FruityView - Masuk</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700;800&amp;family=Work+Sans:wght@400;500;600&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100..900&amp;family=Work+Sans:wght@100..900&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="/public/assets/css/login.css">
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "background": "#fafaf4",
                        "secondary-container": "#91f78e",
                        "on-tertiary-fixed-variant": "#544600",
                        "inverse-primary": "#ffb77f",
                        "outline-variant": "#ddc1ae",
                        "on-surface-variant": "#564334",
                        "tertiary": "#705d00",
                        "on-background": "#1a1c19",
                        "secondary-fixed": "#94f990",
                        "surface-container": "#eeeee9",
                        "inverse-surface": "#2f312e",
                        "surface-variant": "#e3e3de",
                        "surface-container-highest": "#e3e3de",
                        "surface-tint": "#914c00",
                        "primary-container": "#ff8a00",
                        "on-secondary-fixed": "#002204",
                        "on-error-container": "#93000a",
                        "on-primary-fixed-variant": "#6f3900",
                        "surface-container-low": "#f4f4ee",
                        "surface-bright": "#fafaf4",
                        "on-tertiary-container": "#4a3d00",
                        "surface-container-high": "#e8e8e3",
                        "on-primary": "#ffffff",
                        "primary-fixed-dim": "#ffb77f",
                        "surface": "#fafaf4",
                        "error": "#ba1a1a",
                        "outline": "#8a7362",
                        "on-secondary": "#ffffff",
                        "on-surface": "#1a1c19",
                        "on-error": "#ffffff",
                        "tertiary-fixed-dim": "#e9c400",
                        "primary": "#914c00",
                        "tertiary-container": "#c7a600",
                        "tertiary-fixed": "#ffe170",
                        "on-tertiary": "#ffffff",
                        "secondary": "#006e1c",
                        "surface-dim": "#dadad5",
                        "on-secondary-fixed-variant": "#005313",
                        "on-primary-container": "#613100",
                        "inverse-on-surface": "#f1f1ec",
                        "primary-fixed": "#ffdcc4",
                        "on-tertiary-fixed": "#221b00",
                        "on-secondary-container": "#00731e",
                        "surface-container-lowest": "#ffffff",
                        "secondary-fixed-dim": "#78dc77",
                        "error-container": "#ffdad6",
                        "on-primary-fixed": "#2f1500"
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
                        "container-max": "1280px",
                        "gutter": "24px",
                        "unit": "8px"
                    },
                    "fontFamily": {
                        "headline-sm": ["Plus Jakarta Sans"],
                        "display-lg": ["Plus Jakarta Sans"],
                        "body-lg": ["Work Sans"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "display-lg-mobile": ["Plus Jakarta Sans"],
                        "label-bold": ["Plus Jakarta Sans"],
                        "body-md": ["Work Sans"]
                    },
                    "fontSize": {
                        "headline-sm": ["24px", {"lineHeight": "32px", "fontWeight": "700"}],
                        "display-lg": ["56px", {"lineHeight": "64px", "letterSpacing": "-0.02em", "fontWeight": "800"}],
                        "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                        "headline-md": ["32px", {"lineHeight": "40px", "fontWeight": "700"}],
                        "display-lg-mobile": ["40px", {"lineHeight": "48px", "letterSpacing": "-0.01em", "fontWeight": "800"}],
                        "label-bold": ["14px", {"lineHeight": "20px", "fontWeight": "700"}],
                        "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}]
                    }
                },
            },
        }
    </script>
</head>
<body class="bg-background font-body-md text-on-background min-h-screen flex flex-col selection:bg-primary-container selection:text-on-primary-container">
<!-- Minimalist Navigation Shell -->
<nav class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-md shadow-sm">
<div class="flex justify-between items-center max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-4">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-headline-sm" data-icon="nutrition">nutrition</span>
<span class="font-headline-sm text-headline-sm font-extrabold text-primary">FruityView</span>
</div>
<!-- Back button for mobile context -->
<button class="md:hidden p-2 text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="close">close</span>
</button>
</div>
</nav>
<!-- Main Content: Split Screen Layout -->
<main class="flex-grow flex pt-16 md:pt-0">
<div class="flex w-full min-h-screen">
<!-- Left Side: Login Form Canvas -->
<section class="w-full lg:w-1/2 flex items-center justify-center p-margin-mobile md:p-margin-desktop bg-background relative overflow-hidden">
<!-- Floating Organic Background Decor -->
<div class="absolute -top-20 -left-20 w-64 h-64 bg-primary-fixed opacity-20 organic-shape blur-3xl animate-pulse"></div>
<div class="absolute -bottom-20 -right-20 w-80 h-80 bg-secondary-fixed opacity-20 organic-shape blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
<div class="w-full max-w-md relative z-10">
<!-- Heading Group -->
<div class="mb-10 text-center lg:text-left">
<h1 class="font-display-lg-mobile lg:font-display-lg text-display-lg-mobile lg:text-display-lg text-primary mb-4 tracking-tight">Selamat Datang Kembali</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">Masuk ke akun FruityView Anda untuk melanjutkan akses distribusi buah segar.</p>
</div>
<!-- Login Form -->
<form class="space-y-6" onsubmit="event.preventDefault();">
<div class="space-y-1.5">
<label class="font-label-bold text-label-bold text-on-surface-variant block ml-1" for="email">Alamat Email</label>
<div class="relative group">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors" data-icon="mail">mail</span>
<input class="w-full pl-12 pr-4 py-4 rounded-xl border-2 border-outline-variant bg-surface-container-lowest focus:border-primary focus:ring-0 transition-all font-body-md text-on-surface outline-none shadow-sm hover:shadow-md" id="email" placeholder="nama@email.com" type="email">
</div>
</div>
<div class="space-y-1.5">
<div class="flex justify-between items-center px-1">
<label class="font-label-bold text-label-bold text-on-surface-variant block" for="password">Kata Sandi</label>
<a class="font-label-bold text-label-bold text-primary hover:underline transition-all forgot-password" href="/app/Views/forgot-password/forgot-password.php">Lupa Kata Sandi?</a>
</div>
<div class="relative group">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors" data-icon="lock">lock</span>
<input class="w-full pl-12 pr-12 py-4 rounded-xl border-2 border-outline-variant bg-surface-container-lowest focus:border-primary focus:ring-0 transition-all font-body-md text-on-surface outline-none shadow-sm hover:shadow-md" id="password" placeholder="••••••••" type="password">
<button class="absolute right-4 top-1/2 -translate-y-1/2 text-outline hover:text-on-surface-variant transition-colors" type="button">
<span class="material-symbols-outlined" data-icon="visibility">visibility</span>
</button>
</div>
</div>
<!-- CTA Button -->
<button class="w-full bg-primary-container text-on-primary-container py-4 rounded-full font-label-bold text-body-lg shadow-lg hover:shadow-primary-container/30 hover:-translate-y-0.5 active:scale-95 transition-all flex justify-center items-center gap-2 group">
<span class="">Log In</span>
<span class="material-symbols-outlined group-hover:translate-x-1 transition-transform" data-icon="arrow_forward">arrow_forward</span>
</button>
<!-- Divider -->
<div class="relative flex items-center py-4">
<div class="flex-grow border-t border-outline-variant"></div>
<span class="flex-shrink mx-4 font-label-bold text-outline text-label-bold">atau</span>
<div class="flex-grow border-t border-outline-variant"></div>
</div>
<!-- Social Login -->
<button class="w-full flex items-center justify-center gap-3 py-4 border-2 border-outline-variant rounded-full font-label-bold text-body-md text-on-surface-variant bg-surface-container-lowest hover:bg-surface-container-low hover:border-primary/30 transition-all shadow-sm active:scale-95">
<img alt="Google Logo" class="w-6 h-6" src="https://www.gstatic.com/images/branding/product/1x/googleg_48dp.png">
<span class="">Continue with Google</span>
</button>
</form>
<!-- Footer Link -->
<p class="mt-10 text-center font-body-md text-body-md text-on-surface-variant">
                        Belum punya akun? 
                        <a class="font-label-bold text-primary hover:underline ml-1 register-link" href="/app/Views/register/register.php">Daftar sekarang</a>
</p>
</div>
</section>
<!-- Right Side: Visual Brand Experience -->
<section class="hidden lg:block lg:w-1/2 relative bg-secondary-container">
<div class="absolute inset-0 bg-cover bg-center" data-alt="A macro overhead shot of vibrant, sliced citrus fruits like oranges, blood oranges, and limes arranged in an artistic, modern organic pattern. The lighting is high-key and sun-drenched, emphasizing the glistening, juicy texture of the fruit segments. The overall aesthetic is fresh, energetic, and wholesome, using a color palette of bright oranges, deep greens, and warm yellows to create a sensory, appetite-stimulating experience consistent with a premium farmers market brand." style="background-image: url(&quot;https://lh3.googleusercontent.com/aida-public/AB6AXuD_tLNAEaR-TDUzllXl80_azizl8JJ0YbGeT_VjmypOWKQlM-89qOrW2tfLO7d5flwVLleOXXWH2maj02EwqN3RSI-3cG40XWp1mZT2G-E1GczQorAHY2Y4exFvITDPYZj25l7G9BTXoKsTqa5Df7Np5jSQ5vMvsJnx_ioQuaG7qIcBvvDp6iGIZ_QXKZzVb4aHxPVP0nmHeUy82SwGOHu_2EQBSGHzV4BXoDk8MQGlOamRmuodfh9n8-GcT_VqvdUwkSoDzrmN5Brl&quot;);">
<!-- Subtle Glass Overlay for depth -->
<div class="absolute inset-0 bg-gradient-to-tr from-primary/30 via-transparent to-secondary/20"></div>
</div>
<!-- Floating Product Badge / Social Proof -->

<!-- Animated Atmospheric Effect -->

</section>
</div>
</main>
<!-- Simple Footer -->
<footer class="bg-surface-container py-8 px-margin-mobile md:px-margin-desktop">
<div class="max-w-container-max mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
<p class="font-body-md text-body-md text-on-surface-variant">© 2024 FruityView Markets. Hak cipta dilindungi undang-undang.</p>
<div class="flex gap-6">
<a class="font-label-bold text-label-bold text-outline hover:text-primary transition-colors" href="#">Syarat &amp; Ketentuan</a>
<a class="font-label-bold text-label-bold text-outline hover:text-primary transition-colors" href="#">Kebijakan Privasi</a>
<a class="font-label-bold text-label-bold text-outline hover:text-primary transition-colors" href="#">Hubungi Kami</a>
</div>
</div>
</footer>
<script src="/public/assets/js/login.js"></script>

</body></html>