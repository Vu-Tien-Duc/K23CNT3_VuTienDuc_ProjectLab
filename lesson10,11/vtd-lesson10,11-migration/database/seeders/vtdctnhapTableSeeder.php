<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class vtdctnhapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        // Lấy tất cả giá trị 'vtdSoPn' từ bảng 'vtdpnhap'
        $vtdSoPnList = DB::table('vtdpnhap')->pluck('vtdSoPn')->toArray();
        
        // Lấy tất cả giá trị 'vtdMaVTu' từ bảng 'vtdvattu'
        $vtdMaVTuList = DB::table('vtdvattu')->pluck('vtdMaVTu')->toArray();

        foreach (range(1, 2) as $index) {
            // Chọn ngẫu nhiên 1 'vtdSoPn' từ danh sách đã lấy
            $vtdSoPn = $faker->randomElement($vtdSoPnList);
            
            // Chọn ngẫu nhiên 1 'vtdMaVTu' từ danh sách đã lấy
            $vtdMaVTu = $faker->randomElement($vtdMaVTuList);

            // Chèn vào bảng 'vtdctnhap'
            DB::table('vtdctpnhap')->insert([
                'vtdSoPn' => $vtdSoPn,
                'vtdMaVTu' => $vtdMaVTu,
                'vtdSlNhap' => $faker->numberBetween(1, 100),  // Tạo số ngẫu nhiên từ 1 đến 100
                'DGNhap' => $faker->randomFloat(2, 1, 100),  // Tạo số ngẫu nhiên kiểu float (2 chữ số thập phân)
            ]);
        }
    }
}
