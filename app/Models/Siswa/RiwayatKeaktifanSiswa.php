<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiwayatKeaktifanSiswa extends Model
{
    protected $table = 'riwayat_keaktifan_siswa';

    protected $fillable = [
        'siswa_id',
        'tahun_ajaran',
        'semester',
        'status_keaktifan',
        'keterangan',
    ];

    // Relasi dengan model Siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}