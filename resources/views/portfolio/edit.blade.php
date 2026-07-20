<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Portfolio</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <!-- Menampilkan Error Validasi -->
                @if($errors->any())
                    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                        <ul>@foreach($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
                    </div>
                @endif

                <form action="{{ route('portfolios.update', $portfolio->id) }}" method="POST">
                    @csrf
                    <!-- Wajib ditambahkan untuk method UPDATE di Laravel -->
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Judul Portfolio</label>
                        <!-- Menggunakan value lama dari database atau input sebelumnya -->
                        <input type="text" name="title" value="{{ old('title', $portfolio->title) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea name="description" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>{{ old('description', $portfolio->description) }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Link URL (Opsional)</label>
                        <input type="url" name="link" value="{{ old('link', $portfolio->link) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>

                    <div class="flex items-center gap-4">
                        <button type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded-md hover:bg-yellow-700 transition">Update Portfolio</button>
                        <a href="{{ route('portfolios.index') }}" class="text-gray-600 hover:underline">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
