<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaRiwayatKeaktifan extends Model
{
    use HasFactory;

    protected $table = 'siswa_riwayat_keaktifan';

    protected $fillable = [
        'siswa_id',
        'tahun_ajaran',
        'semester',
        'status_keaktifan',
        'keterangan'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
