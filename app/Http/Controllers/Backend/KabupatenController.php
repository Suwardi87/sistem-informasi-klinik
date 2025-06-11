<?php

namespace App\Http\Controllers\Backend;

use App\Http\Services\Backend\KabupatenService;
use App\Models\Kabupaten;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kabupaten $kabupaten)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kabupaten $kabupaten)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kabupaten $kabupaten)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kabupaten $kabupaten)
    {
        //
    }
}
