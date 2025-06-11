<?php

namespace App\Http\Controllers\Backend;

use App\Models\Provinsi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProvinsiRequest;
use App\Http\Services\Backend\ProvinsiService;

class ProvinsiController extends Controller
{
    public function __construct(
        private ProvinsiService $provinsiService,
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('backend.provinsi.index', [
            'provinsis' => $this->provinsiService->select()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.provinsi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProvinsiRequest $request)
    {
       $data = $request->validated();
        try {
            $provinsi = $this->provinsiService->create($data);

            return response()->json([
                'message' => 'Data Provinsi Berhasil Ditambahkan...'
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'message' => 'Data Provinsi Gagal Ditambahkan...' . $error->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(String $uuid)
    {
        try {
            return view('backend.provinsi.show', [
                'provinsi' => $this->provinsiService->getFirstBy('user_id', $uuid)
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
        return view('backend.provinsi.edit', [
            'provinsi' => $this->provinsiService->getFirstBy('uuid', $uuid),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(ProvinsiRequest $request, string $uuid)
    {
        $data = $request->validated();

        $getData = $this->provinsiService->getFirstBy('uuid', $uuid);

        try {
            $this->provinsiService->update($data, $getData->uuid);

            return response()->json(['message' => 'Data provinsi Berhasil Diubah!']);
        } catch (\Exception $err) {
            return response()->json(['message' => $err->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        $provinsi = $this->provinsiService->getFirstBy('uuid', $uuid);

        $this->provinsiService->delete($uuid);

        return response()->json(['message' => 'Data provinsi Berhasil Dihapus...']);
    }
}
