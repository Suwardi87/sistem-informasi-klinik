<?php

namespace App\Http\Controllers\Backend;

use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display the dashboard view.
     */
    public function index()
    {
        $role = auth()->user()->role;

        return match ($role) {
            'admin', 'petugas', 'dokter', 'kasir' => view('backend.main', [
                'pasiens' => Pasien::all(),
            ]),
            'pasien' => view('welcome', [
                'pasiens' => Pasien::all(),
            ]),
            default => abort(403, 'Tidak memiliki akses'),
        };
    }
}

