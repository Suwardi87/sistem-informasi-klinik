<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::all();
        return view('welcome',[
            'pasiens' => $pasiens
        ]);
    }
}
