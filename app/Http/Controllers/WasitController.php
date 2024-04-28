<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wasit;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class WasitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->status == "WASIT") {
            $useres = auth()->user()->name;
            $wasits = Wasit::where('id_user', auth()->user()->id)->get();
        } else {
            $useres = User::where('status', "WASIT")->get();
            $wasits = Wasit::with('user')->get();
        }

        $title = "Wasit";
        return view('dashboard.wasit.index')->with(compact('wasits', 'title', 'useres'));
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

            Wasit::create($validatedData);

            return redirect('/wasit')->with('success', 'Wasit berhasil dibuat');
        } catch (QueryException $e) {
            return redirect('/wasit')->with('failed', 'Terjadi kesalahan dalam menyimpan data wasit. ' . $e . ' Silakan coba lagi.');
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
    public function update(Request $request, Wasit $wasit)
    {
        try {
            $validatedData = $request->validate([
                'id_user' => 'required',
                'tempat' => 'required',
                'tahun' => 'required',
                'jenis_kegiatan' => 'required',
                'keterangan' => 'required',
            ]);

            Wasit::where('id', $wasit->id)->update($validatedData);

            return redirect('/wasit')->with('success', 'Wasit berhasil diubah');
        } catch (QueryException $e) {
            return redirect('/wasit')->with('failed', 'Terjadi kesalahan dalam menyimpan data wasit. ' . $e . ' Silakan coba lagi.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wasit $wasit)
    {
        Wasit::destroy($wasit->id);
        return redirect('/wasit')->with('success', "Wasit " . $wasit->user->name . " berhasil dihapus!");
    }
}
