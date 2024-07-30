<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlamatSiswa extends Model
{
    protected $table = 'alamat_siswa';

    protected $fillable = [
        'siswa_id',
        'status_rumah_siswa',
        'provinsi_siswa',
        'kabupaten_siswa',
        'kecamatan_siswa',
        'kelurahan_siswa',
        'rt_rw_siswa',
        'alamat_lengkap_siswa',
        'kodepos_siswa',
        'koordinat',
    ];

    // Relasi dengan model Siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
