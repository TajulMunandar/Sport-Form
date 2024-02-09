<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LompatController extends Controller
{
    public function index()
    {
        $title = "Instrumen Lompat";
        return view('dashboard.lompat.index')->with(compact("title"));
    }
}
