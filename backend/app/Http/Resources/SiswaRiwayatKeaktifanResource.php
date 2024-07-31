<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SiswaRiwayatKeaktifanResource extends JsonResource
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
            'tahun_ajaran' => $this->tahun_ajaran,
            'semester' => $this->semester,
            'status_keaktifan' => $this->status_keaktifan,
            'keterangan' => $this->keterangan,
            'updated_at' => $this->updated_at,
        ];
    }
}
