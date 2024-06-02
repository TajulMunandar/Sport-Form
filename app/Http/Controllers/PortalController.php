<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PortalController extends Controller
{
    function index()
    {
        $title = "Dasboard";
        $wasits = User::where('status', "WASIT")->get();
        $total_wasits = User::where('status', "WASIT")->count();
        $total_penilais = User::where('status', "PENILAI")->count();
        return view('dashboard.index')->with(compact("title", "wasits", "total_wasits", "total_penilais"));
    }
}
