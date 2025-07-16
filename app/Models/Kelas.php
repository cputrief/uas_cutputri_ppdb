<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';

    public function pengumumans()
{
    return $this->hasMany(Pengumuman::class, 'kelas_id');
}


    protected $fillable = ['nm_kelas', 'status'];
}
