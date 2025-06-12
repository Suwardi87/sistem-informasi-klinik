<?php

namespace App\Http\Controllers\Backend;

use App\Models\Provinsi;
use App\Models\Kabupaten;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\KabupatenRequest;
use App\Http\Services\Backend\KabupatenService;

class KabupatenController extends Controller
{
    public function __construct(
        private KabupatenService $kabupatenService,
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('backend.kabupaten.index', [
            'kabupatens' => $this->kabupatenService->select()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
   public function create(Request $request)
    {
        $provinsi = Provinsi::all();
        return view('backend.kabupaten.create',[
            'provinsis' => $provinsi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KabupatenRequest $request)
    {
       $data = $request->validated();
        try {
            $kabupaten = $this->kabupatenService->create($data);

            return response()->json([
                'message' => 'Data Kabupaten Berhasil Ditambahkan...'
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'message' => 'Data Kabupaten Gagal Ditambahkan...' . $error->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(String $uuid)
    {
        try {
            return view('backend.kabupaten.show', [
                'kabupaten' => $this->kabupatenService->getFirstBy('user_id', $uuid)
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
        return view('backend.kabupaten.edit', [
            'kabupaten' => $this->kabupatenService->getFirstBy('uuid', $uuid),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(KabupatenRequest $request, string $uuid)
    {
        $data = $request->validated();

        $getData = $this->kabupatenService->getFirstBy('uuid', $uuid);

        try {
            $this->kabupatenService->update($data, $getData->uuid);

            return response()->json(['message' => 'Data kabupaten Berhasil Diubah!']);
        } catch (\Exception $err) {
            return response()->json(['message' => $err->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        $kabupaten = $this->kabupatenService->getFirstBy('uuid', $uuid);

        $this->kabupatenService->delete($uuid);

        return response()->json(['message' => 'Data kabupaten Berhasil Dihapus...']);
    }
}
