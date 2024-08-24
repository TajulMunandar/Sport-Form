<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Instrumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Penilaian";
        if (auth()->user()->status == "WASIT") {
            $instrumens = Instrumen::where('id_wasit', auth()->user()->Wasit->id)
                ->groupBy('id_wasit')
                ->select('id_wasit', DB::raw('MAX(id) as id'), DB::raw('MAX(pb) as pb'), DB::raw('MAX(alamat) as alamat'), DB::raw('MAX(id_lomba) as id_lomba'))
                ->get();
        } else {
            $instrumens = Instrumen::groupBy('id_wasit')
                ->select('id_wasit', DB::raw('MAX(id) as id'), DB::raw('MAX(pb) as pb'), DB::raw('MAX(alamat) as alamat'), DB::raw('MAX(id_lomba) as id_lomba'))
                ->get();
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

        // Ambil ID Wasit dari instrumen yang sedang ditampilkan
        $instrumenId = $penilaian->id;
        $instrumen = Instrumen::find($instrumenId);
        $idWasit = $instrumen->id_wasit;

        // Ambil semua instrumen terkait dengan id_wasit
        $instrumens = Instrumen::where('id_wasit', $idWasit)
            ->take(3) // Ambil maksimal 3 instrumen
            ->get();

        $penilaiData = [];
        $totalPersentase = 0;
        $jumlahPenilai = 0;

        // Proses setiap instrumen
        foreach ($instrumens as $instrumen) {
            $nilais = Form::where('id_instrumen', $instrumen->id)
                ->with('Jawaban.Soal') // Pastikan relasi ter-load
                ->get();

            foreach ($nilais as $nilai) {
                $totalSkor = $nilai->Jawaban->sum('skor');
                $jumlahSoal = $nilai->Jawaban->count(); // Total soal yang dinilai

                // Hitung persentase nilai
                if ($jumlahSoal != 0) {
                    $persentase = ($totalSkor / $jumlahSoal) * 100;
                    $persentase = $persentase / 4; // Normalisasi
                } else {
                    $persentase = 0;
                }

                $penilai = $nilai->Instrumen->Penilai->user->name;

                // Tambah data penilai
                $penilaiData[$penilai][] = [
                    'tanggal' => $nilai->created_at->format('Y-m-d'),
                    'nama_lomba' => $instrumen->AcaraLomba->nama_acara,
                    'nilai' => number_format($persentase, 2),
                    'simpulan' => $this->getSimpulan($persentase),
                    'catatan_penilai' => $nilai->catatan_penilai,
                ];

                $totalPersentase += $persentase;
                $jumlahPenilai++;
            }
        }

        // Hitung rata-rata persentase berdasarkan jumlah penilai
        $averagePersentase = $jumlahPenilai != 0 ? $totalPersentase / $jumlahPenilai : 0;
        $wasit = $instrumen->Wasit;

        return view('dashboard.penilaian.show', compact('title', 'penilaiData', 'instrumen', 'averagePersentase', 'wasit'));
    }


    // Fungsi untuk menentukan simpulan penilaian
    private function getSimpulan($persentase)
    {
        if ($persentase >= 95) {
            return 'Sangat Baik';
        } elseif ($persentase >= 85) {
            return 'Baik';
        } elseif ($persentase >= 75) {
            return 'Cukup';
        } elseif ($persentase >= 65) {
            return 'Sedang';
        } else {
            return 'Kurang';
        }
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
