<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvinceTable extends Migration
{
    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('type');
            $table->tinyInteger('is_active')->default(0)->comment('0:inactive, 1:active');
            //

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('provinces');
    }
}
