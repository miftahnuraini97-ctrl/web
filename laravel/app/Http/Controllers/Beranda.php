<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class Beranda extends Controller
{
    function index()
    {
        return view('beranda');
    }
}
