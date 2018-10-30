<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategoriAbsensTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('kategori_absens', function (Blueprint $table) {
      $table->increments('id');
      $table->string('kode');
      $table->string('keterangan', 50);
      $table->string('kode_warna', 7);
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
    Schema::dropIfExists('kategori_absens');
  }
}
