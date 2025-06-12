<?php

namespace App\Http\Controllers\Backend;

use App\Models\Obat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ObatRequest;
use App\Http\Services\Backend\ObatService;

class ObatController extends Controller
{
   public function __construct(
        private ObatService $obatService,
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('backend.obat.index', [
            'obats' => $this->obatService->select()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
   public function create(Request $request)
    {
        return view('backend.obat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ObatRequest $request)
    {
       $data = $request->validated();
        try {
            $obat = $this->obatService->create($data);

            return response()->json([
                'message' => 'Data Obat Berhasil Ditambahkan...'
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'message' => 'Data Obat Gagal Ditambahkan...' . $error->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(String $uuid)
    {
        try {
            return view('backend.obat.show', [
                'obat' => $this->obatService->getFirstBy('user_id', $uuid)
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
        return view('backend.obat.edit', [
            'obat' => $this->obatService->getFirstBy('uuid', $uuid),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(ObatRequest $request, string $uuid)
    {
        $data = $request->validated();

        $getData = $this->obatService->getFirstBy('uuid', $uuid);

        try {
            $this->obatService->update($data, $getData->uuid);

            return response()->json(['message' => 'Data obat Berhasil Diubah!']);
        } catch (\Exception $err) {
            return response()->json(['message' => $err->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        $obat = $this->obatService->getFirstBy('uuid', $uuid);

        $this->obatService->delete($uuid);

        return response()->json(['message' => 'Data obat Berhasil Dihapus...']);
    }
}

