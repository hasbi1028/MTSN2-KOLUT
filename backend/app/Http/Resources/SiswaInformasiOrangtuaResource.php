<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SiswaInformasiOrangtuaResource extends JsonResource
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
            'nama_ayah' => $this->nama_ayah,
            'status_ayah' => $this->status_ayah,
            'kewarganegaraan_ayah' => $this->kewarganegaraan_ayah,
            'nik_ayah' => $this->nik_ayah,
            'tempat_lahir_ayah' => $this->tempat_lahir_ayah,
            'tanggal_lahir_ayah' => $this->tanggal_lahir_ayah,
            'pendidikan_terakhir_ayah' => $this->pendidikan_terakhir_ayah,
            'pekerjaan_ayah' => $this->pekerjaan_ayah,
            'penghasilan_ayah' => $this->penghasilan_ayah,
            'no_hp_ayah' => $this->no_hp_ayah,
            'nama_ibu' => $this->nama_ibu,
            'status_ibu' => $this->status_ibu,
            'kewarganegaraan_ibu' => $this->kewarganegaraan_ibu,
            'nik_ibu' => $this->nik_ibu,
            'tempat_lahir_ibu' => $this->tempat_lahir_ibu,
            'tanggal_lahir_ibu' => $this->tanggal_lahir_ibu,
            'pendidikan_terakhir_ibu' => $this->pendidikan_terakhir_ibu,
            'pekerjaan_ibu' => $this->pekerjaan_ibu,
            'penghasilan_ibu' => $this->penghasilan_ibu,
            'no_hp_ibu' => $this->no_hp_ibu,
            'nama_wali' => $this->nama_wali,
            'status_wali' => $this->status_wali,
            'kewarganegaraan_wali' => $this->kewarganegaraan_wali,
            'nik_wali' => $this->nik_wali,
            'tempat_lahir_wali' => $this->tempat_lahir_wali,
            'tanggal_lahir_wali' => $this->tanggal_lahir_wali,
            'pendidikan_terakhir_wali' => $this->pendidikan_terakhir_wali,
            'pekerjaan_wali' => $this->pekerjaan_wali,
            'penghasilan_wali' => $this->penghasilan_wali,
            'no_hp_wali' => $this->no_hp_wali,
            'no_kks' => $this->no_kks,
            'no_pkh' => $this->no_pkh,
            'updated_at' => $this->updated_at,
        ];
    }
}
