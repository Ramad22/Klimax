<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_warga extends Model
{
    use HasFactory;

    protected $table = 'data_wargas';
    protected $fillable = ['nik', 'nama_warga', 'tempat_lahir', 'tgl_lahir', 'jenis_kelamin', 'alamat', 'blok', 'status', 'pekerjaan', 'no_hp'];

    public function jadwal()
    {
        return $this->hasMany(jadwal::class, 'nama_warga', 'id_warga');
    }

    public function jadwals()
    {
        return $this->hasMany(jadwal::class, 'id_jadwal');
    }
}
