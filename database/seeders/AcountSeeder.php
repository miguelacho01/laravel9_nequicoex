<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Acount::factory()->create([
            'NumberAcount' => 'e1234',
              'balance' => 100.10,
              
          ]);
          \App\Models\Acount::factory()->create([
             'NumberAcount' => 'o1234',
             'balance' => 200.5,
           ]);
           \App\Models\Acount::factory()->create([
             'NumberAcount' => 'm1234',
             'balance' => 50,
           ]);




    }
}
