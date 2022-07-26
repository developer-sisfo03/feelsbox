<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\konsultasi;

class KonsultasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        konsultasi::create([
            'user_id' => 2,
            'psikolog_id' => 3,
            'waktu' => '09:00:00',
            'tanggal' => '2022-08-10'
        ]);
        konsultasi::create([
            'user_id' => 3,
            'psikolog_id' => 1,
            'waktu' => '10:00:00',
            'tanggal' => '2022-08-07'
        ]);
        konsultasi::create([
            'user_id' => 4,
            'psikolog_id' => 2,
            'waktu' => '13:00:00',
            'tanggal' => '2022-07-25'
        ]);
        konsultasi::create([
            'user_id' => 5,
            'psikolog_id' => 4,
            'waktu' => '08:00:00',
            'tanggal' => '2022-07-25'
        ]);
        konsultasi::create([
            'user_id' => 6,
            'psikolog_id' => 1,
            'waktu' => '09:00:00',
            'tanggal' => '2022-07-30'
        ]);
        konsultasi::create([
            'user_id' => 7,
            'psikolog_id' => 2,
            'waktu' => '10:00:00',
            'tanggal' => '2022-08-01'
        ]);
    }
}
