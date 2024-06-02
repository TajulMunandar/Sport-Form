<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class JalanController extends Controller
{
    public function index()
    {
        $title = "Instrumen Jalan";
        $wasits = User::where('status', "WASIT")->get();
        return view('dashboard.jalan.index')->with(compact("title", "wasits"));
    }
}
