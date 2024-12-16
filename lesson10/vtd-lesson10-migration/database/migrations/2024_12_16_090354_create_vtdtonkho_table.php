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
        Schema::create('vtdtonkho', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('vtdNamThang');
            $table->string('vtdMaVTu');
            $table->integer('vtdSlDau');
            $table->integer('vtdTongSlN');
            $table->integer('vtdTongSlX');
            $table->integer('vtdSlCuoi');
            // khoa chinh
            $table->primary(['vtdNamThang','vtdMaVTu']);
            // khoa ngoai
            $table->foreign('vtdMaVTu')->references('vtdMaVTu')->on('vtdvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vtdtonkho');
    }
};
