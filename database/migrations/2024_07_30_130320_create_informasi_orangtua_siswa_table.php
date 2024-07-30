<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasiOrangtuaSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_orangtua_siswa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id');
            $table->string('nama_ayah', 100)->nullable();
            $table->string('status_ayah', 50)->nullable();
            $table->string('kewarganegaraan_ayah', 50)->nullable();
            $table->string('nik_ayah', 20)->nullable();
            $table->string('tempat_lahir_ayah', 50)->nullable();
            $table->date('tanggal_lahir_ayah')->nullable();
            $table->string('pendidikan_terakhir_ayah', 50)->nullable();
            $table->string('pekerjaan_ayah', 100)->nullable();
            $table->string('penghasilan_ayah', 50)->nullable();
            $table->string('no_hp_ayah', 20)->nullable();
            $table->string('nama_ibu', 100)->nullable();
            $table->string('status_ibu', 50)->nullable();
            $table->string('kewarganegaraan_ibu', 50)->nullable();
            $table->string('nik_ibu', 20)->nullable();
            $table->string('tempat_lahir_ibu', 50)->nullable();
            $table->date('tanggal_lahir_ibu')->nullable();
            $table->string('pendidikan_terakhir_ibu', 50)->nullable();
            $table->string('pekerjaan_ibu', 100)->nullable();
            $table->string('penghasilan_ibu', 50)->nullable();
            $table->string('no_hp_ibu', 20)->nullable();
            $table->string('nama_wali', 100)->nullable();
            $table->string('status_wali', 50)->nullable();
            $table->string('kewarganegaraan_wali', 50)->nullable();
            $table->string('nik_wali', 20)->nullable();
            $table->string('tempat_lahir_wali', 50)->nullable();
            $table->date('tanggal_lahir_wali')->nullable();
            $table->string('pendidikan_terakhir_wali', 50)->nullable();
            $table->string('pekerjaan_wali', 100)->nullable();
            $table->string('penghasilan_wali', 50)->nullable();
            $table->string('no_hp_wali', 20)->nullable();
            $table->string('no_kks', 20)->nullable();
            $table->string('no_pkh', 20)->nullable();

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
        Schema::dropIfExists('informasi_orangtua_siswa');
    }
}
