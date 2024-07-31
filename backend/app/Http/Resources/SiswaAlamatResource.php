<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SiswaAlamatResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'siswa_id' => $this->siswa_id,
            'status_rumah_siswa' => $this->status_rumah_siswa,
            'provinsi_siswa' => $this->provinsi_siswa,
            'kabupaten_siswa' => $this->kabupaten_siswa,
            'kecamatan_siswa' => $this->kecamatan_siswa,
            'kelurahan_siswa' => $this->kelurahan_siswa,
            'rt_rw_siswa' => $this->rt_rw_siswa,
            'alamat_lengkap_siswa' => $this->alamat_lengkap_siswa,
            'kodepos_siswa' => $this->kodepos_siswa,
            'koordinat' => $this->koordinat,
            'updated_at' => $this->updated_at,
        ];
    }
}
