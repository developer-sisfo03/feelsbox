<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\keluhan;

class KeluhanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        keluhan::create([
            'user_id' => 2,
            'keluhan' => 'Saya sedang merasa sedih'
        ]);
        keluhan::create([
            'user_id' => 3,
            'keluhan' => 'Saya sering merasa pusing dan mual-mual'
        ]);
        keluhan::create([
            'user_id' => 4,
            'keluhan' => 'Suka merasa ragu saat ingin mengambil keputusan'
        ]);
        keluhan::create([
            'user_id' => 5,
            'keluhan' => 'Saya sering merasa sulit untuk berpikir'
        ]);
        keluhan::create([
            'user_id' => 6,
            'keluhan' => 'Saya merasa ingin bunuh diri'
        ]);
        keluhan::create([
            'user_id' => 7,
            'keluhan' => 'Saya mudah merasa senang'
        ]);
    }
}
