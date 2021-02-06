<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailTable extends Migration
{
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('product_attr_id')->index();
            $table->integer('order_id')->index();
            $table->integer('qty')->default(1);
            $table->float('unit_price', 20, 6)->default(0);
            $table->float('real_price', 20, 6)->default(0);
            $table->float('total_price', 20, 6)->default(0);
            //

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
