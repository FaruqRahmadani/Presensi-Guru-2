<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeDefaultFotoToPegawaisTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('pegawais', function (Blueprint $table) {
      $table->string('foto')->default('img/pegawai/default.png')->change();
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::table('pegawais', function (Blueprint $table) {
      $table->string('foto')->default('default.png')->change();
    });
  }
}
