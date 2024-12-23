<?php

namespace App\Http\Controllers;

use App\Models\Pelatih;
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

                // Pindahkan file ke direktori tujuan
                $fileName = $file->getClientOriginalName(); // dapatkan nama asli file
                $file->move(public_path('file-sertif'), $fileName);

                // Simpan path ke dalam data yang divalidasi
                $validated['sertif'] = 'file-sertif/' . $fileName;
            }

            $user = User::create($validated);

            if ($user->status === 'WASIT') {
                $wasitData = [
                    'id_user' => $user->id,
                    'tempat' => $request->tempat,
                    'tahun' => $request->tahun,
                    'jenis_kegiatan' => $request->jenis_kegiatan,
                    'keterangan' => $request->keterangan,
                ];

                Wasit::create($wasitData);
            } elseif ($user->status === 'PENILAI') {
                $penilaiData = [
                    'id_user' => $user->id,
                    'tempat' => $request->tempat,
                    'tahun' => $request->tahun,
                    'jenis_kegiatan' => $request->jenis_kegiatan,
                    'keterangan' => $request->keterangan,
                ];

                Pelatih::create($penilaiData);
            }

            return redirect('/login')->with('success', 'Akun Sudah Berhasil Dibuat! Silahkan Masuk');
        } catch (\Exception $e) {

            return redirect()->back()->with('error', "Gagal membuat akun. Silahkan coba lagi. Email Sudah Digunakan");
        }
    }
}
