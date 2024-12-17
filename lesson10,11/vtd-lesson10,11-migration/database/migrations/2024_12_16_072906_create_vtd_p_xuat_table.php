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
        Schema::create('vtdPXuat', function (Blueprint $table) {
           // $table->id();
            //$table->timestamps();
            $table->string('vtdSoPx')->primary();
            $table->date('vtdNgayXuat');
            $table->string('vtdTenKH');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vtdPXuat');
    }
};
