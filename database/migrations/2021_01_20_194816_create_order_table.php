<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->nullable();
            $table->integer('user_id')->index();
            $table->string('shipping_full_name')->nullable();
            $table->string('shipping_mobile')->nullable();
            $table->integer('province_id')->index();
            $table->string('house_number_street')->nullable();
            $table->tinyInteger('payment_method')->default(0)->comment('0:cod, 1:transfer');
            $table->tinyInteger('status')->default(0);
            $table->float('sub_total', 20, 6)->default(0);
            $table->float('shipping_fee', 20, 6)->default(0);
            $table->float('vat', 20, 6)->default(0);
            $table->float('total', 20, 6)->default(0);
            //

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
