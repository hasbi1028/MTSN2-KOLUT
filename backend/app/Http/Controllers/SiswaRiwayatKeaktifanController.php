<?php

namespace App\Http\Controllers;

use App\Models\SiswaRiwayatKeaktifan;
use Illuminate\Http\Request;

class SiswaRiwayatKeaktifanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswaRiwayatKeaktifan = SiswaRiwayatKeaktifan::all();
        return response()->json($siswaRiwayatKeaktifan);
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
            'tahun_ajaran' => 'nullable|string|max:20',
            'semester' => 'nullable|string|max:10',
            'status_keaktifan' => 'nullable|string|max:50',
            'keterangan' => 'nullable|string'
        ]);

        $siswaRiwayatKeaktifan = SiswaRiwayatKeaktifan::create($request->all());
        return response()->json($siswaRiwayatKeaktifan, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiswaRiwayatKeaktifan  $siswaRiwayatKeaktifan
     * @return \Illuminate\Http\Response
     */
    public function show(SiswaRiwayatKeaktifan $siswaRiwayatKeaktifan)
    {
        return response()->json($siswaRiwayatKeaktifan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiswaRiwayatKeaktifan  $siswaRiwayatKeaktifan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiswaRiwayatKeaktifan $siswaRiwayatKeaktifan)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'tahun_ajaran' => 'nullable|string|max:20',
            'semester' => 'nullable|string|max:10',
            'status_keaktifan' => 'nullable|string|max:50',
            'keterangan' => 'nullable|string'
        ]);

        $siswaRiwayatKeaktifan->update($request->all());
        return response()->json($siswaRiwayatKeaktifan);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiswaRiwayatKeaktifan  $siswaRiwayatKeaktifan
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiswaRiwayatKeaktifan $siswaRiwayatKeaktifan)
    {
        $siswaRiwayatKeaktifan->delete();
        return response()->json(null, 204);
    }
}
