<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nis_lokal', 20)->unique();
            $table->string('nama', 100);
            $table->string('nisn', 20)->unique()->nullable();
            $table->string('status_siswa', 50);
            $table->string('kelas', 20)->nullable();
            $table->string('rombel', 20)->nullable();
            $table->char('jk', 1)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('tempat_lahir', 50)->nullable();
            $table->integer('umur')->virtualAs('TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE())')->nullable();
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
        Schema::dropIfExists('siswa');
    }
}
