<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('title');
            $table->integer('category',10)->change();
            $table->string('description');
            $table->string('thumbnail');
            $table->integer('price');
            $table->timestamps();

        });
//        Schema::table('products', function (Blueprint $table) {
//            $table->unsignedInteger('category');
//
//            $table->foreign('category')->references('id')->on('categories');
//        });
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
