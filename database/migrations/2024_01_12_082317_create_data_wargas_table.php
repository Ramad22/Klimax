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
            $table->id();
            $table->bigInteger('nik')->unique(); 
            $table->string('nama_warga');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir'); 
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']); 
            $table->string('alamat');
            $table->string('blok');
            $table->string('status');
            $table->string('pekerjaan');
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