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
        Schema::create('relation_abouts', function (Blueprint $table) {
            $table->id();
            $table->float('soni');
            $table->string('title_uz');
            $table->string('title_ru')->nullable();
            $table->string('title_en')->nullable();
            $table->integer('about_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relation_abouts');
    }
};
