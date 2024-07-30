<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiswaKebutuhanKhusus extends Model
{
    protected $table = 'siswa_kebutuhan_khusus';

    protected $fillable = [
        'siswa_id',
        'kebutuhan_khusus',
        'kebutuhan_disabilitas',
    ];

    // Relasi dengan model Siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
