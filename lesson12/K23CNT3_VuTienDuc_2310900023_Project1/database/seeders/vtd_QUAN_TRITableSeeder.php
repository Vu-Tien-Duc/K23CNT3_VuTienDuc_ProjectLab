<?php



namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class vtd_QUAN_TRITableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $vtdMatKhau = md5("ducyb12398"); // Password encryption (not recommended for production)
        DB::table('vtd_QUAN_TRI')->insert([
            'vtdTaiKhoan' => "vuduc@gmail.com",
            'vtdMatKhau' => $vtdMatKhau,
            'vtdTrangThai' => 0
        ]);
        DB::table('vtd_QUAN_TRI')->insert([
            'vtdTaiKhoan' => "0943572199",
            'vtdMatKhau' => $vtdMatKhau,
            'vtdTrangThai' => 0
        ]);
    }
}
