<?php

namespace App\Http\Controllers;

use App\Models\SiswaPrestasi;
use Illuminate\Http\Request;

class SiswaPrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswaPrestasi = SiswaPrestasi::all();
        return response()->json($siswaPrestasi);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'jenis_prestasi' => 'nullable|string|max:100',
            'tingkat' => 'nullable|string|max:50',
            'tahun' => 'nullable|integer',
            'penyelenggara' => 'nullable|string|max:100',
            'keterangan' => 'nullable|string'
        ]);

        $siswaPrestasi = SiswaPrestasi::create($request->all());
        return response()->json($siswaPrestasi, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiswaPrestasi  $siswaPrestasi
     * @return \Illuminate\Http\Response
     */
    public function show(SiswaPrestasi $siswaPrestasi)
    {
        return response()->json($siswaPrestasi);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiswaPrestasi  $siswaPrestasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiswaPrestasi $siswaPrestasi)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'jenis_prestasi' => 'nullable|string|max:100',
            'tingkat' => 'nullable|string|max:50',
            'tahun' => 'nullable|integer',
            'penyelenggara' => 'nullable|string|max:100',
            'keterangan' => 'nullable|string'
        ]);

        $siswaPrestasi->update($request->all());
        return response()->json($siswaPrestasi);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiswaPrestasi  $siswaPrestasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiswaPrestasi $siswaPrestasi)
    {
        $siswaPrestasi->delete();
        return response()->json(null, 204);
    }
}
