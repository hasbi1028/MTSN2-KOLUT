<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaPrestasi extends Model
{
    use HasFactory;

    protected $table = 'siswa_prestasi';

    protected $fillable = [
        'siswa_id',
        'jenis_prestasi',
        'tingkat',
        'tahun',
        'penyelenggara',
        'keterangan'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
