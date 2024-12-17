<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class vtdPXuatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        foreach(range(1,100) as $index)
        {
            DB::table('vtdpxuat')->insert([
                'vtdSoPx'=>$faker->uuid(),
                'vtdNgayXuat'=>$faker->dateTime($max = 'now',
                $timezone = null),
                'vtdTenKH'=>$faker->name(),
            ]);
        }
    }
}
