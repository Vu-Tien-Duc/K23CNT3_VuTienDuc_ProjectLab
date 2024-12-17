<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class vtdNhaCCTableSeeder extends Seeder
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
            DB::table('vtdnhacc')->insert([
            'vtdMaNCC'=>$faker->uuid(),
            // 'MaNCC'=>$faker->word(15),
            'vtdTenNCC'=>$faker->sentence(5),
            'vtdDiachi'=>$faker->address(), 
            'vtdDienthoai'=>$faker->phoneNumber(10),
            'vtdEmail'=>$faker->email(),
            'vtdStatus'=>$faker->boolean()
            ]);
        }
    }
}
