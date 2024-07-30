<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id');
            $table->string('nik', 20)->nullable();
            $table->string('kewarganegaraan', 50)->nullable();
            $table->string('agama', 50)->nullable();
            $table->integer('jumlah_saudara')->nullable();
            $table->integer('anak_ke')->nullable();
            $table->string('asal_sekolah', 100)->nullable();
            $table->text('cita_cita')->nullable();
            $table->string('no_hp', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->text('hobi')->nullable();
            $table->string('yang_membiayai', 100)->nullable();
            $table->string('kebutuhan_khusus', 100)->nullable();
            $table->string('disabilitas', 100)->nullable();
            $table->string('no_kip', 20)->nullable();
            $table->string('no_kk', 20)->nullable();
            $table->string('kepala_keluarga', 100)->nullable();
            $table->string('pra_sekolah', 100)->nullable();
            $table->string('imunisasi', 100)->nullable();
            $table->string('transportasi', 50)->nullable();
            $table->string('koordinat', 50)->nullable();
            $table->string('jarak_rumah_kesekolah', 50)->nullable();
            $table->string('waktu_tempuh', 50)->nullable();

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
        Schema::dropIfExists('siswa_detail');
    }
}
