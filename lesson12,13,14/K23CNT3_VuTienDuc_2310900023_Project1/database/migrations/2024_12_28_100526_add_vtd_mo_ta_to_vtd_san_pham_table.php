<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVtdMoTaToVtdSanPhamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vtd_san_pham', function (Blueprint $table) {
            $table->text('vtdMoTa')->nullable()->after('vtdMaLoai');  // Thêm cột vtdMoTa sau cột vtdMaLoai
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vtd_san_pham', function (Blueprint $table) {
            $table->dropColumn('vtdMoTa');  // Xóa cột vtdMoTa nếu cần
        });
    }
}
