<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $guarded = [];

    
    public function kelas_jenis()
    {
        return $this->hasOne(KelasJenis::class, 'id', 'id_kelas_jenis');
    }
}
