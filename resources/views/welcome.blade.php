<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FullstackFlavour | Premium Web Solutions</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|outfit:600,700,800,900&display=swap" rel="stylesheet" />

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'], display: ['Outfit', 'sans-serif'] },
                    colors: { brand: { 400: '#38bdf8', 500: '#0ea5e9', 600: '#0284c7', 900: '#0c4a6e' }, dark: '#0b0f19' },
                    animation: {
                        'blob': 'blob 7s infinite',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        blob: {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
                            '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-dark text-gray-300 font-sans antialiased selection:bg-brand-500 selection:text-white overflow-x-hidden">

    <!-- Glowing Background Orbs (Badass Effect) -->
    <div class="fixed top-0 left-0 w-full h-full overflow-hidden -z-10 pointer-events-none">
        <div class="absolute top-[-10%] left-[-10%] w-96 h-96 bg-brand-600/20 rounded-full mix-blend-screen filter blur-[100px] animate-blob"></div>
        <div class="absolute top-[20%] right-[-10%] w-96 h-96 bg-purple-600/20 rounded-full mix-blend-screen filter blur-[100px] animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-[-20%] left-[20%] w-96 h-96 bg-brand-400/20 rounded-full mix-blend-screen filter blur-[100px] animate-blob animation-delay-4000"></div>
    </div>

    <!-- Navbar Premium Glassmorphism -->
    <nav class="fixed w-full z-50 bg-dark/70 backdrop-blur-xl border-b border-white/10 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center gap-3 group cursor-pointer">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-brand-400 to-brand-600 flex items-center justify-center font-display font-bold text-white text-xl shadow-[0_0_15px_rgba(14,165,233,0.5)] group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">F</div>
                    <span class="font-display font-extrabold text-2xl text-white tracking-tight">Fullstack<span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-400 to-brand-600">Flavour</span></span>
                </div>
                <div class="hidden md:flex space-x-1">
                    <a href="#layanan" class="px-4 py-2 text-sm font-semibold text-gray-300 hover:text-white hover:bg-white/5 rounded-full transition-all">Layanan</a>
                    <a href="#portfolio" class="px-4 py-2 text-sm font-semibold text-gray-300 hover:text-white hover:bg-white/5 rounded-full transition-all">Portfolio</a>
                    <a href="#kontak" class="px-4 py-2 text-sm font-semibold text-gray-300 hover:text-white hover:bg-white/5 rounded-full transition-all">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative pt-40 pb-20 lg:pt-56 lg:pb-32 overflow-hidden flex items-center justify-center min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center flex flex-col items-center">

            <div data-aos="fade-down" data-aos-duration="1000" class="inline-flex items-center gap-3 px-5 py-2.5 rounded-full bg-white/5 border border-white/10 text-brand-400 text-sm font-semibold mb-8 backdrop-blur-md shadow-lg">
                <span class="relative flex h-3 w-3">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-brand-500 shadow-[0_0_10px_rgba(56,189,248,0.8)]"></span>
                </span>
                Menerima Project Baru - Tersedia Q3 2026
            </div>

            <h1 data-aos="zoom-in" data-aos-duration="1200" class="font-display text-6xl md:text-8xl font-black text-white mb-6 leading-[1.1] tracking-tight drop-shadow-2xl">
                Ubah Ide Anda <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-400 via-brand-500 to-purple-500 animate-gradient-x">Menjadi Realitas.</span>
            </h1>

            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" class="mt-4 text-xl md:text-2xl text-gray-400 max-w-3xl mx-auto mb-12 leading-relaxed font-light">
                Spesialis Joki Tugas Web, Pembuatan Landing Page Profesional, hingga Sistem Informasi Skala Enterprise dengan performa tinggi.
            </p>

            <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" class="flex flex-col sm:flex-row justify-center gap-5">
                <a href="#kontak" class="group relative inline-flex items-center justify-center px-8 py-4 font-bold text-white transition-all duration-300 bg-brand-600 rounded-full overflow-hidden shadow-[0_0_40px_rgba(14,165,233,0.4)] hover:shadow-[0_0_60px_rgba(14,165,233,0.6)] hover:scale-105">
                    <span class="absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-black"></span>
                    <span class="relative flex items-center gap-2">Mulai Konsultasi <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg></span>
                </a>
            </div>
        </div>
    </section>

    <!-- Layanan Kami (Services) -->
    <section id="layanan" class="py-24 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20" data-aos="fade-up">
                <h2 class="font-display text-4xl md:text-5xl font-extrabold text-white mb-4">Layanan <span class="text-brand-500">Premium</span></h2>
                <div class="h-1.5 w-24 bg-gradient-to-r from-brand-400 to-brand-600 rounded-full mx-auto mb-6"></div>
                <p class="text-gray-400 text-lg">Solusi teknologi modern yang dirancang khusus untuk mendominasi era digital.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse ($services ?? [] as $index => $service)
                <div data-aos="fade-up" data-aos-delay="{{ $index * 150 }}" class="relative group h-full">
                    <div class="absolute inset-0 bg-gradient-to-r from-brand-600 to-brand-400 rounded-3xl blur-xl opacity-0 group-hover:opacity-20 transition duration-500"></div>
                    <div class="relative h-full bg-white/[0.02] backdrop-blur-sm border border-white/10 p-10 rounded-3xl hover:-translate-y-2 transition-all duration-300 flex flex-col">
                        <div class="w-16 h-16 bg-gradient-to-br from-brand-500/20 to-brand-500/5 border border-brand-500/30 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 shadow-[0_0_15px_rgba(14,165,233,0.15)] group-hover:shadow-[0_0_25px_rgba(14,165,233,0.3)]">
                            <svg class="w-8 h-8 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        </div>
                        <h3 class="font-display text-2xl font-bold text-white mb-4">{{ $service->name }}</h3>
                        <p class="text-gray-400 mb-8 leading-relaxed flex-grow">{{ $service->description }}</p>
                        <div class="pt-6 border-t border-white/10 mt-auto">
                            <span class="text-xs font-bold text-gray-500 uppercase tracking-wider block mb-1">Investasi Mulai</span>
                            <div class="text-brand-400 font-extrabold text-xl drop-shadow-md">
                                Rp {{ number_format($service->starting_price, 0, ',', '.') }}
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-3 text-center text-gray-500">Data layanan belum tersedia.</div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Portfolio Dinamis -->
    <section id="portfolio" class="py-24 bg-black/20 border-y border-white/5 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6" data-aos="fade-right">
                <div>
                    <h2 class="font-display text-4xl md:text-5xl font-extrabold text-white mb-4">Masterpiece <span class="text-brand-500">Kami</span></h2>
                    <div class="h-1.5 w-24 bg-gradient-to-r from-brand-400 to-brand-600 rounded-full mb-6"></div>
                    <p class="text-gray-400 text-lg max-w-2xl">Deretan mahakarya digital yang telah kami bangun dengan kode yang bersih dan desain kelas atas.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @forelse ($portfolios ?? [] as $index => $item)
                    <div data-aos="fade-up" data-aos-delay="{{ $index * 150 }}" class="group relative rounded-3xl overflow-hidden bg-white/[0.02] border border-white/10 hover:border-brand-500/50 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(14,165,233,0.2)]">
                        <div class="relative h-64 bg-dark overflow-hidden flex items-center justify-center">
                            <!-- Efek Image Placeholder Keren -->
                            <div class="absolute inset-0 bg-gradient-to-br from-brand-900/40 to-dark group-hover:scale-110 transition-transform duration-700"></div>
                            <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-20"></div>
                            <span class="relative z-10 text-white/50 font-display font-bold text-xl group-hover:text-brand-400 transition-colors duration-300 drop-shadow-lg">{{ $item->title }}</span>
                        </div>
                        <div class="p-8 relative bg-gradient-to-b from-transparent to-dark/80">
                            <h3 class="font-display text-2xl font-bold text-white mb-3 group-hover:text-brand-400 transition-colors">{{ $item->title }}</h3>
                            <p class="text-gray-400 text-sm mb-6 line-clamp-3 leading-relaxed">{{ $item->description }}</p>
                            <div class="flex items-center justify-between mt-6 pt-6 border-t border-white/10">
                                <div class="flex gap-2">
                                    <span class="text-[10px] font-bold text-brand-300 bg-brand-500/10 border border-brand-500/20 px-2.5 py-1 rounded-md tracking-wider uppercase">Laravel</span>
                                    <span class="text-[10px] font-bold text-blue-300 bg-blue-500/10 border border-blue-500/20 px-2.5 py-1 rounded-md tracking-wider uppercase">Docker</span>
                                </div>
                                @if($item->link)
                                <a href="{{ $item->link }}" target="_blank" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-white hover:bg-brand-500 hover:text-white transition-all hover:rotate-45">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center text-gray-500 py-10">Belum ada portofolio yang dipublikasikan.</div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- CTA / Kontak dengan Efek Kaca -->
    <section id="kontak" class="py-32 relative z-10">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div data-aos="zoom-in" class="relative bg-gradient-to-br from-white/[0.05] to-transparent backdrop-blur-xl border border-white/10 p-12 md:p-20 rounded-[3rem] text-center overflow-hidden shadow-2xl">
                <!-- Decorative Blur -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-brand-500/30 rounded-full blur-[80px] -z-10"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-purple-500/20 rounded-full blur-[80px] -z-10"></div>

                <h2 class="font-display text-4xl md:text-5xl font-black text-white mb-6 leading-tight">Mulai Eksekusi Ide Anda <br><span class="text-brand-400">Hari Ini Juga.</span></h2>
                <p class="text-gray-400 mb-10 text-lg md:text-xl max-w-2xl mx-auto font-light">Jangan biarkan kompetitor mendahului Anda. Hubungi kami sekarang dan dapatkan arsitektur web terbaik.</p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-5">
                    <a href="https://wa.me/6281326156310?text=Halo%20Admin%20FullstackFlavour,%20saya%20tertarik%20untuk%20konsultasi%20mengenai%20pembuatan%20website/project." target="_blank" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-[#25D366] text-white hover:bg-[#1ebe57] font-bold py-4 px-10 rounded-full transition-all duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_30px_rgba(37,211,102,0.3)]">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Hubungi WhatsApp
                    </a>

                    <a href="https://instagram.com/fullstackflavour" target="_blank" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-white/5 text-white hover:bg-white/10 font-bold py-4 px-10 border border-white/10 hover:border-white/20 rounded-full transition-all duration-300">
                        Instagram DM
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-white/5 py-10 text-center bg-black/40 relative z-10">
        <p class="text-gray-500 text-sm font-medium tracking-wide">© {{ date('Y') }} FullstackFlavour. All rights reserved. Crafted with 🔥 and Laravel.</p>
    </footer>

    <!-- Script AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true, // Animasi hanya berjalan 1x saat di-scroll
            offset: 50, // Muncul sedikit lebih cepat
            duration: 800, // Durasi animasi standar
            easing: 'ease-out-cubic',
        });
    </script>
</body>
</html>
