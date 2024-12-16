<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class vtdctpxuatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        // Lấy tất cả giá trị 'vtdSoPx' từ bảng 'vtdpxuat'
        $vtdSoPxList = DB::table('vtdpxuat')->pluck('vtdSoPx')->toArray();
        
        // Lấy tất cả giá trị 'vtdMaVTu' từ bảng 'vtdvattu'
        $vtdMaVTuList = DB::table('vtdvattu')->pluck('vtdMaVTu')->toArray();

       
        foreach (range(1, 10) as $index) {
            // Chọn ngẫu nhiên 1 'vtdSoPx' từ danh sách đã lấy
            $vtdSoPx = $faker->randomElement($vtdSoPxList);
            
            // Chọn ngẫu nhiên 1 'vtdMaVTu' từ danh sách đã lấy
            $vtdMaVTu = $faker->randomElement($vtdMaVTuList);

            // Chèn vào bảng 'vtdctpxuat'
            DB::table('vtdctpxuat')->insert([
                'vtdSoPx' => $vtdSoPx,
                'vtdMaVTu' => $vtdMaVTu,
                'vtdSlXuat' => $faker->numberBetween(1, 100),  // Tạo số ngẫu nhiên từ 1 đến 100
                'DGXuat' => $faker->randomFloat(2, 1, 100),  // Tạo số ngẫu nhiên kiểu float (2 chữ số thập phân)
            ]);
        }
    }
}
