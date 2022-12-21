<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name', 100);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('product__categories');
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->string('availability');
            $table->string('old_price');
            $table->string('new_price');
            $table->string('color_family');
            $table->string('product_img');
            $table->text('description');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
