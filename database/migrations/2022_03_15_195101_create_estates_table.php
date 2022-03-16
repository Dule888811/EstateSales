<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
       public function up()
      {


         Schema::create('estates', function (Blueprint $table) {
              Schema::enableForeignKeyConstraints();
              $table->bigInteger('id');
              $table->string('estate_ad','30');
              $table->string('cities','30');
              $table->string('hoods','30');
              $table->string('estate_types','30');
              $table->bigIncrements('ads_id');
          });
      }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estates');
    }
}
