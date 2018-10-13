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
      $table->string('nip');
      $table->string('nama');
      $table->string('nuptk')->nullable();
      $table->integer('sekolah_id');
      $table->string('tempat_lahir')->nullable();
      $table->date('tanggal_lahir')->nullable();
      $table->integer('jenis_kelamin');
      $table->string('no_handphone')->nullable();
      $table->string('email')->nullable();
      $table->text('alamat')->nullable();
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
