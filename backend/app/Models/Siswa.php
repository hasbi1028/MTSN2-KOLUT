<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = [
        'nis_lokal',
        'nama',
        'nisn',
        'status_siswa',
        'kelas',
        'rombel',
        'jk',
        'tanggal_lahir',
        'tempat_lahir'
    ];

    protected $dates = [
        'tanggal_lahir',
    ];

    protected $appends = ['umur'];

    public function getUmurAttribute()
    {
        return $this->attributes['umur'];
    }
}
