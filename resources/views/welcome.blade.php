<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Sirkel Akmal - Kesehatan Holistik Modern</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        secondary: {
                            500: '#8b5cf6',
                            600: '#7c3aed',
                        }
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .text-gradient {
                @apply bg-clip-text text-transparent bg-gradient-to-r from-primary-500 to-secondary-500;
            }
            .animate-float {
                animation: float 6s ease-in-out infinite;
            }
            @keyframes float {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-20px); }
            }
        }
    </style>
</head>
<body class="font-poppins bg-gradient-to-br from-white to-primary-50 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white/80 backdrop-blur-md border-b border-gray-100 fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-r from-primary-500 to-secondary-500 flex items-center justify-center text-white font-bold text-xl">
                            KSA
                        </div>
                        <span class="ml-3 text-xl font-semibold text-gray-900">Klinik Sirkel Akmal</span>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-8">
                        <a href="#" class="text-gray-900 hover:text-primary-600 px-3 py-2 text-sm font-medium">Beranda</a>
                        <a href="#" class="text-gray-900 hover:text-primary-600 px-3 py-2 text-sm font-medium">Layanan</a>
                        <a href="#" class="text-gray-900 hover:text-primary-600 px-3 py-2 text-sm font-medium">Dokter</a>
                        <a href="#" class="text-gray-900 hover:text-primary-600 px-3 py-2 text-sm font-medium">Tentang Kami</a>
                        <a href="#" class="text-gray-900 hover:text-primary-600 px-3 py-2 text-sm font-medium">Kontak</a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/login" class="hidden md:inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-primary-600 hover:bg-primary-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                        Masuk
                    </a>
                    <a href="/register" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-gradient-to-r from-primary-500 to-secondary-500 hover:from-primary-600 hover:to-secondary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                        Daftar
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative pt-28 pb-20 sm:pt-32 sm:pb-28 lg:pt-40 lg:pb-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-center md:text-left">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                        <span class="text-gradient">Kesehatan Holistik</span><br>
                        Untuk Hidup Lebih Berkualitas
                    </h1>
                    <p class="mt-6 text-lg text-gray-600 max-w-lg">
                        Selamat datang di Klinik Sirkel Akmal, tempat di mana kesehatan fisik, mental, dan spiritual bertemu dalam harmoni. Layanan kami dirancang untuk memberikan perawatan komprehensif dengan pendekatan modern.
                    </p>
                    <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                        <a href="#" class="px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gradient-to-r from-primary-500 to-secondary-500 hover:from-primary-600 hover:to-secondary-600 md:py-4 md:text-lg md:px-10">
                            Buat Janji Temu
                        </a>
                        <a href="#" class="px-8 py-3 border border-primary-500 text-base font-medium rounded-md text-primary-600 bg-white hover:bg-primary-50 md:py-4 md:text-lg md:px-10">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
                <div class="relative hidden md:block">
                    <div class="relative w-full h-96 lg:h-[32rem]">
                        <div class="absolute inset-0 bg-gradient-to-br from-primary-100 to-secondary-100 rounded-3xl rotate-6"></div>
                        <div class="absolute inset-0 bg-gradient-to-br from-primary-200 to-secondary-200 rounded-3xl rotate-3"></div>
                        <div class="relative h-full bg-white rounded-3xl shadow-xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80" alt="Doctor consultation" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Mengapa Memilih Kami?
                </h2>
                <p class="mt-4 max-w-2xl text-xl text-gray-600 mx-auto">
                    Klinik Sirkel Akmal menawarkan pengalaman kesehatan yang berbeda dengan pendekatan holistik.
                </p>
            </div>

            <div class="mt-16 grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-3">
                <div class="pt-6">
                    <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8 h-full">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-md shadow-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Pendekatan Holistik</h3>
                            <p class="mt-5 text-base text-gray-500">
                                Kami tidak hanya mengobati gejala, tetapi mencari akar masalah kesehatan Anda dengan mempertimbangkan fisik, mental, dan spiritual.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="pt-6">
                    <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8 h-full">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-md shadow-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Teknologi Modern</h3>
                            <p class="mt-5 text-base text-gray-500">
                                Dilengkapi dengan peralatan medis terkini dan sistem manajemen pasien digital untuk akurasi diagnosis dan kenyamanan Anda.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="pt-6">
                    <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8 h-full">
                        <div class="-mt-6">
                            <div>
                                <span class="inline-flex items-center justify-center p-3 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-md shadow-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </span>
                            </div>
                            <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Tim Profesional</h3>
                            <p class="mt-5 text-base text-gray-500">
                                Dokter dan terapis kami berpengalaman dengan sertifikasi internasional, siap memberikan pelayanan terbaik untuk kesehatan Anda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-primary-500 to-secondary-500">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                <span class="block">Siap memulai perjalanan kesehatan Anda?</span>
                <span class="block text-primary-100">Daftar sekarang untuk konsultasi pertama gratis.</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-white hover:bg-primary-50">
                        Buat Janji
                    </a>
                </div>
                <div class="ml-3 inline-flex rounded-md shadow">
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary-600 bg-opacity-60 hover:bg-opacity-70">
                        Pelajari Lebih
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
                <div>
                    <h3 class="text-sm font-semibold text-gray-500 tracking-wider uppercase">Layanan</h3>
                    <ul class="mt-4 space-y-4">
                        <li>
                            <a href="#" class="text-base text-gray-600 hover:text-primary-500">Konsultasi Dokter</a>
                        </li>
                        <li>
                            <a href="#" class="text-base text-gray-600 hover:text-primary-500">Terapi Holistik</a>
                        </li>
                        <li>
                            <a href="#" class="text-base text-gray-600 hover:text-primary-500">Pemeriksaan Kesehatan</a>
                        </li>
                        <li>
                            <a href="#" class="text-base text-gray-600 hover:text-primary-500">Program Wellness</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-500 tracking-wider uppercase">Perusahaan</h3>
                    <ul class="mt-4 space-y-4">
                        <li>
                            <a href="#" class="text-base text-gray-600 hover:text-primary-500">Tentang Kami</a>
                        </li>
                        <li>
                            <a href="#" class="text-base text-gray-600 hover:text-primary-500">Tim Dokter</a>
                        </li>
                        <li>
                            <a href="#" class="text-base text-gray-600 hover:text-primary-500">Karir</a>
                        </li>
                        <li>
                            <a href="#" class="text-base text-gray-600 hover:text-primary-500">Blog</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-500 tracking-wider uppercase">Bantuan</h3>
                    <ul class="mt-4 space-y-4">
                        <li>
                            <a href="#" class="text-base text-gray-600 hover:text-primary-500">FAQ</a>
                        </li>
                        <li>
                            <a href="#" class="text-base text-gray-600 hover:text-primary-500">Kebijakan Privasi</a>
                        </li>
                        <li>
                            <a href="#" class="text-base text-gray-600 hover:text-primary-500">Syarat & Ketentuan</a>
                        </li>
                        <li>
                            <a href="#" class="text-base text-gray-600 hover:text-primary-500">Hubungi Kami</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-500 tracking-wider uppercase">Tetap Terhubung</h3>
                    <div class="mt-4 flex space-x-6">
                        <a href="#" class="text-gray-500 hover:text-primary-500">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-primary-500">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.023.047 1.351.058 3.807.058h.468c2.456 0 2.784-.011 3.807-.058.975-.045 1.504-.207 1.857-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.047-1.023.058-1.351.058-3.807v-.468c0-2.456-.011-2.784-.058-3.807-.045-.975-.207-1.504-.344-1.857a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-primary-500">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-sm font-semibold text-gray-500 tracking-wider uppercase">Berlangganan Newsletter</h3>
                        <form class="mt-4 sm:flex sm:max-w-md">
                            <label for="email-address" class="sr-only">Alamat Email</label>
                            <input type="email" name="email-address" id="email-address" autocomplete="email" required class="w-full min-w-0 appearance-none rounded-md border border-gray-300 bg-white py-2 px-4 text-base text-gray-900 placeholder-gray-500 focus:border-primary-500 focus:outline-none focus:ring-primary-500" placeholder="Masukkan email Anda">
                            <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                                <button type="submit" class="flex w-full items-center justify-center rounded-md border border-transparent bg-gradient-to-r from-primary-500 to-secondary-500 py-2 px-4 text-base font-medium text-white hover:from-primary-600 hover:to-secondary-600 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">Berlangganan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="mt-12 border-t border-gray-200 pt-8">
                <p class="text-base text-gray-500 text-center">
                    &copy; 2025 Klinik Sirkel Akmal. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>