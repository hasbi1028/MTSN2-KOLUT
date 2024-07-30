<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendidikanLainSiswa extends Model
{
    protected $table = 'pendidikan_lain_siswa';

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
