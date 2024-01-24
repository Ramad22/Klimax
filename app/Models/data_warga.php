<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_warga extends Model
{
    use HasFactory;

    protected $table = 'data_wargas';
    protected $fillable = ['nik', 'nama_warga', 'tempat_lahir', 'tgl_lahir', 'jenis_kelamin', 'alamat', 'blok', 'status', 'pekerjaan'];

    public function jadwal()
    {
        return $this->hasMany(jadwal::class, 'nama_warga', 'nama_warga');
    }
}
