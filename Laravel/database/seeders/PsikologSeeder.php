<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\psikolog;

class PsikologSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        

        psikolog::create([
            'user_id' => 8,
            'slug' => 'walter-white',
            'verified' => 1,
        ]);
        psikolog::create([
            'user_id' => 9,
            'slug' => 'sarah-jhonson',
        ]);
        psikolog::create([
            'user_id' => 10,
            'slug' => 'william-anderson',
        ]);
        psikolog::create([
            'user_id' => 11,
            'slug' => 'amanda-jepson',
        ]);
    }
}
