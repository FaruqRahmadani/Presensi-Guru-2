<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->increments('id');
      $table->string('nama', 50);
      $table->string('username', 20)->unique();
      $table->string('password');
      $table->string('email', 100);
      $table->string('foto')->default('default.png');
      $table->string('tipe')->default(0);
      $table->integer('sekolah_id');
      $table->rememberToken();
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
    Schema::dropIfExists('users');
  }
}
