<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionTable extends Migration
{
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->date('from_date')->nullable();
            $table->date('end_date')->nullable();
            $table->tinyInteger('is_active')->default(0)->comment('0:inactive, 1:active');
            $table->text('note')->nullable();
            $table->string('image_url')->nullable();
            $table->integer('percentage')->default(0);
            //

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('promotions');
    }
}
