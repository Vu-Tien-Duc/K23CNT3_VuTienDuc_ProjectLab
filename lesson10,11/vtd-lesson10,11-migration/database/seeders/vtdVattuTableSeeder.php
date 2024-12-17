<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class vtdVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::Table('vtdVattu')->insert([
            'vtdMaVTu'=>'DD01',
            'vtdTenVTu'=>'Đầu DVD Hitachi 1 cửa',
            'vtdDvTinh'=>'Bộ',
            'vtdPhanTram'=>40,
        ]);
        DB::Table('vtdVattu')->insert([
            'vtdMaVTu'=>'DD02',
            'vtdTenVTu'=>'Đầu DVD Hitachi 2 cửa',
            'vtdDvTinh'=>'Bộ',
            'vtdPhanTram'=>50,
        ]);
    }
}
