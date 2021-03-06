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
            $table->bigIncrements('id');
            $table->string('productName');
            $table->unsignedBigInteger('productLineId');
            $table->string('productScale');
            $table->string('productVendor');
            $table->text('productDescription');
            $table->integer('quantityInStock');
            $table->decimal('buyPrice');
            $table->decimal('MSRP');
            $table->string('image');
            $table->timestamps();
            $table->foreign('productLineId')->references('id')->on('product_lines')->onDelete('cascade');
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
