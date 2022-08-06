<?php

namespace Database\Seeders;

use App\Models\konsultasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tesMental;
use App\Models\User;
use App\Models\psikolog;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(LandingPageSeeder::class);
        $this->call(HasilTesSeeder::class);
        $this->call(KeluhanSeeder::class);
        $this->call(KonsultasiSeeder::class);
        $this->call(PsikologSeeder::class);
        $this->call(TesMentalSeeder::class);
        $this->call(TestimoniSeeder::class);
        $this->call(JadwalPsikologSeeder::class);
        
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('aaa'),
            'role' => 'admin',
        ]);
        User::factory()->create([
            'name' => 'Sultan hafizh',
            'email' => 'shalexander09@gmail.com',
            'password' => Hash::make('aaa'),
            'role' => 'user', 
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => '2002-08-12',
            'domisili' => 'Bandung'
        ]);
        User::factory()->create([
            'name' => 'Mbak Maid',
            'email' => 'maidsisfo@gmail.com',
            'password' => Hash::make('aaa'),
            'role' => 'user', 
            'jenis_kelamin' => 'Wanita',
            'tanggal_lahir' => '2021-11-14',
            'domisili' => 'Isekai'
        ]);
        User::factory()->create([
            'name' => 'Mufid Moes',
            'email' => 'doomswizard@gmail/com',
            'password' => Hash::make('aaa'),
            'role' => 'user',
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => '1997-01-01',
            'domisili' => 'Bandung'
        ]);
        User::factory()->create([
            'name' => 'Joko Purnomo',
            'email' => 'enakjosgandos@gmail.com',
            'password' => Hash::make('aaa'),
            'role' => 'user',
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => '1969-03-11',
            'domisili' => 'London'
        ]);
        User::factory()->create([
            'name' => 'Kitagawa Marin',
            'email' => 'marinchan@gmail.com',
            'password' => Hash::make('aaa'),
            'role' => 'user',
            'jenis_kelamin' => 'Wanita',
            'tanggal_lahir' => '1998-09-11',
            'domisili' => 'Tokyo'
        ]);
        User::factory()->create([
            'name' => 'Wahyudi Khoeris',
            'email' => 'wahyukhoer@gmail.com',
            'password' => Hash::make('aaa'),
            'role' => 'user',
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => '2001-05-13',
            'domisili' => 'Semarang'
        ]);
        User::factory()->create([
            'name' => 'Walter White',
            'email' => 'eriscapricron@gmail.com',
            'password' => Hash::make('aaa'),
            'role' => 'psikolog',
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => '1969-07-11',
            'domisili' => 'New York'
        ]);
        User::factory()->create([
            'name' => 'Sarah Jhonson',
            'email' => 'mufidmoes@gmail.com',
            'password' => Hash::make('aaa'),
            'role' => 'psikolog',
            'jenis_kelamin' => 'Wanita',
            'tanggal_lahir' => '1998-09-11',
            'domisili' => 'Jakarta'
        ]);
        User::factory()->create([
            'name' => 'William Anderson',
            'email' => 'sirwilliam@gmail.com',
            'password' => Hash::make('aaa'),
            'role' => 'psikolog',
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => '1996-08-17',
            'domisili' => 'Citayam'
        ]);
        User::factory()->create([
            'name' => 'Amanda Jepson',
            'email' => 'ciciamanda@gmail.com',
            'password' => Hash::make('aaa'),
            'role' => 'psikolog',
            'jenis_kelamin' => 'Wanita',
            'tanggal_lahir' => '1999-09-23',
            'domisili' => 'Surabaya'
        ]);
        // User::factory()->create([
        //     'name' => 'Hewan Purba',
        //     'email' => 'kontollodon625@gmail.com',
        //     'password' => Hash::make('aaa'),
        //     'role' => 'user',
        // ]);

        // User::factory(5)->create();
        
        // konsultasi::factory(10)->create();


        // \App\Models\User::factory()->create([
        
    }
}   