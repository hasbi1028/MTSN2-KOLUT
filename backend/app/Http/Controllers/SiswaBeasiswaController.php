<?php

namespace App\Http\Controllers;

use App\Models\SiswaBeasiswa;
use Illuminate\Http\Request;

class SiswaBeasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswaBeasiswa = SiswaBeasiswa::all();
        return response()->json($siswaBeasiswa);
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
            'jenis_beasiswa' => 'nullable|string|max:100',
            'tahun_mulai' => 'nullable|integer',
            'tahun_selesai' => 'nullable|integer',
            'keterangan' => 'nullable|string'
        ]);

        $siswaBeasiswa = SiswaBeasiswa::create($request->all());
        return response()->json($siswaBeasiswa, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiswaBeasiswa  $siswaBeasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(SiswaBeasiswa $siswaBeasiswa)
    {
        return response()->json($siswaBeasiswa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiswaBeasiswa  $siswaBeasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiswaBeasiswa $siswaBeasiswa)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'jenis_beasiswa' => 'nullable|string|max:100',
            'tahun_mulai' => 'nullable|integer',
            'tahun_selesai' => 'nullable|integer',
            'keterangan' => 'nullable|string'
        ]);

        $siswaBeasiswa->update($request->all());
        return response()->json($siswaBeasiswa);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiswaBeasiswa  $siswaBeasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiswaBeasiswa $siswaBeasiswa)
    {
        $siswaBeasiswa->delete();
        return response()->json(null, 204);
    }
}
