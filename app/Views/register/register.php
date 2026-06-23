<!DOCTYPE html><html class="scroll-smooth" lang="en" style=""><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Join Orchard Fresh - Create Your Account</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700;800&amp;family=Work+Sans:wght@400;500&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="/public/assets/css/register.css">
</head>
<body class="bg-background text-on-background font-body-md min-h-screen flex flex-col">
<!-- TopNavBar (Suppressed for focused Transactional Page per UX mandate, but user asked for it specifically) -->
<nav class="fixed top-0 w-full z-50 bg-surface/80 dark:bg-surface-dim/80 backdrop-blur-md shadow-sm">
<div class="flex justify-between items-center max-w-container-max mx-auto px-margin-desktop py-4">
<div class="font-headline-sm text-headline-sm font-extrabold text-primary dark:text-primary-fixed-dim">FruityView</div>


</div>
</nav>
<main class="flex-grow pt-24 md:pt-0 flex items-stretch min-h-screen">
<!-- Split Screen Layout -->
<div class="grid lg:grid-cols-2 w-full">
<!-- Branding/Image Side (Left) -->
<div class="hidden lg:flex relative overflow-hidden bg-primary-container items-center justify-center p-20">
<div class="absolute inset-0 z-0">
<div class="w-full h-full bg-cover bg-center scale-110 opacity-80 mix-blend-overlay" data-alt="High-resolution, appetizing macro photography of various organic citrus fruits, berries, and mint leaves scattered on a clean, bright wooden surface. The lighting is bright, sun-drenched and natural, emphasizing textures and vibrant colors like juicy oranges, deep greens, and ruby reds. The overall aesthetic is fresh, wholesome, and premium, aligned with a modern health-conscious brand." style="background-image: url(&quot;https://lh3.googleusercontent.com/aida-public/AB6AXuAt4iKXhQFVg8yMffxOeLo-3IOKeA1_Ktw6i0rM7ykBVeyw_1ALrUOdlo99a6OADnj0mgpkuzVU1GAVOtkIwQLaQfRj8Fi5J_dVt5DbwQ1XG_Rgwt18S88NxjdNnoQCcVEDEyBX9rk5vPmP-aTiHDMD5-NDdGJMc1o4M23OhTBqgXte6YrMopM4769r_jpg7lop6hZJtmLd-QqLXLQBkKWsl_ncYbiCxGRW4l24yM-znYCtBn0TXAk2h6n6EW0HhgmZKF32wF79v6aW&quot;);"></div>
</div>
<div class="relative z-10 text-white max-w-lg">
<div class="mb-8 flex items-center gap-2">
<span class="material-symbols-outlined text-4xl" style="font-variation-settings: &quot;FILL&quot; 1;">eco</span>
<h1 class="font-display-lg text-display-lg text-white">FruityView</h1>
</div>
<h2 class="font-headline-md text-headline-md mb-6 leading-tight">Revolusi Distribusi Buah Segar: Dari Kebun Langsung ke Tangan Anda.</h2>
<p class="font-body-lg text-body-lg text-white/90 leading-relaxed mb-10">Sistem informasi terintegrasi untuk mempermudah akses masyarakat terhadap komoditas buah-buahan berkualitas tinggi dengan transparansi rantai pasok.</p>
<div class="grid grid-cols-2 gap-6">


</div>
</div>
<!-- Floating Decorative Elements -->
<div class="absolute -bottom-20 -right-20 w-80 h-80 bg-secondary-container/30 rounded-full blur-3xl animate-pulse"></div>
<div class="absolute -top-20 -left-20 w-64 h-64 bg-tertiary-container/20 rounded-full blur-2xl"></div>
<div class="absolute bg-white/10 rounded-full blur-xl" style="width: 83.2558px; height: 83.2558px; left: 3.08918%; top: 73.9657%; animation: 5.73685s ease-in-out 0s infinite normal none running pulse;"></div><div class="absolute bg-white/10 rounded-full blur-xl" style="width: 74.9993px; height: 74.9993px; left: 97.4467%; top: 17.2246%; animation: 6.23595s ease-in-out 0s infinite normal none running pulse;"></div><div class="absolute bg-white/10 rounded-full blur-xl" style="width: 108.667px; height: 108.667px; left: 12.9832%; top: 21.8347%; animation: 5.36643s ease-in-out 0s infinite normal none running pulse;"></div><div class="absolute bg-white/10 rounded-full blur-xl" style="width: 126.408px; height: 126.408px; left: 57.2524%; top: 14.9076%; animation: 5.35416s ease-in-out 0s infinite normal none running pulse;"></div><div class="absolute bg-white/10 rounded-full blur-xl" style="width: 58.843px; height: 58.843px; left: 14.834%; top: 88.7396%; animation: 3.52057s ease-in-out 0s infinite normal none running pulse;"></div></div>
<!-- Form Side (Right) -->
<div class="flex items-center justify-center p-6 md:p-12 lg:p-24 bg-surface">
<div class="w-full max-w-md">
<div class="mb-10 text-center lg:text-left">
<div class="lg:hidden flex justify-center mb-6">
<div class="font-headline-sm text-headline-sm font-extrabold text-primary">FruityView</div>
</div>
<h3 class="font-display-lg-mobile text-display-lg-mobile text-on-surface mb-2">Pendaftaran Akun FruityView</h3>
<p class="text-on-surface-variant font-body-md">Bergabunglah dengan platform distribusi buah segar terbaik untuk kemudahan akses nutrisi harian Anda.</p>
</div>
 feature/FV-52-register
<form class="space-y-6" action="/app/Controllers/AuthController.php" method="POST">

<form class="space-y-6" action="../../Controllers/AuthController.php" method="POST">
 main
<input type="hidden" name="action" value="register">
<!-- Full Name -->
<div>
<label class="block font-label-bold text-label-bold text-on-surface mb-2" for="name">Nama Lengkap</label>
<div class="relative group">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">person</span>
<input class="w-full pl-12 pr-4 py-4 bg-surface-container-low border-2 border-transparent rounded-xl font-body-md focus:border-primary focus:ring-0 focus:bg-white transition-all duration-200 outline-none" id="name" name="name" placeholder="Masukkan nama anda" type="text" required>
</div>
</div>
<!-- Email Address -->
<div>
<label class="block font-label-bold text-label-bold text-on-surface mb-2" for="email">Email Address</label>
<div class="relative group">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">mail</span>
<input class="w-full pl-12 pr-4 py-4 bg-surface-container-low border-2 border-transparent rounded-xl font-body-md focus:border-primary focus:ring-0 focus:bg-white transition-all duration-200 outline-none" id="email" name="email" placeholder="john@example.com" type="email" required>
</div>
</div><div class="">
<label class="block font-label-bold text-label-bold text-on-surface mb-2" for="password">Password</label>
<div class="relative group">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">lock</span>
<input class="w-full pl-12 pr-12 py-4 bg-surface-container-low border-2 border-transparent rounded-xl font-body-md focus:border-primary focus:ring-0 focus:bg-white transition-all duration-200 outline-none" id="password" name="password" placeholder="••••••••" type="password" required>
<button id="togglePassword" class="absolute right-4 top-1/2 -translate-y-1/2 text-outline hover:text-on-surface-variant" type="button" aria-label="Toggle password visibility">
<span class="material-symbols-outlined">visibility</span>
</button>
</div>
<p class="mt-2 text-xs text-on-surface-variant">Must be at least 8 characters long.</p>
</div>
<!-- Phone Number -->
<div>
<label class="block font-label-bold text-label-bold text-on-surface mb-2" for="phone">Phone Number</label>
<div class="relative group">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">call</span>
<input class="w-full pl-12 pr-4 py-4 bg-surface-container-low border-2 border-transparent rounded-xl font-body-md focus:border-primary focus:ring-0 focus:bg-white transition-all duration-200 outline-none" id="phone" name="phone" placeholder="+1 (555) 000-0000" type="tel">
</div>
</div><div class="">
<label class="block font-label-bold text-label-bold text-on-surface mb-2" for="dob">Tanggal Lahir</label>
<div class="relative group">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">calendar_today</span>
<input class="w-full pl-12 pr-4 py-4 bg-surface-container-low border-2 border-transparent rounded-xl font-body-md focus:border-primary focus:ring-0 focus:bg-white transition-all duration-200 outline-none" id="dob" name="dob" type="date">
</div>
</div>
<!-- Password -->
<div class="">
<label class="block font-label-bold text-label-bold text-on-surface mb-2" for="address">Alamat</label>
<div class="relative group">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">home</span>
<input class="w-full pl-12 pr-4 py-4 bg-surface-container-low border-2 border-transparent rounded-xl font-body-md focus:border-primary focus:ring-0 focus:bg-white transition-all duration-200 outline-none" id="address" name="address" placeholder="Masukkan alamat" type="text">
</div>
</div><div class="">
<label class="block font-label-bold text-label-bold text-on-surface mb-2" for="zip">Kode Pos</label>
<div class="relative group">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">pin_drop</span>
<input class="w-full pl-12 pr-4 py-4 bg-surface-container-low border-2 border-transparent rounded-xl font-body-md focus:border-primary focus:ring-0 focus:bg-white transition-all duration-200 outline-none" id="zip" name="zip" placeholder="12345" type="text">
</div>
</div>
<!-- Terms -->
<div class="flex items-start gap-3">
<input class="mt-1 w-5 h-5 rounded-md text-secondary border-outline-variant focus:ring-secondary focus:ring-offset-background cursor-pointer" id="terms" name="terms" value="1" type="checkbox">
<label class="text-sm text-on-surface-variant" for="terms">
                                I agree to the <a class="text-primary font-bold hover:underline" href="#">Terms of Service</a> and <a class="text-primary font-bold hover:underline" href="#">Privacy Policy</a>.
                            </label>
</div>
<!-- Sign Up Button -->
<button class="w-full bg-primary-container text-on-primary-fixed font-headline-sm text-headline-sm py-4 rounded-full shadow-lg hover:shadow-xl hover:-translate-y-1 active:scale-95 transition-all duration-200" type="submit">
                            Sign Up
                        </button>
<!-- Social Registration -->
<div class="relative py-4">
<div class="absolute inset-0 flex items-center"><div class="w-full border-t border-outline-variant"></div></div>
<div class="relative flex justify-center text-xs uppercase"><span class="bg-surface px-2 text-on-surface-variant font-label-bold">Or continue with</span></div>
</div>
<div class="grid gap-4 grid-cols-1">
<button class="flex items-center justify-center gap-2 py-3 px-4 rounded-xl border-2 border-outline-variant hover:bg-surface-container-low transition-colors duration-200 font-label-bold text-on-surface bg-surface-container-low"><img alt="Google" class="w-5 h-5" src="https://www.gstatic.com/images/branding/product/1x/gsa_512dp.png"> Continue with Google</button>

</div>

</form>
</div>
</div>
</div>
</main>
<!-- Footer -->

<script src="/public/assets/js/register.js"></script>

</body></html>