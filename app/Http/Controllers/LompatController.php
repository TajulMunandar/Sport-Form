<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LompatController extends Controller
{
    public function index()
    {
        $title = "Instrumen Lompat";
        $wasits = User::where('status', "WASIT")->get();
        return view('dashboard.lompat.index')->with(compact("title","wasits"));
    }
}
