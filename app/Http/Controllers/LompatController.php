<?php

namespace App\Http\Controllers;

use App\Models\Instrumen;
use Illuminate\Http\Request;
use App\Models\User;

class LompatController extends Controller
{
    public function index(Request $request)
    {
        $instrumen = Instrumen::where('id', request('id'))->get();
        $title = "Instrumen Lompat";
        return view('dashboard.lompat.index')->with(compact("title", "instrumen"));
    }
}
