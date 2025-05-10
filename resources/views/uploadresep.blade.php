@extends('layouts.app')

@section('title', 'Upload Resep')

@section('content')
    <h2 class="text-xl font-semibold mb-4">Buat Halaman Upload Resep</h2>

    @if (session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('resep.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div class="flex flex-col md:flex-row gap-6">
            <!-- KIRI: kotak foto + bahan -->
<div class="w-full md:w-1/3">
    <!-- Kotak Upload Gambar -->
    <div
        id="drop-area"
        class="border-2 border-dashed border-gray-300 rounded-lg flex flex-col items-center justify-center p-4 cursor-pointer transition hover:bg-gray-50"
        style="aspect-ratio: 1/1;"
        onclick="document.getElementById('foto').click()"
        ondragover="event.preventDefault()"
        ondrop="handleDrop(event)"
    >
        <img id="preview" src="{{ asset('images/camera.png') }}" alt="Preview" class="w-12 h-12 mb-2">
        <p class="font-semibold text-gray-700">Foto Resep</p>
        <p class="text-sm text-gray-500 text-center">Klik atau tarik file ke sini</p>
    </div>

    <!-- Input File Hidden -->
    <input type="file" name="foto" id="foto" class="hidden" accept="image/*" onchange="handleFile(this.files)">
    
    <!-- Bahan -->
    <div class="mt-6">
        <label class="block font-medium mb-2">Bahan</label>
        <div id="bahan-container" class="space-y-2">
            <input type="text" name="bahan[]" class="border p-2 rounded w-full">
        </div>
        <button type="button" onclick="tambahBahan()" class="mt-2 text-blue-600 hover:underline text-sm">
            + Tambah
        </button>
    </div>
</div>


            <!-- KANAN: form input lainnya -->
            <div class="w-full md:w-2/3 space-y-6">
                <div>
                    <label class="block font-medium">Judul Resep</label>
                    <input type="text" name="judul" class="border p-2 rounded w-full" required>
                </div>

                <div>
                    <label class="block font-medium">Deskripsi</label>
                    <textarea name="deskripsi" rows="3" class="border p-2 rounded w-full"></textarea>
                </div>

                <div>
                    <label class="block font-medium">Porsi</label>
                    <input type="text" name="porsi" class="border p-2 rounded w-full">
                </div>

                <div>
                    <label class="block font-medium">Durasi</label>
                    <input type="text" name="durasi" class="border p-2 rounded w-full">
                </div>

                <div>
                    <label class="block font-medium">Langkah</label>
                    <input type="text" name="langkah[]" class="border p-2 rounded w-full">
                    <input type="file" name="foto_langkah[]" class="border p-2 rounded w-full mt-2">
                </div>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Terbitkan
                </button>
            </div>
        </div>
    </form>

<script>
    function tambahBahan() {
        const container = document.getElementById('bahan-container');
        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'bahan[]';
        input.className = 'border p-2 rounded w-full';
        container.appendChild(input);
    }

    function handleFile(files) {
        const file = files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('preview').src = e.target.result;
                document.getElementById('preview').classList.add('object-cover');
                document.getElementById('preview').classList.remove('w-12', 'h-12', 'mb-2');
                document.getElementById('preview').style.width = '100%';
                document.getElementById('preview').style.height = '100%';
                document.getElementById('preview').style.borderRadius = '0.5rem';
            };
            reader.readAsDataURL(file);
        }
    }

    function handleDrop(e) {
        e.preventDefault();
        const files = e.dataTransfer.files;
        document.getElementById('foto').files = files;
        handleFile(files);
    }
</script>

@endsection
