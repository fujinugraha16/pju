<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPJUController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sudahDiperbaiki()
    {
        return view('sudah_diperbaiki');
    }

    public function belumDiperbaiki()
    {
        return view('belum_diperbaiki');
    }
}
