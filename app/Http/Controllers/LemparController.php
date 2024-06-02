<?php

namespace App\Http\Controllers;

use App\Models\Instrumen;
use Illuminate\Http\Request;
use App\Models\User;

class LemparController extends Controller
{
    public function index(Request $request)
    {
        $instrumen = Instrumen::where('id', request('id'))->get();
        $title = "Instrumen Lempar";
        return view('dashboard.lempar.index')->with(compact("title", "instrumen"));
    }
}
