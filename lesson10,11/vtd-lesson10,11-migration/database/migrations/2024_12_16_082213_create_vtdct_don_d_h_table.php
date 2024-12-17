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
        Schema::create('vtdctDonDH', function (Blueprint $table) {
           // $table->id();
            //$table->timestamps();
            $table->string('vtdMaDH');
            $table->string('vtdMaVTu');
            $table->integer('SlDat');
            // Tao Khoa chinh cho 2 cot 
            $table->primary(['vtdMaDH','vtdMaVTu']);
            // khoa ngoai
            $table->foreign('vtdMaVTu')->references('vtdMaVTu')->on('vtdvattu');
            $table->foreign('vtdMaDH')->references('vtdMaDH')->on('vtddondh');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vtdctDonDH');
    }
};
