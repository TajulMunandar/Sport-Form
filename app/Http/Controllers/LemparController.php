<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LemparController extends Controller
{
    public function index()
    {
        $title = "Form Lempar";
        return view('dashboard.lempar.index')->with(compact("title"));
    }
}
