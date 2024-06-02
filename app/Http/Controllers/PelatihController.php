<?php

namespace App\Http\Controllers;

use App\Models\Pelatih;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class PelatihController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->status == "PENILAI") {
            $useres = auth()->user()->name;
            $pelatihs = Pelatih::where('id_user', auth()->user()->id)->get();
        } else {
            $useres = User::where('status', "PENILAI")->get();
            $pelatihs = Pelatih::with('user')->get();
        }

        $title = "Data Riwayat Tugas Penilai";
        return view('dashboard.wasit.tabs')->with(compact('pelatihs', 'title', 'useres'));
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
        try {
            $validatedData = $request->validate([
                'id_user' => 'required',
                'tempat' => 'required',
                'tahun' => 'required',
                'jenis_kegiatan' => 'required',
                'keterangan' => 'required',
            ]);

            Pelatih::create($validatedData);

            return redirect('/pelatih')->with('success', 'Penilai berhasil dibuat');
        } catch (QueryException $e) {
            return redirect('/pelatih')->with('failed', 'Terjadi kesalahan dalam menyimpan data Penilai. ' . $e . ' Silakan coba lagi.');
        }
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
    public function update(Request $request, Pelatih $pelatih)
    {
        try {
            $validatedData = $request->validate([
                'id_user' => 'required',
                'tempat' => 'required',
                'tahun' => 'required',
                'jenis_kegiatan' => 'required',
                'keterangan' => 'required',
            ]);

            Pelatih::where('id', $pelatih->id)->update($validatedData);

            return redirect('/pelatih')->with('success', 'Penilai berhasil diubah');
        } catch (QueryException $e) {
            return redirect('/pelatih')->with('failed', 'Terjadi kesalahan dalam menyimpan data Penilai. ' . $e . ' Silakan coba lagi.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelatih $pelatih)
    {
        Pelatih::destroy($pelatih->id);
        return redirect('/pelatih')->with('success', "Penilai " . $pelatih->user->name . " berhasil dihapus!");
    }
}
