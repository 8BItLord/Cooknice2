@extends('layouts.app')

@section('title', 'Upload Resep')

@section('content')
<div class="bg-white rounded-lg shadow-lg p-6 w-full h-full font-poppins">
    <div class="font-poppins">
        <div class="bg-white rounded-lg shadow-lg w-full h-full p-6">
            <h2 class="text-xl font-semibold mb-4">Buat Halaman Upload Resep</h2>

            @if (session('success'))
                <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('resep.store') }}" method="POST" enctype="multipart/form-data" class="md:flex md:space-x-6">
                @csrf

                <!-- Bagian kiri: Foto dan bahan -->
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

                    <input type="file" name="foto" id="foto" class="hidden" accept="image/*" onchange="handleFile(this.files)">

                    <!-- Bahan -->
                    <div class="mt-6">
                        <label class="block font-medium mb-2">Bahan</label>
                        <div id="bahan-container" class="space-y-2">
                            <input type="text" name="bahan[]" class="border p-2 rounded w-full">
                        </div>
                        <button type="button" onclick="tambahBahan()" class="mt-2 text-blue-600 hover:underline text-sm">
                            + Bahan
                        </button>
                    </div>
                </div>

                <!-- Bagian kanan: Form -->
                <div class="w-full md:w-2/3 space-y-6 mt-6 md:mt-0">
                    <div>
                        <label class="block font-medium">Judul Resep</label>
                        <input type="text" name="judul" class="border p-2 rounded w-full" required>
                    </div>

                    <div>
                        <label class="block font-medium">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="border p-2 rounded w-full"></textarea>
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
                        <label class="block font-medium">Langkah-langkah Memasak</label>
                        <div id="langkah-container" class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-600 text-white font-bold">1</div>
                                <div class="flex-1 space-y-2">
                                    <textarea name="langkah[]" rows="3" placeholder="Langkah memasak" class="border p-2 rounded w-full"></textarea>
                                    <div
                                        class="border-2 border-dashed border-gray-300 rounded-lg flex items-center justify-center cursor-pointer hover:bg-gray-50"
                                        style="width: 80px; height: 80px;"
                                        onclick="this.nextElementSibling.click()"
                                    >
                                        <img src="{{ asset('images/camera.png') }}" alt="Preview" class="w-6 h-6">
                                    </div>
                                    <input type="file" name="foto_langkah[]" class="hidden" accept="image/*">
                                </div>
                            </div>
                        </div>
                        <button type="button" onclick="tambahLangkah()" class="mt-3 text-blue-600 hover:underline text-sm">
                            + Tambah Langkah
                        </button>
                    </div>

                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Terbitkan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

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

    let langkahCounter = 2;

    function tambahLangkah() {
        const container = document.getElementById('langkah-container');

        const wrapper = document.createElement('div');
        wrapper.className = 'flex items-start space-x-3';

        const circle = document.createElement('div');
        circle.className = 'flex items-center justify-center w-8 h-8 rounded-full bg-blue-600 text-white font-bold';
        circle.textContent = langkahCounter;

        const content = document.createElement('div');
        content.className = 'flex-1 space-y-2';
        content.innerHTML = `
            <textarea name="langkah[]" rows="3" placeholder="Langkah memasak" class="border p-2 rounded w-full"></textarea>
            <div
                class="border-2 border-dashed border-gray-300 rounded-lg flex items-center justify-center cursor-pointer hover:bg-gray-50"
                style="width: 80px; height: 80px;"
                onclick="this.nextElementSibling.click()"
            >
                <img src="{{ asset('images/camera.png') }}" alt="Preview" class="w-6 h-6">
            </div>
            <input type="file" name="foto_langkah[]" class="hidden" accept="image/*">
        `;

        wrapper.appendChild(circle);
        wrapper.appendChild(content);
        container.appendChild(wrapper);

        langkahCounter++;
    }
</script>
@endsection
