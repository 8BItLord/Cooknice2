<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
     public function indexBeforeLogin()
    {
        $recipes = Recipe::latest()->get(); 

        return view('berandaSebelumLogin', compact('recipes'));
    }
    public function indexAfterLogin()
    {
        $recipes = Recipe::latest()->get(); // Ambil data resep
        return view('berandaSetelahLogin', compact('recipes')); // Teruskan ke view
    }
    public function create()
    {
        $categories = Category::all(); // Ambil semua kategori untuk dropdown
        return view('uploadresep', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'porsi' => 'nullable|string',
            'durasi' => 'nullable|string',
            'bahan' => 'required|array',
            'bahan.*' => 'required|string|max:255',
            'langkah' => 'required|array',
            'langkah.*' => 'required|string',
            'foto_langkah' => 'nullable|array',
            'foto_langkah.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        try {
            $fotoPath = $request->hasFile('foto') ? $request->file('foto')->store('resep/foto', 'public') : null;
            $fotoLangkahPaths = [];
            if ($request->hasFile('foto_langkah')) {
                foreach ($request->file('foto_langkah') as $fotoLangkah) {
                    $fotoLangkahPaths[] = $fotoLangkah ? $fotoLangkah->store('resep/langkah', 'public') : null;
                }
            }

            $recipe = new Recipe();
            $recipe->user_id = auth()->id(); // Pastikan user login
            $recipe->title = $request->title;
            $recipe->description = $request->description;
            $recipe->servings = $request->porsi;
            $recipe->duration = $request->durasi;
            $recipe->category_id = $request->category_id;
            $recipe->main_image = $fotoPath;
            $recipe->ingredients = $request->bahan;
            $recipe->steps = $request->langkah;
            $recipe->step_images = $fotoLangkahPaths;
            $recipe->save();

            return redirect()->route('recipe.create')->with('success', 'Resep berhasil diunggah!');
        } catch (\Exception $e) {
            \Log::error('Error menyimpan resep: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal menyimpan resep: ' . $e->getMessage())->withInput();
        }
    }
}