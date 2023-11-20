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
            $table->foreignId('categoy_id')->constrained('categories')->cascadeOnDelete()->cascadeOnDelete();
            $table->string('name');
            $table->string('slug');
            $table->longText('description');
            $table->float('price');
            $table->float('compare_price')->nullable();
            $table->boolean('featured')->default(0);
            $table->boolean('slider')->default(0);
            $table->boolean('status')->default(1);
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