<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class vtdctdondhTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        // Lấy tất cả giá trị 'vtdMaDH' từ bảng 'vtddondh'
        $vtdMaDHList = DB::table('vtddondh')->pluck('vtdMaDH')->toArray();
        
        // Lấy tất cả giá trị 'vtdMaVTu' từ bảng 'vtdvattu'
        $vtdMaVTuList = DB::table('vtdvattu')->pluck('vtdMaVTu')->toArray();

        foreach (range(1, 2) as $index) {
            // Chọn ngẫu nhiên 1 'vtdMaDH' từ danh sách đã lấy
            $vtdMaDH = $faker->randomElement($vtdMaDHList);
            
            // Chọn ngẫu nhiên 1 'vtdMaVTu' từ danh sách đã lấy
            $vtdMaVTu = $faker->randomElement($vtdMaVTuList);

            // Chèn vào bảng 'vtdctdondh' (sửa tên bảng từ 'vtddondh' thành 'vtdctdondh')
            DB::table('vtdctdondh')->insert([
                'vtdMaDH' => $vtdMaDH,
                'vtdMaVTu' => $vtdMaVTu,
                'SlDat' => $faker->numberBetween(1, 100),  // Tạo số ngẫu nhiên từ 1 đến 100
            ]);
        }
    }
}
