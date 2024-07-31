<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SiswaBeasiswaResource extends JsonResource
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
            'jenis_beasiswa' => $this->jenis_beasiswa,
            'tahun_mulai' => $this->tahun_mulai,
            'tahun_selesai' => $this->tahun_selesai,
            'keterangan' => $this->keterangan,
            'updated_at' => $this->updated_at,
        ];
    }
}
