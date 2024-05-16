<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Penilaian";
        $nilais = Form::withCount('Jawaban')
            ->get();

        foreach ($nilais as $nilai) {
            $totalSkor = $nilai->Jawaban->sum('skor');
            $jumlahSoal = $nilai->Jawaban->map(function ($jawaban) {
                return $jawaban->Soal->count();
            })->count();

            if ($jumlahSoal != 0) {
                $persentase = ($totalSkor / $jumlahSoal) * 100;
            } else {
                $persentase = 0; // Atau nilai default lainnya jika tidak ada jawaban
            }

            // Masukkan persentase ke dalam objek nilai
            $nilai->persentase = $persentase;
        }

        return view('dashboard.penilaian.index', compact('title', 'nilais'));
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
