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
      $table->string('npsn', 8)->nullable();
      $table->string('nama', 50)->nullable();
      $table->string('nss', 12)->nullable();
      $table->integer('jenjang_id')->default(0);
      $table->integer('status_id')->default(0);
      $table->integer('pegawai_id')->default(0);
      $table->integer('kecamatan_id')->default(0);
      $table->integer('kelurahan_id')->default(0);
      $table->text('alamat')->nullable();
      $table->string('no_telepon', 13)->nullable();
      $table->string('email', 100)->nullable();
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
