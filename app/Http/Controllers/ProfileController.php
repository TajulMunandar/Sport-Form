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

        if (auth()->user()->status == 'WASIT') {
            $rules += [
                'tempat' => 'required|string|max:255',
                'tahun' => 'required|integer|min:1900|max:' . date('Y'),
                'jenis_kegiatan' => 'required|string|max:255',
                'keterangan' => 'required|string|max:255',
            ];
        }

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

        // Jika status pengguna adalah WASIT, update atau tambahkan data wasit
        if ($user->status === 'WASIT') {
            // Jika pengguna sudah memiliki data wasit, update data tersebut
            if ($user->wasit->first()) {
                $user->wasit->first()->update([
                    'tempat' => $validatedData['tempat'],
                    'tahun' => $validatedData['tahun'],
                    'jenis_kegiatan' => $validatedData['jenis_kegiatan'],
                    'keterangan' => $validatedData['keterangan'],
                ]);
            } else {
                // Jika tidak, buat data wasit baru
                $user->wasit->first()->create([
                    'tempat' => $validatedData['tempat'],
                    'tahun' => $validatedData['tahun'],
                    'jenis_kegiatan' => $validatedData['jenis_kegiatan'],
                    'keterangan' => $validatedData['keterangan'],
                ]);
            }
        }

        return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
    }
}
