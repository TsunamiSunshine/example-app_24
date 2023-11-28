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
        Schema::create('categories_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categories_id')->unsigned();
            $table->unsignedBigInteger('products_id')->unsigned();
            $table->foreign('categories_id')->references('category_id')->on('categories')->onDelete('cascade');
            $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories_products');
    }
};
