<x-app-layout>
    <x-slot name="header"><h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Layanan</h2></x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"><div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <form action="{{ route('services.update', $service->id) }}" method="POST">
                @csrf @method('PUT')
                <div class="mb-4"><label class="block text-sm font-medium">Nama Layanan</label><input type="text" name="name" value="{{ $service->name }}" class="mt-1 block w-full rounded-md border-gray-300" required></div>
                <div class="mb-4"><label class="block text-sm font-medium">Deskripsi</label><textarea name="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300" required>{{ $service->description }}</textarea></div>
                <div class="mb-4"><label class="block text-sm font-medium">Harga Mulai</label><input type="number" name="starting_price" value="{{ $service->starting_price }}" class="mt-1 block w-full rounded-md border-gray-300" required></div>
                <button type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded-md">Update Layanan</button>
            </form>
        </div></div>
    </div>
</x-app-layout>
