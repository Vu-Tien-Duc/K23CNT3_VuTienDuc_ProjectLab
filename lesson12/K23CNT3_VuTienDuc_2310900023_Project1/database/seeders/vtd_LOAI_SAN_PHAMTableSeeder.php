<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class vtd_LOAI_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('vtd_LOAI_SAN_PHAM')->insert([
            'vtdMaLoai'=>'L001',
            'vtdTenLoai'=>'Cây Cảnh Văn Phòng',
            'vtdTrangThai'=>0
        ]);
        DB::table('vtd_LOAI_SAN_PHAM')->insert([
            'vtdMaLoai'=>'L002',
            'vtdTenLoai'=>'Cây Để Bàn',
            'vtdTrangThai'=>0
        ]);
        DB::table('vtd_LOAI_SAN_PHAM')->insert([
            'vtdMaLoai'=>'L003',
            'vtdTenLoai'=>'Cây Cảnh Phong Thủy',
            'vtdTrangThai'=>0
        ]);
        DB::table('vtd_LOAI_SAN_PHAM')->insert([
            'vtdMaLoai'=>'L004',
            'vtdTenLoai'=>'Cây Thủy Canh',
            'vtdTrangThai'=>0
        ]);
    }
}
