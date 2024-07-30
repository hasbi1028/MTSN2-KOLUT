<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformasiOrangtuaSiswa extends Model
{
    protected $table = 'informasi_orangtua_siswa';

    protected $fillable = [
        'siswa_id',
        'nama_ayah',
        'status_ayah',
        'kewarganegaraan_ayah',
        'nik_ayah',
        'tempat_lahir_ayah',
        'tanggal_lahir_ayah',
        'pendidikan_terakhir_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'no_hp_ayah',
        'nama_ibu',
        'status_ibu',
        'kewarganegaraan_ibu',
        'nik_ibu',
        'tempat_lahir_ibu',
        'tanggal_lahir_ibu',
        'pendidikan_terakhir_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'no_hp_ibu',
        'nama_wali',
        'status_wali',
        'kewarganegaraan_wali',
        'nik_wali',
        'tempat_lahir_wali',
        'tanggal_lahir_wali',
        'pendidikan_terakhir_wali',
        'pekerjaan_wali',
        'penghasilan_wali',
        'no_hp_wali',
        'no_kks',
        'no_pkh',
    ];

    // Relasi dengan model Siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
