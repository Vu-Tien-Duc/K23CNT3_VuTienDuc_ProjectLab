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
        Schema::create('vtdDonDH', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('vtdMaDH')->primary();
            $table->date('vtdNgayDH');
            $table->string('vtdMaNCC');
            $table->foreign('vtdMaNCC')->references('vtdMaNCC')->on('vtdNhaCC');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vtdDonDH');
    }
};
