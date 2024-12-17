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
        Schema::create('vtdvattu', function (Blueprint $table) {
           // $table->id();
           // $table->timestamps();
            $table->string('vtdMaVTu')->primary();
            $table->string('vtdTenVTu')->unique();
            $table->string('vtdDVTinh');
            $table->float('vtdPhanTram');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vtdvattu');
    }
};
