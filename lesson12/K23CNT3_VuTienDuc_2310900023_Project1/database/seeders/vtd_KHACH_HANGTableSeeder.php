<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class vtd_KHACH_HANGTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('vtd_KHACH_HANG')->insert([
            'vtdMaKhachHang'=>'KH001',
            'vtdHoTenKhachHang'=>'Vũ Tiến Đức',
            'vtdEmail'=>'vuducc@gmail.com',
            'vtdMatKhau'=>'123456a@',
            'vtdDienThoai'=>'012550036',
            'vtdDiaChi'=>'Yên Bái-Yên Bình',
            'vtdNgayDangKy'=>'2024/12/12',
            'vtdTrangThai'=>0,
        ]);

        DB::table('vtd_KHACH_HANG')->insert([
            'vtdMaKhachHang'=>'KH002',
            'vtdHoTenKhachHang'=>'Trần Tuấn Hưng',
            'vtdEmail'=>'hungtran@gmail.com',
            'vtdMatKhau'=>'hungyb123',
            'vtdDienThoai'=>'012588868',
            'vtdDiaChi'=>'Phú Thọ',
            'vtdNgayDangKy'=>'2024/12/20',
            'vtdTrangThai'=>0,
        ]);

        DB::table('vtd_KHACH_HANG')->insert([
            'vtdMaKhachHang'=>'KH003',
            'vtdHoTenKhachHang'=>'Phan Quang Minh',
            'vtdEmail'=>'pminh@gmail.com',
            'vtdMatKhau'=>'pminh3366',
            'vtdDienThoai'=>'0382550508',
            'vtdDiaChi'=>'Phú Thọ',
            'vtdNgayDangKy'=>'2024/12/17',
            'vtdTrangThai'=>2,
        ]);

        DB::table('vtd_KHACH_HANG')->insert([
            'vtdMaKhachHang'=>'KH004',
            'vtdHoTenKhachHang'=>'Phạm Tùng Quân',
            'vtdEmail'=>'quanpham@gmail.com',
            'vtdMatKhau'=>'quanpham98',
            'vtdDienThoai'=>'094357152',
            'vtdDiaChi'=>'Hà Nội',
            'vtdNgayDangKy'=>'2024/12/03',
            'vtdTrangThai'=>0,
        ]);
    }
}
