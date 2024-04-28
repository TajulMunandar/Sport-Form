<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        return view('auth.profile');
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $rules = [
            'name' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:LAKI-LAKI,PEREMPUAN',
            'ttl' => 'required',
            'sertif' => 'nullable|max:2048', // Ubah sesuai kebutuhan Anda
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'no_hp' => 'required|string|max:255',
        ];

        $validatedData = $request->validate($rules);

        // Update data user
        $user->update([
            'name' => $validatedData['name'],
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'ttl' => $validatedData['ttl'],
            'email' => $validatedData['email'],
            'no_hp' => $validatedData['no_hp'],
        ]);

        // Update sertifikat jika diunggah
        if ($request->hasFile('sertif')) {
            // Hapus sertifikat lama jika ada
            if ($request->oldFile) {
                Storage::delete($request->oldFile);
            }
            // Simpan sertifikat baru
            $validatedData['sertif'] = $request->file('sertif')->store('public/file-sertif');
        }

        return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
    }
}
