<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Jawaban;
use App\Models\Soal;
use Illuminate\Http\Request;

class TanggungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = request('id');
        $form = Form::where('id', $id)->first();
        if ($form->jenis == 1) {
            $soals = Soal::where('id_aspek', 1)->get();
        } elseif ($form->jenis == 2) {
            $soals = Soal::where('id_aspek', 13)->get();
        } elseif ($form->jenis == 3) {
            $soals = Soal::where('id_aspek', 9)->get();
        } elseif ($form->jenis == 4) {
            $soals = Soal::where('id_aspek', 5)->get();
        }
        return view('form.page.quiz')->with(compact('soals', 'form'));
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
        $soal = $request->input('id_soal');
        $skor = $request->input('skor');
        foreach ($soal as $soa => $index) {
            $validatedData1 = [
                'id_form' => $request->id_form,
                'id_soal' => $soal[$soa],
                'skor' => $skor[$index],
            ];

            Jawaban::create($validatedData1);
        }
        return redirect()->route('penguasaan.index', ['id' => $request->id_form])->with('success', 'Tanggung Jawab Profesi berhasil ditambahkan!');
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
