<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwals';
    protected $fillable = ['id_nama_warga', 'hari','no_hp'];

    public function data_warga(){
        return $this->belongsTo(data_warga::class, 'nama_warga', 'nama_warga');
    }
}
