<?php

namespace App\Http\Controllers;

class PeraturanController extends Controller
{
    public function index()
    {
        $title = "Peraturan Atletik";
        $content = "Peraturan teknis perlombaan atletik tahun edisi 2022-2023";
        return view('dashboard.peraturan.index')->with(compact('title', 'content'));
    }

}
