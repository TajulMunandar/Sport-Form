<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Instrumen;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Penilaian";
        if (auth()->user()->status == "WASIT") {
            $instrumens = Instrumen::where('id_wasit', auth()->user()->Wasit->id)->get();
        } else {
            $instrumens = Instrumen::all();
        }

        return view('dashboard.penilaian.index', compact('title', 'instrumens'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Instrumen $penilaian)
    {
        $title = "Penilaian Detail";

        $nilais = Form::withCount('Jawaban')->where('id_instrumen', $penilaian->id)
            ->get();
        $totalPersentase = 0;
        foreach ($nilais as $nilai) {
            $totalSkor = $nilai->Jawaban->sum('skor');
            $jumlahSoal = $nilai->Jawaban->map(function ($jawaban) {
                return $jawaban->Soal->count();
            })->count();

            if ($jumlahSoal != 0) {
                $persentase = ($totalSkor / $jumlahSoal) * 100;
                $persentase = $persentase / 4;
            } else {
                $persentase = 0; // Atau nilai default lainnya jika tidak ada jawaban
            }

            // Masukkan persentase ke dalam objek nilai
            $nilai->persentase = $persentase;

            $totalPersentase += $persentase;
        }

        $averagePersentase = $totalPersentase / 4;


        return view('dashboard.penilaian.show', compact('title', 'nilais', 'penilaian', 'averagePersentase'));
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
