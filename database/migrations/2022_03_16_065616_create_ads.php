0<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('ads', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->bigInteger('id')->unsigned()->autoIncrement();
            $table->string('ad_title','30');
            $table->string('city','30');
            $table->string('hoods','30');
            $table->string('street','30');
            $table->decimal('price');
            $table->bigInteger('quadrature')->unsigned();
            $table->string('estate_types','30');
            $table->boolean('deleted')->default('1');
            $table->rememberToken();
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
        Schema::dropIfExists('ads');
    }
}
