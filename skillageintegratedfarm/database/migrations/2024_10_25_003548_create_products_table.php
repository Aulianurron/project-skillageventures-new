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
            $table->bigInteger('category_product_id')->unsigned();
            $table->string('product_name');
            $table->float('capital_price');
            $table->float('selling_price');
            $table->integer('stock');
            $table->text('description')->nullable();
            $table->string('slug')->nullable();
            $table->string('tokopedia');
            $table->string('shopee');
            $table->text('image');
            $table->timestamps();


            $table->foreign('category_product_id')->references('id')->on('category_products')->onDelete('cascade');
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
