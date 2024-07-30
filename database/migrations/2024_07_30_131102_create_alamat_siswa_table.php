<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlamatSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_alamat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id');
            $table->string('status_rumah_siswa', 50)->nullable();
            $table->string('provinsi_siswa', 50)->nullable();
            $table->string('kabupaten_siswa', 50)->nullable();
            $table->string('kecamatan_siswa', 50)->nullable();
            $table->string('kelurahan_siswa', 50)->nullable();
            $table->string('rt_rw_siswa', 20)->nullable();
            $table->text('alamat_lengkap_siswa')->nullable();
            $table->string('kodepos_siswa', 10)->nullable();
            $table->string('koordinat', 50)->nullable();

            $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa_alamat');
    }
}
