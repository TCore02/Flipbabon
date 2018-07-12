<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWashingmachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('washingmachines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('washingmachine_pic');
            $table->string('category');
            $table->string('sub_category');
            $table->string('brand');
            $table->string('model');
            $table->string('price');
            $table->string('specification');
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
        Schema::dropIfExists('washingmachines');
    }
}
