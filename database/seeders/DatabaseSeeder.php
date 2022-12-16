<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {


    User::factory()->create([
      'name' => 'esteban',
      'email' => 'esteban@example.com',
      'password' => bcrypt('123456'),
    ]);
    User::factory()->create([
      'name' => 'omar',
      'email' => 'omar@example.com',
      'password' => bcrypt('123456'),
    ]);
    User::factory()->create([
      'name' => 'miguel',
      'email' => 'miguel@example.com',
      'password' => bcrypt('123456'),
    ]);

    $this->call([
      AcountSeeder::class
      
    ]);
  }
}
