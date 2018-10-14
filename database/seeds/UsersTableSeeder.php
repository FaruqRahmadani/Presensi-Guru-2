<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    if (!User::where('username', 'admin')->count()) {
      $faker = Faker\Factory::create('id_ID');
      $User = new User;
      $User->nama = $faker->name;
      $User->username = 'admin';
      $User->password = 'admin';
      $User->email = $faker->safeEmail;
      $User->tipe = 1;
      $User->sekolah_id = 0;
      $User->save();
    }
  }
}
