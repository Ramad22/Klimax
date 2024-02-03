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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id('id_jadwal');
            $table->unsignedBigInteger('id_warga');
            $table->enum('hari', ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Ahad']);
            // $table->string('no_hp', 20)->unique();
            $table->unsignedBigInteger('id_no_hp');
            $table->foreign('id_warga')->references('id_warga')->references('data_wargas');
            $table->foreign('id_no_hp')->references('id_warga')->references('data_wargas');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
