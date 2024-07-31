<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SiswaKebutuhanKhususResource extends JsonResource
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
            'kebutuhan_khusus' => $this->kebutuhan_khusus,
            'kebutuhan_disabilitas' => $this->kebutuhan_disabilitas,
            'updated_at' => $this->updated_at,
        ];
    }
}
