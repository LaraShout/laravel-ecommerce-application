<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeValueProductAttributeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_value_product_attribute', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('attribute_value_id')->unsigned();
            $table->foreign('attribute_value_id')->references('id')->on('attribute_values');
            $table->unsignedInteger('product_attribute_id');
            $table->foreign('product_attribute_id')->references('id')->on('product_attributes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attribute_value_product_attribute');
    }
}
