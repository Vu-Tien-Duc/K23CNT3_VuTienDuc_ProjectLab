<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vtd_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->string('vtdMaHoaDon',255)->unique();
            $table->bigInteger('vtdMaKhachHang')->references('id')->on('vtd_KHACH_HANG');
            $table->date('vtdNgayHoaDon');
            $table->date('vtdNgayNhan');
            $table->string('vtdHoTenKhachHang',255);
            $table->string('vtdEmail',255);
            $table->string('vtdDienThoai',255);
            $table->string('vtdDiaChi',255);
            $table->float('vtdTongGiaTri');
            $table->tinyInteger('vtdTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vtd_HOA_DON');
    }
};
