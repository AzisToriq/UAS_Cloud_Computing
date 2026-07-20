<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FullstackFlavour') }} - Admin Workspace</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|outfit:500,600,700,800&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS & Alpine.js via CDN (Untuk jaminan animasi berjalan mulus) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'], display: ['Outfit', 'sans-serif'] },
                    colors: { brand: { 400: '#38bdf8', 500: '#0ea5e9', 600: '#0284c7' }, dark: '#0f172a' }
                }
            }
        }
    </script>
</head>
<body class="font-sans antialiased bg-[#f8fafc] text-slate-800 overflow-hidden" x-data="{ sidebarOpen: true, profileOpen: false }">

    <div class="flex h-screen w-full">

        <!-- ================= SIDEBAR (GELAP & ELEGAN) ================= -->
        <aside
            class="bg-dark text-slate-300 flex flex-col transition-all duration-300 ease-in-out relative z-50 shadow-2xl"
            :class="sidebarOpen ? 'w-64' : 'w-20 -ml-64 sm:ml-0'"
        >
            <!-- Logo Sidebar -->
            <div class="h-20 flex items-center justify-center border-b border-slate-700/50 px-4">
                <div class="flex items-center gap-3 overflow-hidden">
                    <div class="min-w-[32px] w-8 h-8 rounded-lg bg-gradient-to-br from-brand-400 to-brand-600 flex items-center justify-center font-display font-bold text-white text-xl shadow-lg shadow-brand-500/30">F</div>
                    <span x-show="sidebarOpen" x-transition class="font-display font-bold text-xl text-white tracking-tight whitespace-nowrap">
                        Fullstack<span class="text-brand-500">Flavour</span>
                    </span>
                </div>
            </div>

            <!-- Menu Sidebar -->
            <nav class="flex-1 overflow-y-auto py-6 px-3 space-y-2">

                <div x-show="sidebarOpen" class="px-3 pb-2 text-xs font-bold text-slate-500 uppercase tracking-wider">Utama</div>

                <!-- Menu: Dashboard -->
                <a href="{{ route('dashboard') }}"
                   class="flex items-center gap-3 px-3 py-3 rounded-xl transition-all {{ request()->routeIs('dashboard') ? 'bg-brand-500 text-white shadow-lg shadow-brand-500/30' : 'hover:bg-slate-800 hover:text-white' }}">
                    <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    <span x-show="sidebarOpen" class="font-medium whitespace-nowrap">Dashboard</span>
                </a>

                <div x-show="sidebarOpen" class="px-3 pt-4 pb-2 text-xs font-bold text-slate-500 uppercase tracking-wider">Master Data</div>

                <!-- Menu: Portfolio -->
                <a href="{{ route('portfolios.index') }}"
                   class="flex items-center gap-3 px-3 py-3 rounded-xl transition-all {{ request()->routeIs('portfolios.*') ? 'bg-brand-500 text-white shadow-lg shadow-brand-500/30' : 'hover:bg-slate-800 hover:text-white' }}">
                    <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <span x-show="sidebarOpen" class="font-medium whitespace-nowrap">Portfolio</span>
                </a>

                <!-- Menu: Services -->
                <a href="{{ route('services.index') }}"
                   class="flex items-center gap-3 px-3 py-3 rounded-xl transition-all {{ request()->routeIs('services.*') ? 'bg-brand-500 text-white shadow-lg shadow-brand-500/30' : 'hover:bg-slate-800 hover:text-white' }}">
                    <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    <span x-show="sidebarOpen" class="font-medium whitespace-nowrap">Layanan Jasa</span>
                </a>
            </nav>

            <!-- Menu: Logout (Bawah) -->
            <div class="p-4 border-t border-slate-700/50">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-3 px-3 py-3 rounded-xl transition-all hover:bg-red-500/10 text-slate-400 hover:text-red-500 group">
                        <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        <span x-show="sidebarOpen" class="font-medium whitespace-nowrap">Log Out</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- ================= MAIN CONTENT AREA ================= -->
        <div class="flex-1 flex flex-col h-screen overflow-hidden bg-[#f8fafc] relative">

            <!-- Ornamen Background Halus -->
            <div class="absolute top-0 left-0 w-full h-64 bg-gradient-to-b from-brand-500/5 to-transparent z-0 pointer-events-none"></div>

            <!-- TOPBAR (Putih) -->
            <header class="h-20 bg-white/80 backdrop-blur-md shadow-sm border-b border-slate-200 flex items-center justify-between px-4 sm:px-6 z-40 relative">
                <div class="flex items-center gap-4">
                    <!-- Tombol Buka Tutup Sidebar (Hamburger) -->
                    <button @click="sidebarOpen = !sidebarOpen" class="p-2 rounded-xl bg-slate-100 hover:bg-brand-50 hover:text-brand-600 text-slate-600 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path></svg>
                    </button>

                    <!-- Judul Halaman -->
                    @if (isset($header))
                        <h2 class="font-display font-bold text-xl text-slate-800 hidden sm:block">
                            {{ $header }}
                        </h2>
                    @endif
                </div>

                <!-- Profil Admin (Kanan) -->
                <div class="flex items-center gap-4 relative">
                    <button @click="profileOpen = !profileOpen" @click.away="profileOpen = false" class="flex items-center gap-3 p-1.5 rounded-full hover:bg-slate-50 transition border border-transparent hover:border-slate-200 cursor-pointer">
                        <div class="w-10 h-10 rounded-full bg-brand-100 flex items-center justify-center text-brand-600 font-bold border border-brand-200 shadow-sm">
                            {{ substr(Auth::user()->name ?? 'A', 0, 1) }}
                        </div>
                        <div class="hidden sm:block text-left mr-2">
                            <div class="text-sm font-bold text-slate-700">{{ Auth::user()->name ?? 'Administrator' }}</div>
                            <div class="text-xs text-slate-500 -mt-0.5">Admin Role</div>
                        </div>
                        <svg class="w-4 h-4 text-slate-400 mr-2 hidden sm:block" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>

                    <!-- Dropdown Profil -->
                    <div x-show="profileOpen" x-transition style="display: none;" class="absolute top-14 right-0 w-48 bg-white rounded-xl shadow-lg border border-slate-100 py-2 z-50">
                        <a href="{{ url('/') }}" target="_blank" class="block px-4 py-2 text-sm text-slate-600 hover:bg-slate-50 hover:text-brand-600 font-medium">
                            <span class="mr-2">🌍</span> Lihat Website
                        </a>
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-slate-600 hover:bg-slate-50 hover:text-brand-600 font-medium">
                            <span class="mr-2">⚙️</span> Setting Akun
                        </a>
                    </div>
                </div>
            </header>

            <!-- KONTEN HALAMAN (Scrollable) -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto p-4 sm:p-6 lg:p-8 relative z-10">
                {{ $slot }}
            </main>
        </div>
    </div>

</body>
</html>
