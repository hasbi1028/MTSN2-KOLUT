<?php

namespace App\Http\Controllers;

use App\Models\SiswaDetail;
use Illuminate\Http\Request;

class SiswaDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswaDetail = SiswaDetail::all();
        return response()->json($siswaDetail);
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
            'nik' => 'nullable|string|max:20',
            'kewarganegaraan' => 'nullable|string|max:50',
            'agama' => 'nullable|string|max:50',
            'jumlah_saudara' => 'nullable|integer',
            'anak_ke' => 'nullable|integer',
            'asal_sekolah' => 'nullable|string|max:100',
            'cita_cita' => 'nullable|string',
            'no_hp' => 'nullable|string|max:20',
            'email' => 'nullable|string|max:100',
            'hobi' => 'nullable|string',
            'yang_membiayai' => 'nullable|string|max:100',
            'kebutuhan_khusus' => 'nullable|string|max:100',
            'disabilitas' => 'nullable|string|max:100',
            'no_kip' => 'nullable|string|max:20',
            'no_kk' => 'nullable|string|max:20',
            'kepala_keluarga' => 'nullable|string|max:100',
            'pra_sekolah' => 'nullable|string|max:100',
            'imunisasi' => 'nullable|string|max:100',
            'transportasi' => 'nullable|string|max:50',
            'koordinat' => 'nullable|string|max:50',
            'jarak_rumah_kesekolah' => 'nullable|string|max:50',
            'waktu_tempuh' => 'nullable|string|max:50'
        ]);

        $siswaDetail = SiswaDetail::create($request->all());
        return response()->json($siswaDetail, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiswaDetail  $siswaDetail
     * @return \Illuminate\Http\Response
     */
    public function show(SiswaDetail $siswaDetail)
    {
        return response()->json($siswaDetail);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiswaDetail  $siswaDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiswaDetail $siswaDetail)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'nik' => 'nullable|string|max:20',
            'kewarganegaraan' => 'nullable|string|max:50',
            'agama' => 'nullable|string|max:50',
            'jumlah_saudara' => 'nullable|integer',
            'anak_ke' => 'nullable|integer',
            'asal_sekolah' => 'nullable|string|max:100',
            'cita_cita' => 'nullable|string',
            'no_hp' => 'nullable|string|max:20',
            'email' => 'nullable|string|max:100',
            'hobi' => 'nullable|string',
            'yang_membiayai' => 'nullable|string|max:100',
            'kebutuhan_khusus' => 'nullable|string|max:100',
            'disabilitas' => 'nullable|string|max:100',
            'no_kip' => 'nullable|string|max:20',
            'no_kk' => 'nullable|string|max:20',
            'kepala_keluarga' => 'nullable|string|max:100',
            'pra_sekolah' => 'nullable|string|max:100',
            'imunisasi' => 'nullable|string|max:100',
            'transportasi' => 'nullable|string|max:50',
            'koordinat' => 'nullable|string|max:50',
            'jarak_rumah_kesekolah' => 'nullable|string|max:50',
            'waktu_tempuh' => 'nullable|string|max:50'
        ]);

        $siswaDetail->update($request->all());
        return response()->json($siswaDetail);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiswaDetail  $siswaDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiswaDetail $siswaDetail)
    {
        $siswaDetail->delete();
        return response()->json(null, 204);
    }
}
