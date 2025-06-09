<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        return view('editprofile');
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'profile_description' => 'nullable|string|max:1000',
        ]);

        try {
            $user = Auth::user();
            $data = [
                'name' => $request->name,
                'profile_description' => $request->profile_description,
            ];

            if ($request->hasFile('profile_picture')) {
                // Hapus gambar lama jika ada
                if ($user->profile_picture) {
                    Storage::disk('public')->delete($user->profile_picture);
                }
                $data['profile_picture'] = $request->file('profile_picture')->store('images/profiles', 'public');
            }

            $user->update($data);

            return redirect()->route('profile.edit')->with('success', 'Profil berhasil diperbarui!');
        } catch (\Exception $e) {
            Log::error('Error updating profile: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal memperbarui profil: ' . $e->getMessage())->withInput();
        }
    }

    public function show()
    {
        $recipes = Recipe::where('user_id', Auth::id())
                        ->with('user')
                        ->latest()
                        ->get();
        return view('halamanprofile', compact('recipes'));
    }
}