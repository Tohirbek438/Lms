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
        Schema::create('type_sites', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->string('count');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('type_sites');
    }
};
