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
    User::create([
        'name'  => 'Abhi',
        'email' => 'abhi@example.com',
        'password' => Hash::make('password'),
        'api_token' => str_random(60)
    ]);
    User::create([
        'name'  => 'Abhi1',
        'email' => 'abhi1@example.com',
        'password' => Hash::make('password'),
        'api_token' => str_random(60)
    ]);
  }
}
