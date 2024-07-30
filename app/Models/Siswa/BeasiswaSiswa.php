<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BeasiswaSiswa extends Model
{
    protected $table = 'beasiswa_siswa';

    protected $fillable = [
        'siswa_id',
        'jenis_beasiswa',
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
