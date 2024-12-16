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
        Schema::create('vtdpnhap', function (Blueprint $table) {
              //$table->id();
            //$table->timestamps();
            $table->string('vtdSoPn')->primary();
            $table->date('vtdNgayNhap');
            $table->string('vtdMaDH');
            // khoa ngoai
            $table->foreign('vtdMaDH')->references('vtdMaDH')->on('vtddondh');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vtdpnhap');
    }
};
