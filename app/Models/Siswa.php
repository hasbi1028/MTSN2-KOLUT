<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Siswa extends Model
{
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
        'tempat_lahir',
    ];

    // Menentukan atribut umur
    protected function umur(): Attribute
    {
        return new Attribute(
            get: fn () => \Carbon\Carbon::parse($this->tanggal_lahir)->age,
        );
    }
}
