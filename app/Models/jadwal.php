<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwals';
    protected $fillable = ['id_nama_warga', 'hari','no_hp'];

    public function dataWarga(){
        return $this->belongsTo(data_warga::class, 'id_warga', 'id_warga');
    }

    public function data_wargas()
    {
        return $this->belongsTo(data_warga::class, 'no_hp');
    }
}
