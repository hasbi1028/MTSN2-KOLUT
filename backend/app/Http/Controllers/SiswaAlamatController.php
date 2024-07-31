<?php

namespace App\Http\Controllers;

use App\Models\SiswaAlamat;
use Illuminate\Http\Request;

class SiswaAlamatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswaAlamat = SiswaAlamat::all();
        return response()->json($siswaAlamat);
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
            'status_rumah_siswa' => 'nullable|string|max:50',
            'provinsi_siswa' => 'nullable|string|max:50',
            'kabupaten_siswa' => 'nullable|string|max:50',
            'kecamatan_siswa' => 'nullable|string|max:50',
            'kelurahan_siswa' => 'nullable|string|max:50',
            'rt_rw_siswa' => 'nullable|string|max:20',
            'alamat_lengkap_siswa' => 'nullable|string',
            'kodepos_siswa' => 'nullable|string|max:10',
            'koordinat' => 'nullable|string|max:50'
        ]);

        $siswaAlamat = SiswaAlamat::create($request->all());
        return response()->json($siswaAlamat, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiswaAlamat  $siswaAlamat
     * @return \Illuminate\Http\Response
     */
    public function show(SiswaAlamat $siswaAlamat)
    {
        return response()->json($siswaAlamat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiswaAlamat  $siswaAlamat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiswaAlamat $siswaAlamat)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'status_rumah_siswa' => 'nullable|string|max:50',
            'provinsi_siswa' => 'nullable|string|max:50',
            'kabupaten_siswa' => 'nullable|string|max:50',
            'kecamatan_siswa' => 'nullable|string|max:50',
            'kelurahan_siswa' => 'nullable|string|max:50',
            'rt_rw_siswa' => 'nullable|string|max:20',
            'alamat_lengkap_siswa' => 'nullable|string',
            'kodepos_siswa' => 'nullable|string|max:10',
            'koordinat' => 'nullable|string|max:50'
        ]);

        $siswaAlamat->update($request->all());
        return response()->json($siswaAlamat);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiswaAlamat  $siswaAlamat
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiswaAlamat $siswaAlamat)
    {
        $siswaAlamat->delete();
        return response()->json(null, 204);
    }
}
