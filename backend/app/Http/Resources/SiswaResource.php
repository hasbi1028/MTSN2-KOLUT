<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SiswaResource extends JsonResource
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
            'nis_lokal' => $this->nis_lokal,
            'nama' => $this->nama,
            'nisn' => $this->nisn,
            'status_siswa' => $this->status_siswa,
            'kelas' => $this->kelas,
            'rombel' => $this->rombel,
            'jk' => $this->jk,
            'tanggal_lahir' => $this->tanggal_lahir,
            'tempat_lahir' => $this->tempat_lahir,
            'umur' => $this->umur,
            'updated_at' => $this->updated_at,
        ];
    }
}
