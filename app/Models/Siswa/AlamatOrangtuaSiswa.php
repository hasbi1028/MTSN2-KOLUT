<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlamatOrangtuaSiswa extends Model
{
    protected $table = 'alamat_orangtua_siswa';

    protected $fillable = [
        'siswa_id',
        'status_rumah_ayah',
        'provinsi_ayah',
        'kabupaten_ayah',
        'kecamatan_ayah',
        'kelurahan_ayah',
        'rt_rw_ayah',
        'alamat_lengkap_ayah',
        'kodepos_ayah',
        'status_rumah_ibu',
        'provinsi_ibu',
        'kabupaten_ibu',
        'kecamatan_ibu',
        'kelurahan_ibu',
        'rt_rw_ibu',
        'alamat_lengkap_ibu',
        'kodepos_ibu',
        'status_rumah_wali',
        'provinsi_wali',
        'kabupaten_wali',
        'kecamatan_wali',
        'kelurahan_wali',
        'rt_rw_wali',
        'alamat_lengkap_wali',
        'kodepos_wali',
    ];

    // Relasi dengan model Siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
