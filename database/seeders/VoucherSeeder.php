<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\voucher;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        voucher::create([
            'nama' => 'voucher1',
            'kode' => 'abc1234',
            'masa_berlaku' => '2022-08-08'
        ]);
        voucher::create([
            'nama' => 'voucher2',
            'kode' => 'def5678',
            'masa_berlaku' => '2022-08-08'
        ]);
        voucher::create([
            'nama' => 'voucher3',
            'kode' => 'ghi9012',
            'masa_berlaku' => '2022-08-08'
        ]);
        voucher::create([
            'nama' => 'voucher4',
            'kode' => 'jkl3456',
            'masa_berlaku' => '2022-08-09'
        ]);
        voucher::create([
            'nama' => 'voucher5',
            'kode' => 'mno6789',
            'masa_berlaku' => '2022-08-10'
        ]);
    }
}
