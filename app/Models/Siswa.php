<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswas';

   // Di model Siswa, kalau setiap siswa hanya punya satu pengumuman:
public function pengumuman() {
    return $this->hasOne(Pengumuman::class, 'siswa_id');
}


    protected $fillable = ['nisn', 'nm_siswa', 'jk', 'alamat'];
}
