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
        Schema::create('main_infos', function (Blueprint $table) {
            $table->id();
            $table->string('title_uz');
            $table->string('title_ru')->nullable();
            $table->string('title_en')->nullable();
            $table->string('middle_uz');
            $table->string('middle_ru')->nullable();
            $table->string('middle_en')->nullable();
            $table->string('desc_uz');
            $table->string('desc_ru')->nullable();
            $table->string('desc_en')->nullable();
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_infos');
    }
};
