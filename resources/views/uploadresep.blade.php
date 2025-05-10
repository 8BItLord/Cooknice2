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

        <div>
            <label class="block font-medium">Judul Resep</label>
            <input type="text" name="judul" class="border p-2 rounded w-full" required>
        </div>

        <div>
            <label class="block font-medium">Deskripsi</label>
            <textarea name="deskripsi" rows="3" class="border p-2 rounded w-full"></textarea>
        </div>

        <div>
            <label class="block font-medium">Foto Resep</label>
            <input type="file" name="foto" class="border p-2 rounded w-full">
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
            <label class="block font-medium">Bahan</label>
            <input type="text" name="bahan[]" class="border p-2 rounded w-full">
            <!-- Tambah tombol tambah bahan bisa pakai JS nanti -->
        </div>

        <div>
            <label class="block font-medium">Langkah</label>
            <input type="text" name="langkah[]" class="border p-2 rounded w-full">
            <input type="file" name="foto_langkah[]" class="border p-2 rounded w-full">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Terbitkan
        </button>
    </form>
@endsection
