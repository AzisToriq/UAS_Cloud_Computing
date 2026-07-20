<x-app-layout>
    <x-slot name="header">
        Dashboard Overview
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl border border-slate-100">
                <div class="p-8 text-slate-700">
                    <h3 class="font-display text-2xl font-bold text-slate-800 mb-2">Selamat datang kembali, Admin! 👋</h3>
                    <p class="text-slate-500 mb-6">Anda berada di pusat kendali FullstackFlavour. Semua perubahan di sini akan langsung tampil di halaman depan website Anda.</p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <a href="{{ route('portfolios.index') }}" class="block p-6 bg-brand-50/50 border border-brand-100 rounded-xl hover:bg-brand-50 transition">
                            <div class="font-bold text-brand-600 mb-1">Kelola Portfolio &rarr;</div>
                            <div class="text-sm text-slate-500">Tambah atau edit hasil karya proyek Anda.</div>
                        </a>
                        <a href="{{ route('services.index') }}" class="block p-6 bg-brand-50/50 border border-brand-100 rounded-xl hover:bg-brand-50 transition">
                            <div class="font-bold text-brand-600 mb-1">Kelola Layanan &rarr;</div>
                            <div class="text-sm text-slate-500">Atur paket jasa dan harga yang Anda tawarkan.</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
