<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            ✨ Tambah Portfolio Baru
        </h2>
    </x-slot>

    <div class="py-12 bg-slate-50 min-h-screen">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">

                <div class="p-6 sm:p-10">
                    <!-- Pesan Error -->
                    @if($errors->any())
                        <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-8 rounded-r-lg">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" /></svg>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-sm font-medium text-red-800">Terdapat kesalahan pada input Anda:</h3>
                                    <ul class="mt-2 text-sm text-red-700 list-disc list-inside">
                                        @foreach($errors->all() as $error) <li>{{ $error }}</li> @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Form Utama (Wajib ada enctype="multipart/form-data") -->
                    <form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Kolom Judul -->
                            <div class="md:col-span-2">
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Judul Portfolio <span class="text-red-500">*</span></label>
                                <input type="text" name="title" placeholder="Contoh: E-Commerce Toko Baju" class="block w-full rounded-xl border-slate-300 focus:border-blue-500 focus:ring focus:ring-blue-200 transition shadow-sm" required value="{{ old('title') }}">
                            </div>

                            <!-- Kolom Tech Stack -->
                            <div class="md:col-span-1">
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Tech Stack <span class="text-slate-400 font-normal">(Opsional)</span></label>
                                <input type="text" name="tech_stack" placeholder="Contoh: Laravel, Vue, Docker" class="block w-full rounded-xl border-slate-300 focus:border-blue-500 focus:ring focus:ring-blue-200 transition shadow-sm" value="{{ old('tech_stack') }}">
                            </div>

                            <!-- Kolom Link URL -->
                            <div class="md:col-span-1">
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Link URL Demo <span class="text-slate-400 font-normal">(Opsional)</span></label>
                                <input type="url" name="link" placeholder="https://..." class="block w-full rounded-xl border-slate-300 focus:border-blue-500 focus:ring focus:ring-blue-200 transition shadow-sm" value="{{ old('link') }}">
                            </div>
                        </div>

                        <!-- Kolom Deskripsi -->
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Deskripsi Proyek <span class="text-red-500">*</span></label>
                            <textarea name="description" rows="4" placeholder="Jelaskan detail proyek ini..." class="block w-full rounded-xl border-slate-300 focus:border-blue-500 focus:ring focus:ring-blue-200 transition shadow-sm" required>{{ old('description') }}</textarea>
                        </div>

                        <!-- Kolom Upload Gambar dengan Preview -->
                        <div class="bg-slate-50 p-6 rounded-xl border border-slate-200 border-dashed">
                            <label class="block text-sm font-semibold text-slate-700 mb-4">Upload Thumbnail / Gambar</label>
                            <div class="flex items-center space-x-6">
                                <!-- Area Preview Gambar -->
                                <div class="shrink-0">
                                    <img id="preview_img" class="h-28 w-40 object-cover rounded-xl border border-slate-300 hidden shadow-sm" src="" alt="Preview Gambar" />
                                </div>
                                <!-- Tombol Pilih File -->
                                <label class="block">
                                    <span class="sr-only">Pilih foto</span>
                                    <input type="file" name="image" id="image" accept="image/png, image/jpeg, image/jpg, image/gif" onchange="previewImage(event)"
                                        class="block w-full text-sm text-slate-500
                                        file:mr-4 file:py-2.5 file:px-5
                                        file:rounded-xl file:border-0
                                        file:text-sm file:font-bold
                                        file:bg-blue-100 file:text-blue-700
                                        hover:file:bg-blue-200 file:transition cursor-pointer"/>
                                    <p class="text-xs text-slate-500 mt-2">Format yang didukung: JPG, PNG, GIF. Maksimal ukuran: 2MB.</p>
                                </label>
                            </div>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="pt-4 border-t border-slate-100 flex justify-end gap-3">
                            <a href="{{ route('portfolios.index') }}" class="px-6 py-2.5 bg-white border border-slate-300 text-slate-700 font-semibold rounded-xl hover:bg-slate-50 transition">
                                Batal
                            </a>
                            <button type="submit" class="px-6 py-2.5 bg-blue-600 text-white font-bold rounded-xl shadow-lg shadow-blue-500/30 hover:bg-blue-700 transition">
                                Simpan Portfolio
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Script untuk Live Preview Gambar -->
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('preview_img');
                output.src = reader.result;
                // Hilangkan class 'hidden' agar gambar muncul
                output.classList.remove('hidden');
            };
            // Baca file yang di-upload
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</x-app-layout>
