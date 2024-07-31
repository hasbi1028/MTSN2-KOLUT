<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SiswaPrestasiResource extends JsonResource
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
            'jenis_prestasi' => $this->jenis_prestasi,
            'tingkat' => $this->tingkat,
            'tahun' => $this->tahun,
            'penyelenggara' => $this->penyelenggara,
            'keterangan' => $this->keterangan,
            'updated_at' => $this->updated_at,
        ];
    }
}
