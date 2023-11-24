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
        Schema::create('gallery_infocards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('categories_id')->unsigned();
            $table->unsignedBigInteger('cards_id')->unsigned();
            $table->foreign('categories_id')->references('category_id')->on('gallery')->onDelete('cascade');
            $table->foreign('cards_id')->references('id')->on('infocards')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallary_infocards');
    }
};
