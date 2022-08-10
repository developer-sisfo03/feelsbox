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
            'user_id' => 8,
            'tanggal' => '2022-08-10',
            'jam' => '08:00'
        ]);
        jadwalPsikolog::create([
            'user_id' => 9,
            'tanggal' => '2022-08-10',
            'jam' => '09:00'
        ]);
        jadwalPsikolog::create([
            'user_id' => 9,
            'tanggal' => '2022-08-12',
            'jam' => '08:00'
        ]);
        jadwalPsikolog::create([
            'user_id' => 11,
            'tanggal' => '2022-08-15',
            'jam' => '12:00'
        ]);
        jadwalPsikolog::create([
            'user_id' => 10,
            'tanggal' => '2022-08-20',
            'jam' => '13:00'
        ]);
        jadwalPsikolog::create([
            'user_id' => 10,
            'tanggal' => '2022-08-20',
            'jam' => '14:00'
        ]);
        jadwalPsikolog::create([
            'user_id' => 9,
            'tanggal' => '2022-08-12',
            'jam' => '12:00'
        ]);
        jadwalPsikolog::create([
            'user_id' => 8,
            'tanggal' => '2022-08-15',
            'jam' => '13:00'
        ]);
        jadwalPsikolog::create([
            'user_id' => 8,
            'tanggal' => '2022-08-13',
            'jam' => '08:00'
        ]);
        jadwalPsikolog::create([
            'user_id' => 11,
            'tanggal' => '2022-08-13',
            'jam' => '09:00'
        ]);
        jadwalPsikolog::create([
            'user_id' => 9,
            'tanggal' => '2022-08-13',
            'jam' => '10:00'
        ]);
        jadwalPsikolog::create([
            'user_id' => 10,
            'tanggal' => '2022-08-20',
            'jam' => '11:00'
        ]);
        jadwalPsikolog::create([
            'user_id' => 11,
            'tanggal' => '2022-08-12',
            'jam' => '12:00'
        ]);
        jadwalPsikolog::create([
            'user_id' => 8,
            'tanggal' => '2022-08-20',
            'jam' => '13:00'
        ]);
        jadwalPsikolog::create([
            'user_id' => 10,
            'tanggal' => '2022-08-20',
            'jam' => '14:00'
        ]);
        jadwalPsikolog::create([
            'user_id' => 8,
            'tanggal' => '2022-08-16',
            'jam' => '08:00'
        ]);
        jadwalPsikolog::create([
            'user_id' => 11,
            'tanggal' => '2022-08-16',
            'jam' => '09:00'
        ]);
        jadwalPsikolog::create([
            'user_id' => 9,
            'tanggal' => '2022-08-16',
            'jam' => '10:00'
        ]);
        jadwalPsikolog::create([
            'user_id' => 10,
            'tanggal' => '2022-08-14',
            'jam' => '11:00'
        ]);
        jadwalPsikolog::create([
            'user_id' => 11,
            'tanggal' => '2022-08-14',
            'jam' => '12:00'
        ]);
    }
}
