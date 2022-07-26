<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\landingPage;

class LandingPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        landingPage::create([
            'slug' => 'feelsbox',
            'visi' => 'Memberikan layanan konsultasi psikologis yang mudah, cepat, dan juga akurat',
            'misi' => 'Membantu konsumen dalam mencari psikologis yang tepat untuk melakukan konsultasi',
            'about' => 'Feelsbox adalah startup yang menghadirkan layanan konsultasi psikologis',
            'direct' => 'Membantu masyarakat dalam menjaga kesehatan mental', 
            'pencapaian' => 'TOP BRAND 2022 dalam bidang layanan kesehatan mental'
        ]);
    }
}
