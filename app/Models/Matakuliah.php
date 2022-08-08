<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    protected $fillable = ['nama_matakuliah', 'sks'];

    public function jadwal()
    {
        return $this->hasOne(Jadwal::class);
    }

    public function absen(){
        return $this->hasOne(Absen::class);
    }
}