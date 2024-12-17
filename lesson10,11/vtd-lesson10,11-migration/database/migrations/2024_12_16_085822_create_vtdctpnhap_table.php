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
        Schema::create('vtdctpnhap', function (Blueprint $table) {
           // $table->id();
            //$table->timestamps();
            $table->string('vtdSoPn');
            $table->string('vtdMaVTu');
            $table->integer('vtdSlNhap');
            $table->float('DGNhap');
            // khoa chinh
            $table->primary(['vtdSoPn','vtdMaVTu']);
            // khoa ngoai
            $table->foreign('vtdSoPn')->references('vtdSoPn')->on('vtdpnhap');
            $table->foreign('vtdMaVTu')->references('vtdMaVTu')->on('vtdvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vtdctpnhap');
    }
};
