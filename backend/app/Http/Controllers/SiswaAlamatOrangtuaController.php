<?php

namespace App\Http\Controllers;

use App\Models\SiswaAlamatOrangtua;
use Illuminate\Http\Request;

class SiswaAlamatOrangtuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswaAlamatOrangtua = SiswaAlamatOrangtua::all();
        return response()->json($siswaAlamatOrangtua);
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
            'status_rumah_ayah' => 'nullable|string|max:50',
            'provinsi_ayah' => 'nullable|string|max:50',
            'kabupaten_ayah' => 'nullable|string|max:50',
            'kecamatan_ayah' => 'nullable|string|max:50',
            'kelurahan_ayah' => 'nullable|string|max:50',
            'rt_rw_ayah' => 'nullable|string|max:20',
            'alamat_lengkap_ayah' => 'nullable|string',
            'kodepos_ayah' => 'nullable|string|max:10',
            'status_rumah_ibu' => 'nullable|string|max:50',
            'provinsi_ibu' => 'nullable|string|max:50',
            'kabupaten_ibu' => 'nullable|string|max:50',
            'kecamatan_ibu' => 'nullable|string|max:50',
            'kelurahan_ibu' => 'nullable|string|max:50',
            'rt_rw_ibu' => 'nullable|string|max:20',
            'alamat_lengkap_ibu' => 'nullable|string',
            'kodepos_ibu' => 'nullable|string|max:10',
            'status_rumah_wali' => 'nullable|string|max:50',
            'provinsi_wali' => 'nullable|string|max:50',
            'kabupaten_wali' => 'nullable|string|max:50',
            'kecamatan_wali' => 'nullable|string|max:50',
            'kelurahan_wali' => 'nullable|string|max:50',
            'rt_rw_wali' => 'nullable|string|max:20',
            'alamat_lengkap_wali' => 'nullable|string',
            'kodepos_wali' => 'nullable|string|max:10'
        ]);

        $siswaAlamatOrangtua = SiswaAlamatOrangtua::create($request->all());
        return response()->json($siswaAlamatOrangtua, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiswaAlamatOrangtua  $siswaAlamatOrangtua
     * @return \Illuminate\Http\Response
     */
    public function show(SiswaAlamatOrangtua $siswaAlamatOrangtua)
    {
        return response()->json($siswaAlamatOrangtua);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiswaAlamatOrangtua  $siswaAlamatOrangtua
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiswaAlamatOrangtua $siswaAlamatOrangtua)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'status_rumah_ayah' => 'nullable|string|max:50',
            'provinsi_ayah' => 'nullable|string|max:50',
            'kabupaten_ayah' => 'nullable|string|max:50',
            'kecamatan_ayah' => 'nullable|string|max:50',
            'kelurahan_ayah' => 'nullable|string|max:50',
            'rt_rw_ayah' => 'nullable|string|max:20',
            'alamat_lengkap_ayah' => 'nullable|string',
            'kodepos_ayah' => 'nullable|string|max:10',
            'status_rumah_ibu' => 'nullable|string|max:50',
            'provinsi_ibu' => 'nullable|string|max:50',
            'kabupaten_ibu' => 'nullable|string|max:50',
            'kecamatan_ibu' => 'nullable|string|max:50',
            'kelurahan_ibu' => 'nullable|string|max:50',
            'rt_rw_ibu' => 'nullable|string|max:20',
            'alamat_lengkap_ibu' => 'nullable|string',
            'kodepos_ibu' => 'nullable|string|max:10',
            'status_rumah_wali' => 'nullable|string|max:50',
            'provinsi_wali' => 'nullable|string|max:50',
            'kabupaten_wali' => 'nullable|string|max:50',
            'kecamatan_wali' => 'nullable|string|max:50',
            'kelurahan_wali' => 'nullable|string|max:50',
            'rt_rw_wali' => 'nullable|string|max:20',
            'alamat_lengkap_wali' => 'nullable|string',
            'kodepos_wali' => 'nullable|string|max:10'
        ]);

        $siswaAlamatOrangtua->update($request->all());
        return response()->json($siswaAlamatOrangtua);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiswaAlamatOrangtua  $siswaAlamatOrangtua
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiswaAlamatOrangtua $siswaAlamatOrangtua)
    {
        $siswaAlamatOrangtua->delete();
        return response()->json(null, 204);
    }
}
