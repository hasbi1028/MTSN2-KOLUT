<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaKebutuhanKhusus extends Model
{
    use HasFactory;

    protected $table = 'siswa_kebutuhan_khusus';

    protected $fillable = [
        'siswa_id',
        'kebutuhan_khusus',
        'kebutuhan_disabilitas'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
