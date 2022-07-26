<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\hasilTes;

class HasilTesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        hasilTes::create([
            'user_id' => 2,
            'nilai' => 27,
            'kesimpulan' => 'Depresi Ringan',
            'waktu' => '2022-07-29 19:07:24'
        ]);

        hasilTes::create([
            'user_id' => 4,
            'nilai' => 18,
            'kesimpulan' => 'Batas Depresi',
            'waktu' => '2022-08-04 08:45:17'
        ]);
        hasilTes::create([
            'user_id' => 5,
            'nilai' => 11,
            'kesimpulan' => 'Perasaan Murung',
            'waktu' => '2022-08-13 14:03:59'
        ]);
        hasilTes::create([
            'user_id' => 6,
            'nilai' => 42,
            'kesimpulan' => 'Depresi Berat',
            'waktu' => '2022-07-27 19:45:24'
        ]);
        hasilTes::create([
            'user_id' => 7,
            'nilai' => 9,
            'kesimpulan' => 'Suasana Perasaan Normal',
            'waktu' => '2022-07-28 16:15:56'
        ]);
    }
}
