<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiswaPendidikanLain extends Model
{
    protected $table = 'siswa_pendidikan_lain';

    protected $fillable = [
        'siswa_id',
        'jenis_pendidikan',
        'penyelenggara',
        'tahun_mulai',
        'tahun_selesai',
        'keterangan',
    ];

    // Relasi dengan model Siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
