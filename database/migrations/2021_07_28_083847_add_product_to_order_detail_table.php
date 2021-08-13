<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProductToOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_detail', function (Blueprint $table) {
            $table->unsignedInteger('product_id')->after('price')->nullable();
            $table->foreign('product_id')->references('id')->on('product');
        });

//        Schema::table('product', function (Blueprint $table) {
//            $table->unsignedInteger('category_id')->after('price')->nullable();
//            $table->foreign('category_id')->references('id')->on('categories');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_detail', function (Blueprint $table) {
            //
        });
    }
}
