<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_wargas', function (Blueprint $table) {
            $table->id('id_warga');
            $table->bigInteger('nik')->unique(); 
            $table->string('nama_warga');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir'); 
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']); 
            $table->string('alamat');
            $table->string('blok');
            $table->string('status');
            $table->string('pekerjaan');
            $table->foreign('nama_warga')->references('id_nama_warga')->on('jadwals');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_wargas');
    }
};
