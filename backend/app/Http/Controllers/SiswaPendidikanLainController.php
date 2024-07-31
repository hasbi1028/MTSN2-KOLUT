<?php

namespace App\Http\Controllers;

use App\Models\SiswaPendidikanLain;
use Illuminate\Http\Request;

class SiswaPendidikanLainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswaPendidikanLain = SiswaPendidikanLain::all();
        return response()->json($siswaPendidikanLain);
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
            'jenis_pendidikan' => 'nullable|string|max:100',
            'penyelenggara' => 'nullable|string|max:100',
            'tahun_mulai' => 'nullable|integer',
            'tahun_selesai' => 'nullable|integer',
            'keterangan' => 'nullable|string'
        ]);

        $siswaPendidikanLain = SiswaPendidikanLain::create($request->all());
        return response()->json($siswaPendidikanLain, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiswaPendidikanLain  $siswaPendidikanLain
     * @return \Illuminate\Http\Response
     */
    public function show(SiswaPendidikanLain $siswaPendidikanLain)
    {
        return response()->json($siswaPendidikanLain);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiswaPendidikanLain  $siswaPendidikanLain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiswaPendidikanLain $siswaPendidikanLain)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'jenis_pendidikan' => 'nullable|string|max:100',
            'penyelenggara' => 'nullable|string|max:100',
            'tahun_mulai' => 'nullable|integer',
            'tahun_selesai' => 'nullable|integer',
            'keterangan' => 'nullable|string'
        ]);

        $siswaPendidikanLain->update($request->all());
        return response()->json($siswaPendidikanLain);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiswaPendidikanLain  $siswaPendidikanLain
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiswaPendidikanLain $siswaPendidikanLain)
    {
        $siswaPendidikanLain->delete();
        return response()->json(null, 204);
    }
}
