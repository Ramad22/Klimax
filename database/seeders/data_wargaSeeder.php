<?php

namespace Database\Seeders;

use App\Models\data_warga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class data_wargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        data_warga::create([
            'nik'=>'232323',
            'nama_warga'=>'gilang',
            'tempat_lahir'=>'bandung',
            'tanggal_lahir'=>'2005-08-22',
            'jenis_kelamin'=>'laki-laki',
            'alamat'=>'kp.mekarsari',
            'blok'=>'02',
            'status'=>'nikah',
            'pekerjaan'=>'as ',
            'no_hp' => '62656034973',

        ]);
        data_warga::create([
            'nik'=>'2323231',
            'nama_warga'=>'ahmad',
            'tempat_lahir'=>'bandung',
            'tanggal_lahir'=>'2005-08-22',
            'jenis_kelamin'=>'laki-laki',
            'alamat'=>'kp.mekarsari',
            'blok'=>'02',
            'status'=>'nikah',
            'pekerjaan'=>'as ',
            'no_hp' => '6265603497',

        ]);
        data_warga::create([
            'nik'=>'2323231',
            'nama_warga'=>'jelangkung',
            'tempat_lahir'=>'bandung',
            'tanggal_lahir'=>'2005-08-22',
            'jenis_kelamin'=>'laki-laki',
            'alamat'=>'kp.mekarsari',
            'blok'=>'02',
            'status'=>'nikah',
            'pekerjaan'=>'as ',
            'no_hp' => '6265603497',


        ]);
        data_warga::create([
            'nik'=>'2323235',
            'nama_warga'=>'dewa',
            'tempat_lahir'=>'bandung',
            'tanggal_lahir'=>'2005-08-22',
            'jenis_kelamin'=>'laki-laki',
            'alamat'=>'kp.mekarsari',
            'blok'=>'02',
            'status'=>'nikah',
            'pekerjaan'=>'as ',
            'no_hp' => '626560349',

        ]);
        data_warga::create([
            'nik'=>'23232312',
            'nama_warga'=>'putt',
            'tempat_lahir'=>'bandung',
            'tanggal_lahir'=>'2005-08-22',
            'jenis_kelamin'=>'laki-laki',
            'alamat'=>'kp.mekarsari',
            'blok'=>'02',
            'status'=>'nikah',
            'pekerjaan'=>'as ',
            'no_hp' => '62656034973',

        ]);
        data_warga::create([
            'nik'=>'2323235',
            'nama_warga'=>'rukmana',
            'tempat_lahir'=>'bandung',
            'tanggal_lahir'=>'2005-08-22',
            'jenis_kelamin'=>'laki-laki',
            'alamat'=>'kp.mekarsari',
            'blok'=>'02',
            'status'=>'nikah',
            'pekerjaan'=>'as ',

        ]);
        data_warga::create([
            'nik'=>'23232322',
            'nama_warga'=>'bima',
            'tempat_lahir'=>'bandung',
            'tanggal_lahir'=>'2005-08-22',
            'jenis_kelamin'=>'laki-laki',
            'alamat'=>'kp.mekarsari',
            'blok'=>'02',
            'status'=>'nikah',
            'pekerjaan'=>'as ',

        ]);
    }
}
