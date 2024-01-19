<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nisn')->nullable();
            $table->enum('jk', ['pria', 'wanita'])->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->string('asal_sekolah_lainnya')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('no_phone_ortu')->nullable();
            $table->string('no_phone')->nullable();
            $table->enum('role', ['admin', 'user'])->default('user');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
