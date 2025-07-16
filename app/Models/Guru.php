<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'gurus';

    public function pengumumans()
{
    return $this->hasMany(Pengumuman::class, 'guru_id');
}



    protected $fillable = ['nm_guru', 'nip', 'jk','pangkat', 'alamat'];
}
