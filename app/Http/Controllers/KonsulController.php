<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonsulController extends Controller
{
    public function konsultasi()
    {
        return view('konsultasi');
    }
}
