<?php

namespace App\Http\Controllers;

use App\Models\AcaraLomba;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class AcaraLombaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Acara Lomba";
        $lombas = AcaraLomba::all();
        return view('dashboard.lomba.index')->with(compact('title', 'lombas'));
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
                'nama_acara' => 'required',
                'tahun' => 'required',
            ]);

            AcaraLomba::create($validatedData);

            return redirect('/lomba')->with('success', 'Acara Lomba berhasil dibuat');
        } catch (QueryException $e) {
            return redirect('/lomba')->with('failed', 'Terjadi kesalahan dalam menyimpan data Penilai. ' . $e . ' Silakan coba lagi.');
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
    public function update(Request $request, AcaraLomba $lomba)
    {
        try {
            $validatedData = $request->validate([
                'nama_acara' => 'required',
                'tahun' => 'required',
            ]);

            AcaraLomba::where('id', $lomba->id)->update($validatedData);

            return redirect('/lomba')->with('success', 'Acara Lomba berhasil dibuat');
        } catch (QueryException $e) {
            return redirect('/lomba')->with('failed', 'Terjadi kesalahan dalam menyimpan data Penilai. ' . $e . ' Silakan coba lagi.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AcaraLomba $lomba)
    {
        AcaraLomba::destroy($lomba->id);
        return redirect('/lomba')->with('success', "Acara Lomba " . $lomba->nama_acara . " berhasil dihapus!");
    }
}
