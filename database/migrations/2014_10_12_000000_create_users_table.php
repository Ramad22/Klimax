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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('no_hp', 20)->unique();
            $table->string('blok', 20);
            // $table->timestamp('email_verified_at')->nullable();
            $table->unsignedBigInteger('id_role')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('id_role')->references('id')->on('roles')->onDelete('set null');
            $table->foreign('id')->references('id_user')->on('laporans')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
