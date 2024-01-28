<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JalanController extends Controller
{
    public function index()
    {
        $title = "Form Jalan";
        return view('dashboard.jalan.index')->with(compact("title"));
    }
}
