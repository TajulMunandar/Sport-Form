<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LompatController extends Controller
{
    public function index()
    {
        $title = "Form Lompat";
        return view('dashboard.lompat.index')->with(compact("title"));
    }
}
