<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class vtdtonkhoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        // Lấy tất cả giá trị 'vtdMaVTu' từ bảng 'vtdvattu'
        $vtdMaVTuList = DB::table('vtdvattu')->pluck('vtdMaVTu')->toArray();

        // Thực hiện chèn dữ liệu vào bảng 'vtdtonkho'
        foreach (range(1, 2) as $index) {
            // Chọn ngẫu nhiên 1 'vtdMaVTu' từ danh sách đã lấy
            $vtdMaVTu = $faker->randomElement($vtdMaVTuList);

            // Tạo một tháng năm ngẫu nhiên (ví dụ: 2024-12)
            $namThang = $faker->year . '-' . str_pad($faker->month, 2, '0', STR_PAD_LEFT);
            
            // Số lượng tồn đầu kỳ ngẫu nhiên
            $slDau = $faker->numberBetween(1, 500);
            
            // Tổng số lượng nhập ngẫu nhiên
            $tongSlN = $faker->numberBetween(1, 500);
            
            // Tổng số lượng xuất ngẫu nhiên
            $tongSlX = $faker->numberBetween(1, 500);
            
            // Tính số lượng tồn cuối kỳ
            $slCuoi = $slDau + $tongSlN - $tongSlX;

            // Chèn vào bảng 'vtdtonkho'
            DB::table('vtdtonkho')->insert([
                'vtdNamThang' => $namThang, // Tháng và năm
                'vtdMaVTu' => $vtdMaVTu, // Mã vật tư từ bảng 'vtdvattu'
                'vtdSlDau' => $slDau, // Số lượng tồn đầu kỳ
                'vtdTongSlN' => $tongSlN, // Tổng số lượng nhập
                'vtdTongSlX' => $tongSlX, // Tổng số lượng xuất
                'vtdSlCuoi' => $slCuoi, // Số lượng tồn cuối kỳ
            ]);
        }
    }
}
