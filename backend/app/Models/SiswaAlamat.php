<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaAlamat extends Model
{
    use HasFactory;

    protected $table = 'siswa_alamat';

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
        'koordinat'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
