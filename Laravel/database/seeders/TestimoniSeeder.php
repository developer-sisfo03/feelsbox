<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\testimoni;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        testimoni::create([
            'user_id' => 2,
            'testimoni' => 'layanan ini sangat membantu saya dalam menjaga kesehatan mental'
        ]);
        testimoni::create([
            'user_id' => 3,
            'testimoni' => 'Terima kasih Feelsbox, karena aplikasi ini saya dapat konsultasi dengan psikolog'
        ]);
        testimoni::create([
            'user_id' => 4,
            'testimoni' => 'Aplikasi ini sangat membantu saya menilai kesehatan mental'
        ]);
        testimoni::create([
            'user_id' => 5,
            'testimoni' => 'Feelsbox sangat membantu saya dalam menjaga kesehatan mental'
        ]);
        testimoni::create([
            'user_id' => 6,
            'testimoni' => 'Aplikasi ini berhasil mencegah saya melakukan bunuh diri'
        ]);
        testimoni::create([
            'user_id' => 7,
            'testimoni' => 'Website ini memiliki UI yang sangat bagus dan mudah digunakan']);
    }
}
