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
        Schema::create('sheet_music', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('composer')->nullable();
            $table->string('arranger')->nullable();
            $table->string('instrument');
            $table->string('difficulty');
            $table->text('description');
            $table->string('file_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sheet_music');
    }
};
