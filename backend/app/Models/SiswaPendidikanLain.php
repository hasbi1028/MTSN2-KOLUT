<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaPendidikanLain extends Model
{
    use HasFactory;

    protected $table = 'siswa_pendidikan_lain';

    protected $fillable = [
        'siswa_id',
        'jenis_pendidikan',
        'penyelenggara',
        'tahun_mulai',
        'tahun_selesai',
        'keterangan'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
