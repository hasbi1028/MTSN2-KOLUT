<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiswaDetail extends Model
{
    protected $table = 'siswa_detail';

    protected $fillable = [
        'siswa_id',
        'nik',
        'kewarganegaraan',
        'agama',
        'jumlah_saudara',
        'anak_ke',
        'asal_sekolah',
        'cita_cita',
        'no_hp',
        'email',
        'hobi',
        'yang_membiayai',
        'kebutuhan_khusus',
        'disabilitas',
        'no_kip',
        'no_kk',
        'kepala_keluarga',
        'pra_sekolah',
        'imunisasi',
        'transportasi',
        'koordinat',
        'jarak_rumah_kesekolah',
        'waktu_tempuh',
    ];

    // Relasi dengan model Siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
