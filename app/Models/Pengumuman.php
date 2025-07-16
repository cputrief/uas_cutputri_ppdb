<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    protected $table = 'pengumumans';

    protected $fillable = ['siswa_id', 'kelas_id', 'guru_id', 'status'];

    // ✅ Perbaikan di sini
    public function siswa() {
        return $this->belongsTo(Siswa::class, 'siswa_id', 'id');
    }

    public function kelas() {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }

    public function guru() {
        return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }
}
