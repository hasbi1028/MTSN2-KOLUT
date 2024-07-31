<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SiswaDetailResource extends JsonResource
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
            'nik' => $this->nik,
            'kewarganegaraan' => $this->kewarganegaraan,
            'agama' => $this->agama,
            'jumlah_saudara' => $this->jumlah_saudara,
            'anak_ke' => $this->anak_ke,
            'asal_sekolah' => $this->asal_sekolah,
            'cita_cita' => $this->cita_cita,
            'no_hp' => $this->no_hp,
            'email' => $this->email,
            'hobi' => $this->hobi,
            'yang_membiayai' => $this->yang_membiayai,
            'kebutuhan_khusus' => $this->kebutuhan_khusus,
            'disabilitas' => $this->disabilitas,
            'no_kip' => $this->no_kip,
            'no_kk' => $this->no_kk,
            'kepala_keluarga' => $this->kepala_keluarga,
            'pra_sekolah' => $this->pra_sekolah,
            'imunisasi' => $this->imunisasi,
            'transportasi' => $this->transportasi,
            'koordinat' => $this->koordinat,
            'jarak_rumah_kesekolah' => $this->jarak_rumah_kesekolah,
            'waktu_tempuh' => $this->waktu_tempuh,
            'updated_at' => $this->updated_at,
        ];
    }
}
