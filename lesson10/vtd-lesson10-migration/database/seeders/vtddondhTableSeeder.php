<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class vtddondhTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        // Lấy tất cả giá trị 'vtdMaNCC' từ bảng 'vtdnhacc'
        $vtdMaNCCList = DB::table('vtdnhacc')->pluck('vtdMaNCC')->toArray();

        foreach (range(1, 100) as $index) {
            // Chọn ngẫu nhiên 1 'vtdMaNCC' từ danh sách đã lấy
            $vtdMaNCC = $faker->randomElement($vtdMaNCCList);

            // Chèn vào bảng 'vtddondh'
            DB::table('vtddondh')->insert([
                'vtdMaDH' => $faker->uuid(),  // Tạo UUID ngẫu nhiên cho 'vtdMaDH'
                'vtdNgayDH' => $faker->dateTime($max = 'now', $timezone = null),  // Ngày nhập ngẫu nhiên
                'vtdMaNCC' => $vtdMaNCC,  // Chọn 'vtdMaNCC' ngẫu nhiên từ bảng 'vtdnhacc'
            ]);
        }
    }
}
