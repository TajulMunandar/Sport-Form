<?php

namespace App\Http\Controllers;

use App\Models\Instrumen;
use Illuminate\Http\Request;

class JalanController extends Controller
{
    public function index(Request $request)
    {
        $instrumen = Instrumen::where('id', request('id'))->get();
        $title = "Instrumen Jalan";
        return view('dashboard.jalan.index')->with(compact("title", "instrumen"));
    }
}
