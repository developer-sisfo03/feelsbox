<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\jadwalPsikolog;

class JadwalPsikologSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        jadwalPsikolog::create([
            'psikolog_id' => 2,
            'tanggal' => '2022-08-10',
            'jam' => '08:00'
        ]);
        jadwalPsikolog::create([
            'psikolog_id' => 1,
            'tanggal' => '2022-08-10',
            'jam' => '09:00'
        ]);
        jadwalPsikolog::create([
            'psikolog_id' => 1,
            'tanggal' => '2022-08-12',
            'jam' => '08:00'
        ]);
        jadwalPsikolog::create([
            'psikolog_id' => 3,
            'tanggal' => '2022-08-15',
            'jam' => '12:00'
        ]);
        jadwalPsikolog::create([
            'psikolog_id' => 4,
            'tanggal' => '2022-08-20',
            'jam' => '13:00'
        ]);
    }
}
