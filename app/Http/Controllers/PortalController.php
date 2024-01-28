<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    function index()
    {
        $title = "Dasboard";
        return view('dashboard.index')->with(compact("title"));
    }
}
