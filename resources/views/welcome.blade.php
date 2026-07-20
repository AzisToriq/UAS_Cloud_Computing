<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FullstackFlavour | Premium IT Solutions</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700|outfit:500,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'], display: ['Outfit', 'sans-serif'] },
                    colors: {
                        brand: { 400: '#38bdf8', 500: '#0ea5e9', 600: '#0284c7', 900: '#0c4a6e' },
                        dark: { DEFAULT: '#030712', 100: '#111827', 200: '#1f2937' }
                    },
                    animation: {
                        'blob': 'blob 10s infinite alternate',
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-glow': 'pulseGlow 3s ease-in-out infinite',
                    },
                    keyframes: {
                        blob: {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '50%': { transform: 'translate(30px, -50px) scale(1.1)' },
                            '100%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        pulseGlow: {
                            '0%, 100%': { opacity: '0.6', transform: 'scale(1)' },
                            '50%': { opacity: '1', transform: 'scale(1.05)' },
                        }
                    },
                    backgroundImage: {
                        'grid-pattern': "url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMSIgY3k9IjEiIHI9IjEiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4wNykiLz48L3N2Zz4=')",
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-dark text-gray-300 font-sans antialiased selection:bg-brand-500 selection:text-white overflow-x-hidden">

    <!-- Premium Background Ecosystem -->
    <div class="fixed inset-0 w-full h-full -z-20 bg-dark"></div>

    <!-- Masked Grid Pattern -->
    <div class="fixed inset-0 w-full h-full -z-10 bg-grid-pattern opacity-40 pointer-events-none" style="mask-image: radial-gradient(circle at center, black 40%, transparent 100%); -webkit-mask-image: radial-gradient(circle at center, black 40%, transparent 100%);"></div>

    <!-- FIX: Animated Glowing Blobs (Menggunakan inline animation-delay) -->
    <div class="fixed top-0 left-0 w-full h-full overflow-hidden -z-10 pointer-events-none">
        <div class="absolute top-[-10%] left-[-10%] w-[40vw] h-[40vw] max-w-[600px] max-h-[600px] bg-brand-600/20 rounded-full mix-blend-screen filter blur-[100px] animate-blob" style="animation-delay: 0s;"></div>
        <div class="absolute top-[20%] right-[-10%] w-[35vw] h-[35vw] max-w-[500px] max-h-[500px] bg-indigo-600/20 rounded-full mix-blend-screen filter blur-[120px] animate-blob" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-[-10%] left-[20%] w-[45vw] h-[45vw] max-w-[700px] max-h-[700px] bg-brand-400/15 rounded-full mix-blend-screen filter blur-[130px] animate-blob" style="animation-delay: 4s;"></div>
    </div>

    <!-- Ultra-Sleek Navbar -->
    <nav class="fixed w-full z-50 bg-dark/70 backdrop-blur-xl border-b border-white/5 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <a href="#" class="flex-shrink-0 flex items-center gap-3 group cursor-pointer">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-brand-400 to-brand-600 flex items-center justify-center font-display font-bold text-white text-xl shadow-[0_0_15px_rgba(14,165,233,0.4)] group-hover:scale-110 transition-transform duration-300">F</div>
                    <span class="font-display font-extrabold text-2xl text-white tracking-tight">Fullstack<span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-400 to-indigo-400">Flavour</span></span>
                </a>
                <div class="hidden md:flex space-x-1 bg-white/[0.02] p-1.5 rounded-full border border-white/5">
                    <a href="#layanan" class="px-6 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all">Layanan</a>
                    <a href="#portfolio" class="px-6 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all">Portfolio</a>
                    <a href="#kontak" class="px-6 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/10 rounded-full transition-all">Kontak</a>
                </div>
                <div class="hidden md:block">
                    <a href="#kontak" class="px-7 py-2.5 rounded-full bg-brand-500/10 border border-brand-500/30 text-brand-300 font-semibold text-sm hover:bg-brand-500 hover:text-white hover:shadow-[0_0_20px_rgba(14,165,233,0.4)] transition-all duration-300">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative pt-40 pb-20 lg:pt-56 lg:pb-32 overflow-hidden flex items-center justify-center min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center flex flex-col items-center">

            <div data-aos="fade-down" data-aos-duration="1000" class="inline-flex items-center gap-3 px-5 py-2 rounded-full bg-brand-500/10 border border-brand-500/20 text-brand-300 text-xs sm:text-sm font-medium mb-8 backdrop-blur-md animate-pulse-glow">
                <span class="relative flex h-2.5 w-2.5">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-brand-500"></span>
                </span>
                Menerima Proyek Skala Enterprise - Q3 2026
            </div>

            <h1 data-aos="zoom-in" data-aos-duration="1200" class="font-display text-5xl md:text-7xl lg:text-8xl font-black text-white mb-6 leading-[1.1] tracking-tight">
                Arsitektur Digital <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-300 via-brand-500 to-indigo-500">Tanpa Batas.</span>
            </h1>

            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" class="mt-4 text-lg md:text-xl text-gray-400 max-w-3xl mx-auto mb-12 leading-relaxed font-light">
                Merancang ekosistem web modern, aplikasi <span class="text-white font-medium">cross-platform</span> berperforma tinggi, hingga implementasi pengolahan data cerdas yang didesain untuk mendominasi era digital.
            </p>

            <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" class="flex flex-col sm:flex-row justify-center gap-5 w-full sm:w-auto">
                <a href="#kontak" class="group relative inline-flex items-center justify-center px-8 py-4 font-semibold text-white transition-all duration-300 bg-brand-600 rounded-full overflow-hidden shadow-[0_0_30px_rgba(14,165,233,0.3)] hover:shadow-[0_0_50px_rgba(14,165,233,0.6)] hover:-translate-y-1">
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-b from-white/10 to-transparent"></span>
                    <span class="relative flex items-center gap-2">Konsultasi Arsitektur <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg></span>
                </a>
                <a href="#portfolio" class="inline-flex items-center justify-center px-8 py-4 font-semibold text-white transition-all duration-300 bg-white/5 border border-white/10 rounded-full hover:bg-white/10 hover:border-white/20 backdrop-blur-sm">
                    Lihat Masterpiece
                </a>
            </div>
        </div>
    </section>

    <!-- Layanan Kami (Services) -->
    <section id="layanan" class="py-24 relative z-10 bg-dark-100/50 border-y border-white/5 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20" data-aos="fade-up">
                <h2 class="font-display text-4xl md:text-5xl font-extrabold text-white mb-4">Layanan <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-400 to-indigo-500">Premium</span></h2>
                <div class="h-1 w-20 bg-gradient-to-r from-brand-500 to-indigo-500 rounded-full mx-auto mb-6 shadow-[0_0_15px_rgba(14,165,233,0.5)]"></div>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">Infrastruktur kode yang tangguh dipadukan dengan desain antarmuka kelas atas.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                @if(isset($services) && count($services) > 0)
                    @foreach ($services as $index => $service)
                    <div data-aos="fade-up" data-aos-delay="{{ $index * 150 }}" class="group relative h-full rounded-3xl overflow-hidden bg-white/[0.02] border border-white/5 hover:border-brand-500/30 transition-all duration-500 hover:-translate-y-2 flex flex-col p-8 lg:p-10 shadow-lg backdrop-blur-md">
                        <div class="absolute inset-0 bg-gradient-to-br from-brand-600/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="w-14 h-14 bg-dark border border-white/10 rounded-2xl flex items-center justify-center mb-6 group-hover:border-brand-500/50 group-hover:shadow-[0_0_20px_rgba(14,165,233,0.2)] transition-all duration-300">
                            <svg class="w-6 h-6 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        </div>
                        <h3 class="font-display text-2xl font-bold text-white mb-3 relative z-10">{{ $service->name }}</h3>
                        <p class="text-gray-400 mb-8 leading-relaxed flex-grow text-sm relative z-10">{{ $service->description }}</p>
                        <div class="pt-6 border-t border-white/5 mt-auto relative z-10 flex justify-between items-end">
                            <div>
                                <span class="text-[10px] font-bold text-gray-500 uppercase tracking-wider block mb-1">Investasi Mulai</span>
                                <div class="text-white font-bold text-lg drop-shadow-md">Rp {{ number_format($service->starting_price, 0, ',', '.') }}</div>
                            </div>
                            <div class="w-8 h-8 rounded-full bg-white/5 border border-white/10 flex items-center justify-center group-hover:bg-brand-500 group-hover:border-transparent group-hover:text-white transition-all"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <!-- Fallback Dummy Profesional -->
                    <div data-aos="fade-up" data-aos-delay="0" class="group relative h-full rounded-3xl overflow-hidden bg-white/[0.02] border border-white/5 hover:border-brand-500/30 transition-all duration-500 hover:-translate-y-2 flex flex-col p-8 lg:p-10 backdrop-blur-md">
                        <div class="absolute inset-0 bg-gradient-to-br from-brand-600/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="w-14 h-14 bg-dark border border-white/10 rounded-2xl flex items-center justify-center mb-6 group-hover:border-brand-500/50 transition-all duration-300">
                            <svg class="w-6 h-6 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <h3 class="font-display text-2xl font-bold text-white mb-3">Enterprise Web Systems</h3>
                        <p class="text-gray-400 mb-8 leading-relaxed flex-grow text-sm">Arsitektur monolitik modern hingga microservices dengan ekosistem Node.js dan eksekusi server yang tangguh.</p>
                        <div class="pt-6 border-t border-white/5 mt-auto"><span class="text-brand-400 text-sm font-semibold">Mulai Konsultasi &rarr;</span></div>
                    </div>

                    <div data-aos="fade-up" data-aos-delay="150" class="group relative h-full rounded-3xl overflow-hidden bg-white/[0.02] border border-white/5 hover:border-brand-500/30 transition-all duration-500 hover:-translate-y-2 flex flex-col p-8 lg:p-10 backdrop-blur-md">
                        <div class="absolute inset-0 bg-gradient-to-br from-brand-600/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="w-14 h-14 bg-dark border border-white/10 rounded-2xl flex items-center justify-center mb-6 group-hover:border-brand-500/50 transition-all duration-300">
                            <svg class="w-6 h-6 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                        </div>
                        <h3 class="font-display text-2xl font-bold text-white mb-3">Cross-Platform Apps</h3>
                        <p class="text-gray-400 mb-8 leading-relaxed flex-grow text-sm">Pengembangan aplikasi seluler interaktif tingkat lanjut yang dirancang khusus untuk operasional bisnis terpusat.</p>
                        <div class="pt-6 border-t border-white/5 mt-auto"><span class="text-brand-400 text-sm font-semibold">Mulai Konsultasi &rarr;</span></div>
                    </div>

                    <div data-aos="fade-up" data-aos-delay="300" class="group relative h-full rounded-3xl overflow-hidden bg-white/[0.02] border border-white/5 hover:border-brand-500/30 transition-all duration-500 hover:-translate-y-2 flex flex-col p-8 lg:p-10 backdrop-blur-md">
                        <div class="absolute inset-0 bg-gradient-to-br from-brand-600/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <div class="w-14 h-14 bg-dark border border-white/10 rounded-2xl flex items-center justify-center mb-6 group-hover:border-brand-500/50 transition-all duration-300">
                            <svg class="w-6 h-6 text-brand-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                        </div>
                        <h3 class="font-display text-2xl font-bold text-white mb-3">Data-Driven Solutions</h3>
                        <p class="text-gray-400 mb-8 leading-relaxed flex-grow text-sm">Implementasi analitik dan pemrosesan cerdas berlandaskan algoritma *machine learning* untuk efisiensi sistem.</p>
                        <div class="pt-6 border-t border-white/5 mt-auto"><span class="text-brand-400 text-sm font-semibold">Mulai Konsultasi &rarr;</span></div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Portfolio Dinamis -->
    <section id="portfolio" class="py-24 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6" data-aos="fade-right">
                <div>
                    <h2 class="font-display text-4xl md:text-5xl font-extrabold text-white mb-4">Masterpiece <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-400 to-indigo-500">Eksklusif</span></h2>
                    <div class="h-1 w-20 bg-gradient-to-r from-brand-500 to-indigo-500 rounded-full mb-6 shadow-[0_0_15px_rgba(14,165,233,0.5)]"></div>
                    <p class="text-gray-400 text-lg max-w-2xl">Deretan rekam jejak digital yang kami bangun dengan kode yang bersih, performa optimal, dan visual kelas atas.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($portfolios ?? [] as $index => $item)
                    <div data-aos="fade-up" data-aos-delay="{{ $index * 150 }}" class="group relative rounded-[2rem] overflow-hidden bg-white/[0.02] border border-white/5 hover:border-brand-500/40 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(14,165,233,0.2)] flex flex-col h-full backdrop-blur-sm">

                        <!-- Gambar dari Storage Docker -->
                        <div class="relative h-64 bg-dark overflow-hidden flex items-center justify-center">
                            @if($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                <!-- Overlay gelap gradien -->
                                <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/40 to-transparent opacity-90 group-hover:opacity-70 transition-opacity"></div>
                            @else
                                <div class="absolute inset-0 bg-gradient-to-br from-brand-900/30 to-dark group-hover:scale-110 transition-transform duration-700"></div>
                                <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-20"></div>
                                <span class="relative z-10 text-white/30 font-display font-bold text-xl group-hover:text-brand-400 transition-colors duration-300">{{ $item->title }}</span>
                            @endif

                            <!-- Action Button Overlay -->
                            @if($item->link)
                            <a href="{{ $item->link }}" target="_blank" class="absolute top-4 right-4 w-10 h-10 rounded-full bg-black/50 backdrop-blur-md border border-white/10 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transform translate-y-2 group-hover:translate-y-0 transition-all duration-300 hover:bg-brand-500 hover:scale-110">
                                <svg class="w-4 h-4 -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                            @endif
                        </div>

                        <div class="p-8 relative flex flex-col flex-grow z-10 -mt-8">
                            <h3 class="font-display text-2xl font-bold text-white mb-3 group-hover:text-brand-400 transition-colors">{{ $item->title }}</h3>
                            <p class="text-gray-400 text-sm mb-6 line-clamp-3 leading-relaxed flex-grow">{{ $item->description }}</p>

                            <!-- Tech Stack Dinamis -->
                            <div class="pt-5 border-t border-white/5 mt-auto">
                                <div class="flex gap-2 flex-wrap">
                                    @if($item->tech_stack)
                                        @foreach(explode(',', $item->tech_stack) as $tech)
                                            <span class="text-[10px] font-bold text-brand-300 bg-brand-500/10 border border-brand-500/20 px-2.5 py-1.5 rounded-lg tracking-wider uppercase">{{ trim($tech) }}</span>
                                        @endforeach
                                    @else
                                        <span class="text-[10px] font-bold text-gray-500 bg-white/5 border border-white/10 px-2.5 py-1.5 rounded-lg tracking-wider uppercase">ARCHIVED</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full py-16 text-center border border-dashed border-white/10 rounded-3xl bg-white/[0.01]">
                        <div class="w-16 h-16 bg-white/5 rounded-full flex items-center justify-center mx-auto mb-4"><svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg></div>
                        <h4 class="text-white font-display text-xl font-bold mb-2">Belum ada portofolio</h4>
                        <p class="text-gray-500 text-sm max-w-md mx-auto">Database kosong. Tambahkan mahakarya digital pertama Anda melalui panel administrasi FullstackFlavour.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Ultra-Modern CTA -->
    <section id="kontak" class="py-32 relative z-10">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div data-aos="zoom-in" class="relative bg-dark-100/40 backdrop-blur-2xl border border-white/10 p-12 md:p-24 rounded-[3rem] text-center overflow-hidden shadow-2xl">
                <!-- Decorative Flares -->
                <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-brand-500/20 rounded-full blur-[100px] -z-10 translate-x-1/3 -translate-y-1/3"></div>
                <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-indigo-600/20 rounded-full blur-[100px] -z-10 -translate-x-1/3 translate-y-1/3"></div>

                <h2 class="font-display text-4xl md:text-6xl font-black text-white mb-6 leading-tight tracking-tight">
                    Eksekusi Visi Anda <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-300 to-indigo-400">Sekarang Juga.</span>
                </h2>
                <p class="text-gray-400 mb-10 text-lg md:text-xl max-w-2xl mx-auto font-light">
                    Hentikan penundaan. Bermitra bersama kami untuk menghadirkan skalabilitas dan efisiensi teknologi pada lini bisnis Anda.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="https://wa.me/6281326156310?text=Halo%20FullstackFlavour,%20saya%20tertarik%20konsultasi%20pengembangan%20sistem." target="_blank" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-[#25D366] text-white hover:bg-[#1ebe57] font-bold py-4 px-10 rounded-full transition-all duration-300 transform hover:-translate-y-1 hover:shadow-[0_15px_30px_rgba(37,211,102,0.3)]">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Hubungi via WhatsApp
                    </a>
                    <a href="https://instagram.com/fullstackflavour" target="_blank" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-white/5 text-white hover:bg-white/10 font-bold py-4 px-10 border border-white/10 hover:border-white/20 rounded-full transition-all duration-300 backdrop-blur-md">
                        DM via Instagram
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-white/5 py-12 text-center bg-dark/80 relative z-10 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 flex flex-col items-center">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-brand-400 to-indigo-600 flex items-center justify-center font-display font-bold text-white text-xl mb-6 opacity-80">F</div>
            <p class="text-gray-500 text-sm font-medium tracking-wide mb-2">© {{ date('Y') }} FullstackFlavour by Azis. All rights reserved.</p>
            <p class="text-gray-600 text-xs">Engineered for Final Examination of Cloud Computing</p>
        </div>
    </footer>

    <!-- Script AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Memastikan halaman diposisikan di atas saat di-refresh
        if (history.scrollRestoration) {
            history.scrollRestoration = 'manual';
        }

        AOS.init({
            once: true, // Animasi berjalan 1x
            offset: 50,
            duration: 1000, // Sedikit diperlambat agar lebih elegan
            easing: 'ease-out-cubic',
        });
    </script>
</body>
</html>
