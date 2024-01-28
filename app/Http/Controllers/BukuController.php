<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class BukuController extends Controller
{
    public function index()
    {
        $title = "Buku";
        return view('dashboard.buku.index')->with(compact('title'));
    }
}
