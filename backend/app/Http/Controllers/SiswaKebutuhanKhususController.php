<?php

namespace App\Http\Controllers;

use App\Models\SiswaKebutuhanKhusus;
use Illuminate\Http\Request;

class SiswaKebutuhanKhususController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswaKebutuhanKhusus = SiswaKebutuhanKhusus::all();
        return response()->json($siswaKebutuhanKhusus);
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
            'kebutuhan_khusus' => 'nullable|string|max:100',
            'kebutuhan_disabilitas' => 'nullable|string|max:100'
        ]);

        $siswaKebutuhanKhusus = SiswaKebutuhanKhusus::create($request->all());
        return response()->json($siswaKebutuhanKhusus, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiswaKebutuhanKhusus  $siswaKebutuhanKhusus
     * @return \Illuminate\Http\Response
     */
    public function show(SiswaKebutuhanKhusus $siswaKebutuhanKhusus)
    {
        return response()->json($siswaKebutuhanKhusus);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiswaKebutuhanKhusus  $siswaKebutuhanKhusus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiswaKebutuhanKhusus $siswaKebutuhanKhusus)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'kebutuhan_khusus' => 'nullable|string|max:100',
            'kebutuhan_disabilitas' => 'nullable|string|max:100'
        ]);

        $siswaKebutuhanKhusus->update($request->all());
        return response()->json($siswaKebutuhanKhusus);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiswaKebutuhanKhusus  $siswaKebutuhanKhusus
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiswaKebutuhanKhusus $siswaKebutuhanKhusus)
    {
        $siswaKebutuhanKhusus->delete();
        return response()->json(null, 204);
    }
}
