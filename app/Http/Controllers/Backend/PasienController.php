<?php

namespace App\Http\Controllers\Backend;

use App\Models\Pasien;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PasienRequest;
use App\Http\Services\Backend\PasienService;

class PasienController extends Controller
{
    public function __construct(
        private PasienService $pasienService,
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pasien.index', [
            'pasiens' => $this->pasienService->select()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $provinsis = Provinsi::all();
        $kabupatens = Kabupaten::all();
        return view('backend.pasien.create',[
            'provinsis' => $provinsis,
            'kabupatens' => $kabupatens
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PasienRequest $request)
    {
        $data = $request->validated();
        try {
            $pasien = $this->pasienService->create($data);
            return response()->json([
                'message' => 'Data Pasien Berhasil Ditambahkan...'
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'message' => 'Data Pasien Gagal Ditambahkan...' . $error->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(String $uuid)
    {
        try {
            return view('backend.pasien.show', [
                'pasien' => $this->pasienService->getFirstBy('user_id', $uuid)
            ]);
        } catch (\Exception $err) {
            return response()->json(['message' => $err->getMessage()], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, String $uuid)
    {
        $provinsis = Provinsi::all();
        $kabupatens = Kabupaten::all();
        return view('backend.pasien.edit', [
            'pasien' => $this->pasienService->getFirstBy('uuid', $uuid),
            'provinsis' => $provinsis,
            'kabupatens' => $kabupatens
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PasienRequest $request, string $uuid)
    {
        $getData = $this->pasienService->getFirstBy('uuid', $uuid);
        $data = $request->validated();
        try {
            $this->pasienService->update($data, $getData->uuid);
            return response()->json(['message' => 'Data pasien Berhasil Diubah!']);
        } catch (\Exception $err) {
            return response()->json(['message' => $err->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        $pasien = $this->pasienService->getFirstBy('uuid', $uuid);
        $this->pasienService->delete($uuid);
        return response()->json(['message' => 'Data pasien Berhasil Dihapus...']);
    }
}

