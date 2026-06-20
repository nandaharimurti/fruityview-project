<!DOCTYPE html>
<html lang="id" class="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FruityView | Kesegaran Alam Langsung ke Meja Anda</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@700;800&family=Work+Sans:wght@400;500;700&display=swap">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap">

    <link rel="stylesheet" href="/app/Views/assets/css/LandingPage.css">

    <script src="/app/Views/assets/js/tailwind-config.js"></script>
</head>

<body class="bg-surface text-on-surface font-body-md selection:bg-primary-container selection:text-on-primary-container">

    <!-- Navbar -->
    <nav class="w-full bg-surface/0 backdrop-blur-md shadow-sm sticky top-0 z-5">
    <div class="flex items-center max-w-container-max mx-auto px-margin-desktop py-4">

        <!-- Logo -->
            <a href="#" class="flex items-center gap-2 font-display-lg text-display-lg font-extrabold text-primary">
            FruityView
        </a>

        <!-- Dorong menu ke kanan -->
            <div class="ml-auto flex items-center space-x-6">

            <!-- Login -->
                <a href="index.php?page=login" class="inline-block bg-primary-container text-on-primary-container px-4 py-2 rounded-full font-label-bold text-body-md hover:shadow-md">
                    Login
                </a>

        </div>

    </div>
</nav>

    <!-- Hero Section -->
    <main>

        <section class="relative min-h-screen flex items-center overflow-hidden">

            <div class="absolute inset-0 z-0">
                <img
            src="/app/Views/assets/image/foto landing.png"
            alt="Buah Segar"
            class="w-full h-full object-cover">

                <div class="absolute inset-0 bg-gradient-to-r from-surface via-surface/60 to-transparent"></div>
            </div>

            <div class="relative z-10 max-w-container-max mx-auto px-margin-desktop w-full grid grid-cols-1 md:grid-cols-2 gap-gutter">

                <div class="flex flex-col justify-center items-start space-y-6">

                    <span class="bg-secondary-container text-on-secondary-container px-4 py-1 rounded-full font-label-bold text-label-bold uppercase tracking-wider">
                        100% Organik & Segar
                    </span>

                    <h1 class="font-display-lg text-display-lg text-on-surface max-w-xl">
                        Kesegaran Alam <br>
                        <span class="text-primary">Langsung ke Meja Anda</span>
                    </h1>

                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-md">
                        Nikmati buah segar berkualitas premium yang dipetik langsung dari kebun mitra kami dan dikirim ke rumah Anda setiap hari.
                    </p>

                    <div class="flex flex-wrap gap-4 pt-4">
                        <a href="index.php?page=main" class="bg-primary-container text-on-primary-container px-8 py-4 rounded-full font-label-bold text-lg shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 inline-block">
                            Belanja Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-surface-container px-8 py-10">
        <div class="max-w-container-max mx-auto">

            <h5 class="font-label-bold text-on-surface uppercase tracking-wider mb-4">
                Lokasi Kami
            </h5>

            <div class="flex items-start space-x-3 text-on-surface-variant mb-3">
                <span class="material-symbols-outlined">
                    location_on
                </span>
                <p>Jl. Pasar Kaliki No. 86, Kota Bandung </p>
            </div>

            <div class="flex items-center space-x-3 text-on-surface-variant">
                <span class="material-symbols-outlined">
                    call
                </span>
                <p>+62 (21) 555-0123</p>
            </div>

            <div class="mt-4 pt-4 border-t border-outline-variant/30 text-xs text-on-surface-variant">
                © 2026 FruitFresh. Seluruh hak cipta dilindungi.
            </div>

        </div>
    </footer>

    <script src="/app/Views/assets/js/LandingPage.js"></script>

</body>

</html>