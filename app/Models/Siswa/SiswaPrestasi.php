<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiswaPrestasi extends Model
{
    protected $table = 'siswa_prestasi';

    protected $fillable = [
        'siswa_id',
        'jenis_prestasi',
        'tingkat',
        'tahun',
        'penyelenggara',
        'keterangan',
    ];

    // Relasi dengan model Siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}