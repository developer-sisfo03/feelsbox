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
            'id_pemesanan' => "5k7l",
            'client_id' => 3,
            'psikolog_id' => 8,
            'waktu' => '09:00:00',
            'tanggal' => '2022-08-12'
        ]);

        konsultasi::create([
            'id_pemesanan' => "ko9l",
            'client_id' => 3,
            'psikolog_id' => 8,
            'waktu' => '10:00:00',
            'tanggal' => '2022-08-07'
        ]);
    }
}
