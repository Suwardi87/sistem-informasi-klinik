<?php

namespace App\Http\Controllers\Backend;

use App\Models\Tindakan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TindakanRequest;
use App\Http\Services\Backend\TindakanService;

class TindakanController extends Controller
{
    public function __construct(
        private TindakanService $tindakanService,
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('backend.tindakan.index', [
            'tindakans' => $this->tindakanService->select()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
   public function create(Request $request)
    {
        return view('backend.tindakan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TindakanRequest $request)
    {
       $data = $request->validated();
        try {
            $tindakan = $this->tindakanService->create($data);

            return response()->json([
                'message' => 'Data Tindakan Berhasil Ditambahkan...'
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'message' => 'Data Tindakan Gagal Ditambahkan...' . $error->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(String $uuid)
    {
        try {
            return view('backend.tindakan.show', [
                'tindakan' => $this->tindakanService->getFirstBy('user_id', $uuid)
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
        return view('backend.tindakan.edit', [
            'tindakan' => $this->tindakanService->getFirstBy('uuid', $uuid),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(TindakanRequest $request, string $uuid)
    {
        $data = $request->validated();

        $getData = $this->tindakanService->getFirstBy('uuid', $uuid);

        try {
            $this->tindakanService->update($data, $getData->uuid);

            return response()->json(['message' => 'Data tindakan Berhasil Diubah!']);
        } catch (\Exception $err) {
            return response()->json(['message' => $err->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        $tindakan = $this->tindakanService->getFirstBy('uuid', $uuid);

        $this->tindakanService->delete($uuid);

        return response()->json(['message' => 'Data tindakan Berhasil Dihapus...']);
    }
}

