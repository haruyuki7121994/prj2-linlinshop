<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->index();
            $table->string('name')->nullable();
            $table->integer('category_id')->index();
            $table->text('description')->nullable();
            $table->tinyInteger('is_featured')->default(0)->comment('0: no, 1: yes');
            //

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
