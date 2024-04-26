<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wasit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|max:255|min:3',
                'jenis_kelamin' => 'required',
                'ttl' => 'required',
                'alamat' => 'required',
                'no_hp' => 'required',
                'status' => 'required',
                'sertif' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required|max:255',
            ]);

            $validated['password'] = Hash::make($validated['password']);

            $validated['role'] = 2;

            if ($request->hasFile('sertif')) {
                $file = $request->file('sertif');

                // Simpan file yang diunggah ke dalam penyimpanan Laravel
                $file->store('public/file-sertif');

                $publicPath = 'storage/app/public/file-sertif/' . $file->hashName(); // Ubah path sesuai kebutuhan Anda

                // Simpan path ke dalam data yang divalidasi
                $validated['sertif'] = $publicPath;
            }

            $user = User::create($validated);

            if ($user->status === 'WASIT') {
                $wasitData = [
                    'id_user' => $user->id,
                    'tempat' => 'Tempat Default',
                    'tahun' => date('Y'),
                    'jenis_kegiatan' => 'Jenis Kegiatan Default',
                    'keterangan' => 'Keterangan Default',
                ];

                Wasit::create($wasitData);
            }

            return redirect('/login')->with('success', 'Akun Sudah Berhasil Dibuat! Silahkan Masuk');
        } catch (\Exception $e) {

            return redirect()->back()->with('error', "Gagal membuat akun. Silahkan coba lagi. $e");
        }
    }
}
