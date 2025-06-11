<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PegawaiRequest;
use App\Http\Services\Backend\PegawaiService;


class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(
        private PegawaiService $pegawaiService,
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pegawai.index', [
            'pegawais' => $this->pegawaiService->select()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $users = User::all();
        return view('backend.pegawai.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PegawaiRequest $request)
    {

        $data = $request->validated();
        try {
            $pegawai = $this->pegawaiService->create($data);

            return response()->json([
                'message' => 'Data Pegawai Berhasil Ditambahkan...'
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'message' => 'Data Pegawai Gagal Ditambahkan...' . $error->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(String $uuid)
    {
        try {
            return view('backend.pegawai.show', [
                'pegawai' => $this->pegawaiService->getFirstBy('user_id', $uuid)
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
        $users = User::all();
        return view('backend.pegawai.edit', [
            'pegawai' => $this->pegawaiService->getFirstBy('uuid', $uuid),
            'users' => $users
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(PegawaiRequest $request, string $uuid)
    {
        $data = $request->validated();

        $getData = $this->pegawaiService->getFirstBy('uuid', $uuid);

        try {
            $this->pegawaiService->update($data, $getData->uuid);

            return response()->json(['message' => 'Data Pegawai Berhasil Diubah!']);
        } catch (\Exception $err) {
            return response()->json(['message' => $err->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        $pegawai = $this->pegawaiService->getFirstBy('uuid', $uuid);

        $this->pegawaiService->delete($uuid);

        return response()->json(['message' => 'Data Pegawai Berhasil Dihapus...']);
    }
}
