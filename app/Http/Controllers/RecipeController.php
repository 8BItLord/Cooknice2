<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RecipeController extends Controller
{
    public function create()
    {
        $categories = Category::all(); // Ambil semua kategori untuk dropdown
        return view('uploadresep', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'porsi' => 'nullable|string|max:100',
            'durasi' => 'nullable|string|max:100',
            'bahan' => 'required|array',
            'bahan.*' => 'required|string|max:255',
            'langkah' => 'required|array',
            'langkah.*' => 'required|string',
            'foto_langkah' => 'nullable|array',
            'foto_langkah.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Simpan foto utama
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('resep/foto', 'public');
        }

        // Simpan foto langkah (jika ada)
        $fotoLangkahPaths = [];
        if ($request->hasFile('foto_langkah')) {
            foreach ($request->file('foto_langkah') as $fotoLangkah) {
                if ($fotoLangkah) {
                    $path = $fotoLangkah->store('resep/langkah', 'public');
                    $fotoLangkahPaths[] = $path;
                } else {
                    $fotoLangkahPaths[] = null;
                }
            }
        }

        // Simpan ke database
        $recipe = new Recipe();
        $recipe->judul = $request->judul;
        $recipe->deskripsi = $request->deskripsi;
        $recipe->porsi = $request->porsi;
        $recipe->durasi = $request->durasi;
        $recipe->category_id = $request->category_id;
        $recipe->foto = $fotoPath;
        $recipe->bahan = $request->bahan;
        $recipe->langkah = $request->langkah;
        $recipe->foto_langkah = $fotoLangkahPaths;
        $recipe->save();

        return redirect()->back()->with('success', 'Resep berhasil diunggah!');
    }
}
