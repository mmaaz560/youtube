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
        Schema::create('videos', function (Blueprint $table) {
    $table->id();

    $table->string('video');
    $table->string('title',100);
    $table->text('description')->nullable();
    $table->string('thumbnail')->nullable();
    $table->string('playlist')->nullable();
    $table->boolean('kids')->default(false);
    $table->enum('visibility', ['public', 'private', 'unlisted'])->default('public');

    $table->timestamps();
   });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
