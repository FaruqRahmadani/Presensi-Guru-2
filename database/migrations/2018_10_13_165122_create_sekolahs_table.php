<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSekolahsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('sekolahs', function (Blueprint $table) {
      $table->increments('id');
      $table->string('npsn')->nullable();
      $table->string('nama')->nullable();
      $table->string('nss')->nullable();
      $table->integer('jenjang_id')->default(0);
      $table->integer('status_id')->default(0);
      $table->integer('pegawai_id')->default(0);
      $table->integer('kecamatan_id')->default(0);
      $table->integer('kelurahan_id')->default(0);
      $table->text('alamat')->nullable();
      $table->string('no_telepon')->nullable();
      $table->string('email')->nullable();
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
    Schema::dropIfExists('sekolahs');
  }
}
