<?php

namespace App\Http\Controllers;

use App\Models\AcaraLomba;
use App\Models\Instrumen;
use App\Models\Pelatih;
use App\Models\Wasit;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InstrumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Data Instrumen";
        if (auth()->user()->status == "WASIT") {
            $instrumens = Instrumen::where('id_wasit', auth()->user()->Wasit->id)->get();
            $wasits = Wasit::where('id', auth()->user()->Wasit->id)->get();
            $penilais = Pelatih::all();
        } else if (auth()->user()->status == "PENILAI") {
            $instrumens = Instrumen::where('id_penilai', auth()->user()->pelatih->id)->get();
            $wasits = Wasit::select('id_user', DB::raw('MIN(id) as id')) // Pilih id yang minimum
                ->groupBy('id_user')
                ->get();
            $penilais = Pelatih::where('id', auth()->user()->Pelatih->id)->get();
        } else {
            $instrumens = Instrumen::all();
             $wasits = Wasit::with('user')
                ->select('id_user', DB::raw('MIN(id) as id')) // Pilih id yang minimum
                ->groupBy('id_user')
                ->latest()
                ->get();
            $penilais = Pelatih::all();
        }

        $lombas = AcaraLomba::all();

        return view('dashboard.instrumen.index')->with(compact('title', 'instrumens', 'wasits', 'lombas', 'penilais'));
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
                'id_penilai' => 'required',
                'id_wasit' => 'required',
                'id_lomba' => 'required',
                'pb' => 'required',
                'alamat' => 'required',
            ]);

            Instrumen::create($validatedData);

            return redirect('/instrumen')->with('success', 'Instrumen berhasil dibuat');
        } catch (QueryException $e) {
            return redirect('/instrumen')->with('failed', 'Terjadi kesalahan dalam menyimpan data instrumen. ' . $e . ' Silakan coba lagi.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Instrumen $instruman) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instrumen $instrumen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instrumen $instruman)
    {
        try {
            $validatedData = $request->validate([
                'id_penilai' => 'required',
                'id_wasit' => 'required',
                'id_lomba' => 'required',
                'pb' => 'required',
                'alamat' => 'required',
            ]);

            Instrumen::where('id', $instruman->id)->update($validatedData);

            return redirect('/instrumen')->with('success', 'Instrumen berhasil diubah');
        } catch (QueryException $e) {
            return redirect('/instrumen')->with('failed', 'Terjadi kesalahan dalam menyimpan data Instrumen. ' . $e . ' Silakan coba lagi.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instrumen $instruman)
    {
        
    foreach ($instruman->Form as $form) {
        // Hapus semua jawaban yang terkait dengan form ini
        $form->Jawaban()->delete();
    }

    // Hapus semua form yang terkait dengan instrumen ini
    $instruman->Form()->delete();

    // Hapus instrumen
    $instruman->delete();
        // Instrumen::destroy($instruman->id);
        return redirect('/instrumen')->with('success', "Wasit " . $instruman->Wasit->user->name . " berhasil dihapus!");
    }
}
