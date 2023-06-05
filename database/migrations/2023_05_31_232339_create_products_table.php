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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->nullable();
            $table->string('code')->nullable();
            $table->integer('quantity')->nullable();
            $table->decimal('price',8,2,false)->nullable();
            $table->integer('discount')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('thumbnail')->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('subcategory_id')->constrained()->onDelete('cascade');
            $table->foreignId('brand_id')->constrained()->onDelete('cascade');
            $table->boolean('hot deals');
            $table->boolean('featured');
            $table->boolean('special offers');
            $table->boolean('special deals');
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
