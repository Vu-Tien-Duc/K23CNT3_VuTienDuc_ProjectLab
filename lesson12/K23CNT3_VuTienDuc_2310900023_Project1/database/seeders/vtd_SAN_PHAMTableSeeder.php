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
        DB::table('vtd_SAN_PHAM')->updateOrInsert(
            ['vtdMaSanPham' => 'VP001'],  // Kiểm tra sự tồn tại của vtdMaSanPham
            [
                'vtdTenSanPham' => 'Cây Phú Quý',
                'vtdHinhAnh' => 'D:\\Luyện Tập _---\\san_pham\\VP003.jpg',
                'vtdSoLuong' => 100,
                'vtdDonGia' => 699000,
                'vtdMaLoai' => 1,
                'vtdTrangThai' => 0
            ]
        );

        // Chèn hoặc cập nhật sản phẩm 'VP002'
        DB::table('vtd_SAN_PHAM')->updateOrInsert(
            ['vtdMaSanPham' => 'VP002'],  // Kiểm tra sự tồn tại của vtdMaSanPham
            [
                'vtdTenSanPham' => 'Cây Đại Phú Gia',
                'vtdHinhAnh' => 'D:\\Luyện Tập _---\\san_pham\\VP003.jpg',
                'vtdSoLuong' => 100,
                'vtdDonGia' => 550000,
                'vtdMaLoai' => 1,
                'vtdTrangThai' => 0
            ]
        );

        // Chèn hoặc cập nhật sản phẩm 'VP003'
        DB::table('vtd_SAN_PHAM')->updateOrInsert(
            ['vtdMaSanPham' => 'VP003'],  // Kiểm tra sự tồn tại của vtdMaSanPham
            [
                'vtdTenSanPham' => 'Cây Hạnh Phúc',
                'vtdHinhAnh' => 'D:\\Luyện Tập _---\\san_pham\\VP003.jpg',
                'vtdSoLuong' => 100,
                'vtdDonGia' => 250000,
                'vtdMaLoai' => 1,
                'vtdTrangThai' => 0
            ]
        );

        // Chèn hoặc cập nhật sản phẩm 'VP004'
        DB::table('vtd_SAN_PHAM')->updateOrInsert(
            ['vtdMaSanPham' => 'VP004'],  // Kiểm tra sự tồn tại của vtdMaSanPham
            [
                'vtdTenSanPham' => 'Cây Vạn Lộc',
                'vtdHinhAnh' => 'D:\\Luyện Tập _---\\san_pham\\VP003.jpg',
                'vtdSoLuong' => 100,
                'vtdDonGia' => 799000,
                'vtdMaLoai' => 1,
                'vtdTrangThai' => 0
            ]
        );

        // Chèn hoặc cập nhật sản phẩm 'PT001'
        DB::table('vtd_SAN_PHAM')->updateOrInsert(
            ['vtdMaSanPham' => 'PT001'],  // Kiểm tra sự tồn tại của vtdMaSanPham
            [
                'vtdTenSanPham' => 'Cây Thiết Mộc Lan',
                'vtdHinhAnh' => 'D:\\Luyện Tập _---\\san_pham\\VP003.jpg',
                'vtdSoLuong' => 150,
                'vtdDonGia' => 590000,
                'vtdMaLoai' => 3,
                'vtdTrangThai' => 0
            ]
        );

        // Chèn hoặc cập nhật sản phẩm 'PT002'
        DB::table('vtd_SAN_PHAM')->updateOrInsert(
            ['vtdMaSanPham' => 'PT002'],  // Kiểm tra sự tồn tại của vtdMaSanPham
            [
                'vtdTenSanPham' => 'Cây Hạnh Phúc',
                'vtdHinhAnh' => 'D:\\Luyện Tập _---\\san_pham\\VP003.jpg',
                'vtdSoLuong' => 200,
                'vtdDonGia' => 290000,
                'vtdMaLoai' => 3,
                'vtdTrangThai' => 0
            ]
        );

        // Chèn hoặc cập nhật sản phẩm 'PT003'
        DB::table('vtd_SAN_PHAM')->updateOrInsert(
            ['vtdMaSanPham' => 'PT003'],  // Kiểm tra sự tồn tại của vtdMaSanPham
            [
                'vtdTenSanPham' => 'Cây Trường Sinh',
                'vtdHinhAnh' => 'D:\\Luyện Tập _---\\san_pham\\VP003.jpg',
                'vtdSoLuong' => 200,
                'vtdDonGia' => 299000,
                'vtdMaLoai' => 3,
                'vtdTrangThai' => 0
            ]
        );

        // Chèn hoặc cập nhật sản phẩm 'PT004'
        DB::table('vtd_SAN_PHAM')->updateOrInsert(
            ['vtdMaSanPham' => 'PT004'],  // Kiểm tra sự tồn tại của vtdMaSanPham
            [
                'vtdTenSanPham' => 'Cây Hoa Nhài',
                'vtdHinhAnh' => 'D:\\Luyện Tập _---\\san_pham\\VP003.jpg',
                'vtdSoLuong' => 300,
                'vtdDonGia' => 199000,
                'vtdMaLoai' => 3,
                'vtdTrangThai' => 0
            ]
        );
    }
}
