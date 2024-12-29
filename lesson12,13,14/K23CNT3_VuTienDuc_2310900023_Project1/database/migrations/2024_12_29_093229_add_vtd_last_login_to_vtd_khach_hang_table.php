<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('vtd_khach_hang', function (Blueprint $table) {
        $table->timestamp('vtdLastLogin')->nullable(); // Thêm cột vtdLastLogin để lưu thời gian đăng nhập gần nhất
    });
}

public function down()
{
    Schema::table('vtd_khach_hang', function (Blueprint $table) {
        $table->dropColumn('vtdLastLogin'); // Xóa cột vtdLastLogin nếu cần
    });
}

};
