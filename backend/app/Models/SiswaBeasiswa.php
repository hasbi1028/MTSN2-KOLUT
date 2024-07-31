<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaBeasiswa extends Model
{
    use HasFactory;

    protected $table = 'siswa_beasiswa';

    protected $fillable = [
        'siswa_id',
        'jenis_beasiswa',
        'tahun_mulai',
        'tahun_selesai',
        'keterangan'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
