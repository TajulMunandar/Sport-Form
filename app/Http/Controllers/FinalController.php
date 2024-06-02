<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FinalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = request('id');
        $form = Form::where('id', $id)->first();
        return view('form.page.final')->with(compact('form'));
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
    public function update(Request $request)
    {
        $rules = [
            'catatan_penilai' => 'required'
        ];

        $validatedData = $request->validate($rules);

        Form::where('id', $request->id_form)->update($validatedData);

        return redirect('/instrumen')->with('success', 'Form baru berhasil tambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
