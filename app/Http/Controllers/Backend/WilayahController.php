<?php

namespace App\Http\Controllers\Backend;

use App\Models\Provinsi;
use App\Models\Kabupaten;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\WilayahRequest;
use App\Http\Services\Backend\WilayahService;

class WilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(
        private WilayahService $wilayahservice,
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.wilayah.index', [
            'wilayahs' => $this->wilayahservice->select()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $kabupaten = Kabupaten::all();
        $provinsi = Provinsi::all();

        return view('backend.wilayah.create', [
            'kabupatens' => $kabupaten,
            'provinsis' => $provinsi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WilayahRequest $request)
    {

        $data = $request->validated();
        try {
            $wilayah = $this->wilayahservice->create($data);

            return response()->json([
                'message' => 'Data wilayah Berhasil Ditambahkan...'
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'message' => 'Data wilayah Gagal Ditambahkan...' . $error->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(String $uuid)
    {
        try {
            return view('backend.wilayah.show', [
                'wilayah' => $this->wilayahservice->getFirstBy('user_id', $uuid)
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
        $kabupaten = Kabupaten::all();
        $provinsi = Provinsi::all();
        return view('backend.wilayah.edit', [
            'wilayah' => $this->wilayahservice->getFirstBy('uuid', $uuid),
            'kabupaten' => $kabupaten,
            'provinsi' => $provinsi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(WilayahRequest $request, string $uuid)
    {
        $data = $request->validated();

        $getData = $this->wilayahservice->getFirstBy('uuid', $uuid);

        try {
            $this->wilayahservice->update($data, $getData->uuid);

            return response()->json(['message' => 'Data wilayah Berhasil Diubah!']);
        } catch (\Exception $err) {
            return response()->json(['message' => $err->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        $wilayah = $this->wilayahservice->getFirstBy('uuid', $uuid);

        $this->wilayahservice->delete($uuid);

        return response()->json(['message' => 'Data wilayah Berhasil Dihapus...']);
    }
}
