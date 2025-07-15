<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;
    public function siswa(){
        return $this->hasOne(Siswa::class, 'id', 'siswa_id');
    }

    public function kelas(){
        return $this->hasOne(Kelas::class, 'id', 'kelas_id');
    }

    public function guru(){
        return $this->hasOne(Guru::class, 'id', 'guru_id');
    }
}
