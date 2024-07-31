<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaAlamatOrangtuaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_alamat_orangtua', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id');
            $table->string('status_rumah_ayah', 50)->nullable();
            $table->string('provinsi_ayah', 50)->nullable();
            $table->string('kabupaten_ayah', 50)->nullable();
            $table->string('kecamatan_ayah', 50)->nullable();
            $table->string('kelurahan_ayah', 50)->nullable();
            $table->string('rt_rw_ayah', 20)->nullable();
            $table->text('alamat_lengkap_ayah')->nullable();
            $table->string('kodepos_ayah', 10)->nullable();
            $table->string('status_rumah_ibu', 50)->nullable();
            $table->string('provinsi_ibu', 50)->nullable();
            $table->string('kabupaten_ibu', 50)->nullable();
            $table->string('kecamatan_ibu', 50)->nullable();
            $table->string('kelurahan_ibu', 50)->nullable();
            $table->string('rt_rw_ibu', 20)->nullable();
            $table->text('alamat_lengkap_ibu')->nullable();
            $table->string('kodepos_ibu', 10)->nullable();
            $table->string('status_rumah_wali', 50)->nullable();
            $table->string('provinsi_wali', 50)->nullable();
            $table->string('kabupaten_wali', 50)->nullable();
            $table->string('kecamatan_wali', 50)->nullable();
            $table->string('kelurahan_wali', 50)->nullable();
            $table->string('rt_rw_wali', 20)->nullable();
            $table->text('alamat_lengkap_wali')->nullable();
            $table->string('kodepos_wali', 10)->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('siswa_alamat_orangtua');
    }
}
