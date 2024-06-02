<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LemparController extends Controller
{
    public function index()
    {
        $title = "Instrumen Lempar";
        $wasits = User::where('status', "WASIT")->get();
        return view('dashboard.lempar.index')->with(compact("title", "wasits"));
    }
}
