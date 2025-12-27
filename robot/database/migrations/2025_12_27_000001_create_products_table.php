<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('tagline')->nullable();
            $table->string('category')->nullable(); // e.g., "Delivery Robot", "Service Robot"
            $table->text('hero_text')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable(); // Main product image
            $table->string('hero_bg')->nullable(); // Hero background image
            $table->string('feature_image')->nullable(); // Feature section image
            $table->string('specs_image')->nullable(); // Specifications section image
            $table->string('video')->nullable(); // Optional video file
            $table->boolean('is_published')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
