<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensisTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('absensis', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('pegawai_id');
      $table->integer('sidikjari_id');
      $table->integer('sekolah_id');
      $table->date('tanggal');
      $table->time('jam_masuk')->nullable();
      $table->time('jam_pulang')->nullable();
      $table->integer('kategori_absen_id');
      $table->string('keterangan',50)->nullable();
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
    Schema::dropIfExists('absensis');
  }
}
