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
        Schema::create('vtdctpxuat', function (Blueprint $table) {
            //$table->id();
           // $table->timestamps();
           $table->string('vtdSoPx');
           $table->string('vtdMaVTu');
           $table->integer('vtdSlXuat');
           $table->float('DGXuat');
           // khoa chinh
           $table->primary(['vtdSoPx','vtdMaVTu']);
           // khoa ngoai
           $table->foreign('vtdSoPx')->references('vtdSoPx')->on('vtdpxuat');
           $table->foreign('vtdMaVTu')->references('vtdMaVTu')->on('vtdvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vtdctpxuat');
    }
};
