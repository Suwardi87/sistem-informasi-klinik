<?php

namespace App\Http\Controllers\Backend;

use App\Models\Pasien;
use App\Models\Kunjungan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\KunjunganRequest;
use App\Http\Services\Backend\KunjunganService;

class KunjunganController extends Controller
{
    public function __construct(
        private KunjunganService $kunjunganService,
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('backend.kunjungan.index', [
            'kunjungans' => $this->kunjunganService->select()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
   public function create(Request $request)
    {
        $pasien = Pasien::all();
        return view('backend.kunjungan.create',[
            'pasiens' => $pasien]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KunjunganRequest $request)
    {
       $data = $request->validated();
        try {
            $kunjungan = $this->kunjunganService->create($data);

            return response()->json([
                'message' => 'Data Kunjungan Berhasil Ditambahkan...'
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'message' => 'Data Kunjungan Gagal Ditambahkan...' . $error->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(String $uuid)
    {
        try {
            return view('backend.kunjungan.show', [
                'kunjungan' => $this->kunjunganService->getFirstBy('user_id', $uuid)
            ]);
        } catch (\Exception $err) {
            return response()->json(['message' => $err->getMessage()], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,String $uuid)
    {
        return view('backend.kunjungan.edit', [
            'kunjungan' => $this->kunjunganService->getFirstBy('uuid', $uuid),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(KunjunganRequest $request, string $uuid)
    {
        $data = $request->validated();

        $getData = $this->kunjunganService->getFirstBy('uuid', $uuid);

        try {
            $this->kunjunganService->update($data, $getData->uuid);

            return response()->json(['message' => 'Data kunjungan Berhasil Diubah!']);
        } catch (\Exception $err) {
            return response()->json(['message' => $err->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        $kunjungan = $this->kunjunganService->getFirstBy('uuid', $uuid);

        $this->kunjunganService->delete($uuid);

        return response()->json(['message' => 'Data kunjungan Berhasil Dihapus...']);
    }
}

