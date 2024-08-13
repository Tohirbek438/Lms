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
        Schema::create('header_infos', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('desc');
            $table->string('count');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('header_infos');
    }
};
