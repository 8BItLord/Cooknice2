<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResepController extends Controller
{
    public function create()
    {
        return view('uploadresep');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'foto' => 'nullable|image',
            'bahan' => 'required|array',
            'langkah' => 'required|array',
            'foto_langkah.*' => 'nullable|image',
        ]);

        // Simpan foto utama jika ada
        $fotoResep = null;
        if ($request->hasFile('foto')) {
            $fotoResep = $request->file('foto')->store('resep', 'public');
        }

        // Simpan langkah dengan foto jika ada
        $langkahArray = [];
        foreach ($request->langkah as $i => $langkah) {
            $fotoLangkah = $request->file('foto_langkah')[$i] ?? null;
            $fotoPath = $fotoLangkah ? $fotoLangkah->store('langkah', 'public') : null;

            $langkahArray[] = [
                'deskripsi' => $langkah,
                'foto' => $fotoPath,
            ];
        }

        // Simpan data ke database (di sini hanya contoh dump)
        return back()->with('success', 'Resep berhasil disimpan!')
                     ->with('data', [
                         'judul' => $request->judul,
                         'deskripsi' => $request->deskripsi,
                         'foto' => $fotoResep,
                         'porsi' => $request->porsi,
                         'durasi' => $request->durasi,
                         'bahan' => $request->bahan,
                         'langkah' => $langkahArray,
                     ]);
    }
}
