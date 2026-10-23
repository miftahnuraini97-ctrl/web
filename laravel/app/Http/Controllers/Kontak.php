<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class Kontak extends Controller
{
    function index()
    {
        return view('kontak');
    }
}
