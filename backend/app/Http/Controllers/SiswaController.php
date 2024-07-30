<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return response()->json($siswa);
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
            'nis_lokal' => 'required|string|max:20|unique:siswa,nis_lokal',
            'nama' => 'required|string|max:100',
            'nisn' => 'nullable|string|max:20|unique:siswa,nisn',
            'status_siswa' => 'required|string|max:50',
            'kelas' => 'nullable|string|max:20',
            'rombel' => 'nullable|string|max:20',
            'jk' => 'nullable|char:1',
            'tanggal_lahir' => 'nullable|date',
            'tempat_lahir' => 'nullable|string|max:50'
        ]);

        $siswa = Siswa::create($request->all());
        return response()->json($siswa, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        return response()->json($siswa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nis_lokal' => 'required|string|max:20|unique:siswa,nis_lokal,' . $siswa->id,
            'nama' => 'required|string|max:100',
            'nisn' => 'nullable|string|max:20|unique:siswa,nisn,' . $siswa->id,
            'status_siswa' => 'required|string|max:50',
            'kelas' => 'nullable|string|max:20',
            'rombel' => 'nullable|string|max:20',
            'jk' => 'nullable|char:1',
            'tanggal_lahir' => 'nullable|date',
            'tempat_lahir' => 'nullable|string|max:50'
        ]);

        $siswa->update($request->all());
        return response()->json($siswa);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return response()->json(null, 204);
    }
}
