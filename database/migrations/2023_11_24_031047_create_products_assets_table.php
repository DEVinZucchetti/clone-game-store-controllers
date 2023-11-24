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
        Schema::create('products_assets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id');
            $table->string('product_id')->unique();
            $table->string('name', 150)->nullable();
            $table->string('url')->nullable();
            $table->enum('type',['VIDEO','IMAGEN'])->nullable();
            $table
            ->foreign('product_id')
            ->references('id')
            ->on('products');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_assets');
    }
};
