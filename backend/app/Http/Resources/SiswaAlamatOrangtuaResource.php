<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SiswaAlamatOrangtuaResource extends JsonResource
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
            'status_rumah_ayah' => $this->status_rumah_ayah,
            'provinsi_ayah' => $this->provinsi_ayah,
            'kabupaten_ayah' => $this->kabupaten_ayah,
            'kecamatan_ayah' => $this->kecamatan_ayah,
            'kelurahan_ayah' => $this->kelurahan_ayah,
            'rt_rw_ayah' => $this->rt_rw_ayah,
            'alamat_lengkap_ayah' => $this->alamat_lengkap_ayah,
            'kodepos_ayah' => $this->kodepos_ayah,
            'status_rumah_ibu' => $this->status_rumah_ibu,
            'provinsi_ibu' => $this->provinsi_ibu,
            'kabupaten_ibu' => $this->kabupaten_ibu,
            'kecamatan_ibu' => $this->kecamatan_ibu,
            'kelurahan_ibu' => $this->kelurahan_ibu,
            'rt_rw_ibu' => $this->rt_rw_ibu,
            'alamat_lengkap_ibu' => $this->alamat_lengkap_ibu,
            'kodepos_ibu' => $this->kodepos_ibu,
            'status_rumah_wali' => $this->status_rumah_wali,
            'provinsi_wali' => $this->provinsi_wali,
            'kabupaten_wali' => $this->kabupaten_wali,
            'kecamatan_wali' => $this->kecamatan_wali,
            'kelurahan_wali' => $this->kelurahan_wali,
            'rt_rw_wali' => $this->rt_rw_wali,
            'alamat_lengkap_wali' => $this->alamat_lengkap_wali,
            'kodepos_wali' => $this->kodepos_wali,
            'updated_at' => $this->updated_at,
        ];
    }
}
