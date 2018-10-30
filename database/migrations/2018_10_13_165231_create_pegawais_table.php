<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaisTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('pegawais', function (Blueprint $table) {
      $table->increments('id');
      $table->string('nip', 25);
      $table->string('nama', 50);
      $table->string('nuptk', 25)->nullable();
      $table->integer('sekolah_id');
      $table->string('tempat_lahir', 30)->nullable();
      $table->date('tanggal_lahir')->nullable();
      $table->integer('jenis_kelamin');
      $table->string('no_handphone', 13)->nullable();
      $table->string('email', 100)->nullable();
      $table->string('alamat', 100)->nullable();
      $table->string('foto')->default('default.png');
      $table->integer('sidikjari_id');
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
    Schema::dropIfExists('pegawais');
  }
}
