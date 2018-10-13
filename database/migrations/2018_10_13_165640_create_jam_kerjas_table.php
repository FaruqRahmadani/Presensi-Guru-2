<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJamKerjasTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('jam_kerjas', function (Blueprint $table) {
      $table->increments('id');
      $table->tinyInteger('sekolah_id');
      $table->tinyInteger('hari');
      $table->time('jam_masuk');
      $table->time('jam_pulang');
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
    Schema::dropIfExists('jam_kerjas');
  }
}
