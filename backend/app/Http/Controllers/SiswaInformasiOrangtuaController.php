<?php

namespace App\Http\Controllers;

use App\Models\SiswaInformasiOrangtua;
use Illuminate\Http\Request;

class SiswaInformasiOrangtuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswaInformasiOrangtua = SiswaInformasiOrangtua::all();
        return response()->json($siswaInformasiOrangtua);
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
            'nama_ayah' => 'nullable|string|max:100',
            'status_ayah' => 'nullable|string|max:50',
            'kewarganegaraan_ayah' => 'nullable|string|max:50',
            'nik_ayah' => 'nullable|string|max:20',
            'tempat_lahir_ayah' => 'nullable|string|max:50',
            'tanggal_lahir_ayah' => 'nullable|date',
            'pendidikan_terakhir_ayah' => 'nullable|string|max:50',
            'pekerjaan_ayah' => 'nullable|string|max:100',
            'penghasilan_ayah' => 'nullable|string|max:50',
            'no_hp_ayah' => 'nullable|string|max:20',
            'nama_ibu' => 'nullable|string|max:100',
            'status_ibu' => 'nullable|string|max:50',
            'kewarganegaraan_ibu' => 'nullable|string|max:50',
            'nik_ibu' => 'nullable|string|max:20',
            'tempat_lahir_ibu' => 'nullable|string|max:50',
            'tanggal_lahir_ibu' => 'nullable|date',
            'pendidikan_terakhir_ibu' => 'nullable|string|max:50',
            'pekerjaan_ibu' => 'nullable|string|max:100',
            'penghasilan_ibu' => 'nullable|string|max:50',
            'no_hp_ibu' => 'nullable|string|max:20',
            'nama_wali' => 'nullable|string|max:100',
            'status_wali' => 'nullable|string|max:50',
            'kewarganegaraan_wali' => 'nullable|string|max:50',
            'nik_wali' => 'nullable|string|max:20',
            'tempat_lahir_wali' => 'nullable|string|max:50',
            'tanggal_lahir_wali' => 'nullable|date',
            'pendidikan_terakhir_wali' => 'nullable|string|max:50',
            'pekerjaan_wali' => 'nullable|string|max:100',
            'penghasilan_wali' => 'nullable|string|max:50',
            'no_hp_wali' => 'nullable|string|max:20',
            'no_kks' => 'nullable|string|max:20',
            'no_pkh' => 'nullable|string|max:20'
        ]);

        $siswaInformasiOrangtua = SiswaInformasiOrangtua::create($request->all());
        return response()->json($siswaInformasiOrangtua, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiswaInformasiOrangtua  $siswaInformasiOrangtua
     * @return \Illuminate\Http\Response
     */
    public function show(SiswaInformasiOrangtua $siswaInformasiOrangtua)
    {
        return response()->json($siswaInformasiOrangtua);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiswaInformasiOrangtua  $siswaInformasiOrangtua
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiswaInformasiOrangtua $siswaInformasiOrangtua)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'nama_ayah' => 'nullable|string|max:100',
            'status_ayah' => 'nullable|string|max:50',
            'kewarganegaraan_ayah' => 'nullable|string|max:50',
            'nik_ayah' => 'nullable|string|max:20',
            'tempat_lahir_ayah' => 'nullable|string|max:50',
            'tanggal_lahir_ayah' => 'nullable|date',
            'pendidikan_terakhir_ayah' => 'nullable|string|max:50',
            'pekerjaan_ayah' => 'nullable|string|max:100',
            'penghasilan_ayah' => 'nullable|string|max:50',
            'no_hp_ayah' => 'nullable|string|max:20',
            'nama_ibu' => 'nullable|string|max:100',
            'status_ibu' => 'nullable|string|max:50',
            'kewarganegaraan_ibu' => 'nullable|string|max:50',
            'nik_ibu' => 'nullable|string|max:20',
            'tempat_lahir_ibu' => 'nullable|string|max:50',
            'tanggal_lahir_ibu' => 'nullable|date',
            'pendidikan_terakhir_ibu' => 'nullable|string|max:50',
            'pekerjaan_ibu' => 'nullable|string|max:100',
            'penghasilan_ibu' => 'nullable|string|max:50',
            'no_hp_ibu' => 'nullable|string|max:20',
            'nama_wali' => 'nullable|string|max:100',
            'status_wali' => 'nullable|string|max:50',
            'kewarganegaraan_wali' => 'nullable|string|max:50',
            'nik_wali' => 'nullable|string|max:20',
            'tempat_lahir_wali' => 'nullable|string|max:50',
            'tanggal_lahir_wali' => 'nullable|date',
            'pendidikan_terakhir_wali' => 'nullable|string|max:50',
            'pekerjaan_wali' => 'nullable|string|max:100',
            'penghasilan_wali' => 'nullable|string|max:50',
            'no_hp_wali' => 'nullable|string|max:20',
            'no_kks' => 'nullable|string|max:20',
            'no_pkh' => 'nullable|string|max:20'
        ]);

        $siswaInformasiOrangtua->update($request->all());
        return response()->json($siswaInformasiOrangtua);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiswaInformasiOrangtua  $siswaInformasiOrangtua
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiswaInformasiOrangtua $siswaInformasiOrangtua)
    {
        $siswaInformasiOrangtua->delete();
        return response()->json(null, 204);
    }
}
