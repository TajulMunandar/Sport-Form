<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.user.index', [
            'users' => User::latest()->get(),
            'title' => "Data User"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|min:3',
            'jenis_kelamin' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'status' => 'required',
            'sertif' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|max:255',
            'role' => 'required',
        ]);

        if ($request->hasFile('sertif')) {
            $file = $request->file('sertif');
            // Pindahkan file ke direktori tujuan
            $fileName = $file->getClientOriginalName(); // dapatkan nama asli file
            $file->move(public_path('file-sertif'), $fileName);

            // Simpan path ke dalam data yang divalidasi
            $validatedData['sertif'] = 'Sport-Form/public/file-sertif/' . $fileName;
        }


        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role'] = intval($validatedData['role']);

        User::create($validatedData);

        return redirect('/user')->with('success', 'User baru berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255|min:3',
            'jenis_kelamin' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'status' => 'required',
            'email' => 'required',
            'role' => 'required',
        ];

        if ($request->email != $user->email) {
            $rules['email'] = ['required', 'unique:users'];
        }

        $validatedData = $request->validate($rules);

       if ($user->sertif) {
            $fileName = basename($user->sertif); // Mendapatkan nama file dari path yang tersimpan di database
            $oldFilePath = public_path('file-sertif/'.$fileName); // Path lengkap menuju file yang lama
            if (File::exists($oldFilePath)) {
                File::delete($oldFilePath); // Hapus file lama dari sistem file
            }
        }

        if ($request->hasFile('sertif')) {
            $file = $request->file('sertif');
            $fileName = $file->getClientOriginalName(); // dapatkan nama asli file
            $file->move(public_path('file-sertif'), $fileName);
            $validatedData['sertif'] = 'Sport-Form/public/file-sertif/' . $fileName; // Simpan path ke dalam data yang divalidasi
        }

        User::where('id', $user->id)->update($validatedData);

        return redirect('/user')->with('success', 'User berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if ($user->sertif) {
            $fileName = basename($user->sertif); // Mendapatkan nama file dari path yang tersimpan di database
            $oldFilePath = public_path('file-sertif/'.$fileName); // Path lengkap menuju file yang lama
            if (File::exists($oldFilePath)) {
                File::delete($oldFilePath); // Hapus file lama dari sistem file
            }
        }

        User::destroy($user->id);
        return redirect('/user')->with('success', "User " . $user->name . " berhasil dihapus!");
    }

    public function resetPasswordAdmin(Request $request, User $user)
    {
        try {
            $rules = [
                'password' => 'required|string|max:255|confirmed',
            ];

            $validatedData = $request->validate($rules);
            $validatedData['password'] = Hash::make($validatedData['password']);

            User::where('id', $user->id)->update($validatedData);

            return redirect()->route('user.index')->with('success', 'Password berhasil diubah!');
        } catch (\Exception $e) {
            return back()->with('failed', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
