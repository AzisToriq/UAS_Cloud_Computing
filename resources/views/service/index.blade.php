<x-app-layout>
    <x-slot name="header">Kelola Layanan (Services)</x-slot>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <!-- Header Tabel -->
        <div class="p-6 border-b border-slate-200 flex flex-col sm:flex-row justify-between items-center gap-4 bg-slate-50/50">
            <div>
                <h3 class="text-lg font-bold text-slate-800">Daftar Layanan Jasa</h3>
                <p class="text-sm text-slate-500 mt-1">Kelola paket dan harga yang ditawarkan ke klien.</p>
            </div>
            <a href="{{ route('services.create') }}" class="inline-flex items-center gap-2 bg-brand-600 hover:bg-brand-700 text-white font-semibold py-2.5 px-5 rounded-xl transition shadow-lg shadow-brand-500/30">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Tambah Layanan
            </a>
        </div>

        <!-- Isi Tabel -->
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-slate-600">
                <thead class="bg-slate-50 text-slate-500 text-xs uppercase font-semibold">
                    <tr>
                        <th class="px-6 py-4 border-b border-slate-200">Nama Layanan</th>
                        <th class="px-6 py-4 border-b border-slate-200">Harga Mulai</th>
                        <th class="px-6 py-4 border-b border-slate-200 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($services as $item)
                    <tr class="hover:bg-slate-50 transition group">
                        <td class="px-6 py-4 font-bold text-slate-800">{{ $item->name }}</td>
                        <td class="px-6 py-4 font-medium text-slate-500">Rp {{ number_format($item->starting_price, 0, ',', '.') }}</td>
                        <td class="px-6 py-4 flex justify-end gap-3">
                            <a href="{{ route('services.edit', $item->id) }}" class="text-brand-500 hover:text-brand-700 font-medium bg-brand-50 hover:bg-brand-100 px-3 py-1.5 rounded-lg transition">Edit</a>
                            <form action="{{ route('services.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus layanan ini?');">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 font-medium bg-red-50 hover:bg-red-100 px-3 py-1.5 rounded-lg transition">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="px-6 py-12 text-center text-slate-400 font-medium">Belum ada data layanan yang ditambahkan.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
