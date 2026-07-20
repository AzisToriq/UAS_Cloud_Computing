<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            💼 Kelola Portfolio
        </h2>
    </x-slot>

    <div class="py-12 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Notifikasi Pesan Sukses (Flash Message) -->
            @if(session('success'))
                <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-r-xl shadow-sm flex justify-between items-center" x-data="{ show: true }" x-show="show">
                    <div class="flex items-center">
                        <svg class="h-6 w-6 text-green-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span class="text-green-800 font-medium">{{ session('success') }}</span>
                    </div>
                    <button @click="show = false" class="text-green-600 hover:text-green-800 text-xl font-bold">&times;</button>
                </div>
            @endif

            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                <!-- Header Tabel -->
                <div class="p-6 border-b border-slate-200 flex flex-col sm:flex-row justify-between items-center gap-4 bg-slate-50/50">
                    <div>
                        <h3 class="text-lg font-extrabold text-slate-800">Daftar Karya Proyek</h3>
                        <p class="text-sm text-slate-500 mt-1">Tampilkan karya terbaik Anda untuk menarik klien baru.</p>
                    </div>
                    <a href="{{ route('portfolios.create') }}" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2.5 px-5 rounded-xl transition shadow-lg shadow-blue-500/30">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        Tambah Portfolio
                    </a>
                </div>

                <!-- Isi Tabel -->
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-slate-600">
                        <thead class="bg-slate-50 text-slate-500 text-xs uppercase font-semibold">
                            <tr>
                                <th class="px-6 py-4 border-b border-slate-200">Info Proyek</th>
                                <th class="px-6 py-4 border-b border-slate-200 text-center">Status</th>
                                <th class="px-6 py-4 border-b border-slate-200 text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($portfolios as $item)
                            <tr class="hover:bg-slate-50 transition group">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-4">
                                        <!-- Thumbnail -->
                                        <div class="h-16 w-24 shrink-0 rounded-lg bg-slate-100 border border-slate-200 overflow-hidden flex items-center justify-center shadow-sm">
                                            @if($item->image)
                                              <img src="/storage/{{ $item->image }}" alt="{{ $item->title }}" class="h-full w-full object-cover">
                                            @else
                                                <svg class="h-8 w-8 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                            @endif
                                        </div>
                                        <!-- Teks Info -->
                                        <div>
                                            <h4 class="font-bold text-slate-800 text-base">{{ $item->title }}</h4>
                                            <div class="flex items-center gap-2 mt-1">
                                                @if($item->link)
                                                    <a href="{{ $item->link }}" target="_blank" class="text-xs text-blue-600 hover:text-blue-800 hover:underline flex items-center gap-1 font-medium">
                                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                                        Demo
                                                    </a>
                                                    @if($item->tech_stack)
                                                        <span class="text-slate-300">|</span>
                                                    @endif
                                                @endif
                                                @if($item->tech_stack)
                                                    <span class="text-xs text-slate-500 bg-slate-100 px-2 py-0.5 rounded-md border border-slate-200 truncate max-w-[200px]">
                                                        {{ $item->tech_stack }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center align-middle">
                                    @if($item->is_published)
                                        <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-green-50 text-green-700 border border-green-200 rounded-full text-xs font-bold">
                                            <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Publik
                                        </span>
                                    @else
                                        <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-slate-50 text-slate-600 border border-slate-200 rounded-full text-xs font-bold">
                                            <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span> Draft
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-right align-middle">
                                    <div class="flex justify-end gap-2">
                                        <a href="{{ route('portfolios.edit', $item->id) }}" class="text-yellow-600 hover:text-yellow-700 font-medium bg-yellow-50 hover:bg-yellow-100 px-3 py-1.5 rounded-lg transition border border-yellow-100">
                                            Edit
                                        </a>
                                        <form action="{{ route('portfolios.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Data beserta gambarnya akan dihapus permanen. Yakin ingin menghapus?');">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-700 font-medium bg-red-50 hover:bg-red-100 px-3 py-1.5 rounded-lg transition border border-red-100">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <!-- Empty State yang lebih profesional -->
                            <tr>
                                <td colspan="3" class="px-6 py-16 text-center">
                                    <div class="flex flex-col items-center justify-center text-slate-400">
                                        <svg class="w-16 h-16 mb-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                                        <p class="text-base font-medium text-slate-500">Belum ada karya portfolio.</p>
                                        <p class="text-sm mt-1">Mulai tambahkan proyek pertama Anda sekarang.</p>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
