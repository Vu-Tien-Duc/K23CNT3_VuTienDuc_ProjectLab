<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class vtd_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Chèn hoặc cập nhật sản phẩm 'VP001'
        DB::table('vtd_SAN_PHAM')->insert([
            'vtdMaSanPham' => 'VP001',
            'vtdTenSanPham' => 'Cây Phú Quý',
            'vtdHinhAnh' => asset('img/san_pham/PT001.jpg'),
            'vtdSoLuong' => 100,
            'vtdDonGia' => 699000,
            'vtdMaLoai' => 1,
            'vtdTrangThai' => 0
        ]);
        
        DB::table('vtd_SAN_PHAM')->insert([
            'vtdMaSanPham' => 'VP002',
            'vtdTenSanPham' => 'Cây Đại Phú Gia',
            'vtdHinhAnh' => asset('img/san_pham/PT001.jpg'),
            'vtdSoLuong' => 100,
            'vtdDonGia' => 550000,
            'vtdMaLoai' => 1,
            'vtdTrangThai' => 0
        ]);
        
        DB::table('vtd_SAN_PHAM')->insert([
            'vtdMaSanPham' => 'VP003',
            'vtdTenSanPham' => 'Cây Hạnh Phúc',
            'vtdHinhAnh' => asset('img/san_pham/PT001.jpg'),
            'vtdSoLuong' => 100,
            'vtdDonGia' => 250000,
            'vtdMaLoai' => 1,
            'vtdTrangThai' => 0
        ]);
        
        DB::table('vtd_SAN_PHAM')->insert([
            'vtdMaSanPham' => 'VP004',
            'vtdTenSanPham' => 'Cây Vạn Lộc',
            'vtdHinhAnh' => asset('img/san_pham/PT001.jpg'),
            'vtdSoLuong' => 100,
            'vtdDonGia' => 799000,
            'vtdMaLoai' => 1,
            'vtdTrangThai' => 0
        ]);
        
        DB::table('vtd_SAN_PHAM')->insert([
            'vtdMaSanPham' => 'PT001',
            'vtdTenSanPham' => 'Cây Thiết Mộc Lan',
            'vtdHinhAnh' => asset('img/san_pham/PT001.jpg'),
            'vtdSoLuong' => 150,
            'vtdDonGia' => 590000,
            'vtdMaLoai' => 3,
            'vtdTrangThai' => 0
        ]);
        
        DB::table('vtd_SAN_PHAM')->insert([
            'vtdMaSanPham' => 'PT002',
            'vtdTenSanPham' => 'Cây Hạnh Phúc',
            'vtdHinhAnh' => asset('img/san_pham/PT001.jpg'),
            'vtdSoLuong' => 200,
            'vtdDonGia' => 290000,
            'vtdMaLoai' => 3,
            'vtdTrangThai' => 0
        ]);
        
        DB::table('vtd_SAN_PHAM')->insert([
            'vtdMaSanPham' => 'PT003',
            'vtdTenSanPham' => 'Cây Trường Sinh',
            'vtdHinhAnh' => asset('img/san_pham/PT001.jpg'),
            'vtdSoLuong' => 200,
            'vtdDonGia' => 299000,
            'vtdMaLoai' => 3,
            'vtdTrangThai' => 0
        ]);
        
        DB::table('vtd_SAN_PHAM')->insert([
            'vtdMaSanPham' => 'PT004',
            'vtdTenSanPham' => 'Cây Hoa Nhài',
            'vtdHinhAnh' => asset('img/san_pham/PT001.jpg'),
            'vtdSoLuong' => 300,
            'vtdDonGia' => 199000,
            'vtdMaLoai' => 3,
            'vtdTrangThai' => 0
        ]);
        
    }
}
