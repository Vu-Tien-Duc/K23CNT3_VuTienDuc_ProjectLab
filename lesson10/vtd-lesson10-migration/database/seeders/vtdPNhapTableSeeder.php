<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class vtdPNhapTableSeeder extends Seeder
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

        foreach (range(1, 100) as $index) {
            // Chọn ngẫu nhiên 1 'vtdMaDH' từ danh sách đã lấy
            $vtdMaDH = $faker->randomElement($vtdMaDHList);

            DB::table('vtdpnhap')->insert([
                'vtdSoPn' => $faker->uuid(),  // Tạo UUID ngẫu nhiên cho 'vtdSoPn'
                'vtdNgayNhap' => $faker->dateTime($max = 'now', $timezone = null),  // Ngày nhập ngẫu nhiên
                'vtdMaDH' => $vtdMaDH,  // Chọn 'vtdMaDH' ngẫu nhiên từ bảng 'vtddondh'
            ]);
        }
    }
}
