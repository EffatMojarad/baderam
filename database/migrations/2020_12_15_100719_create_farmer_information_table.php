<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmerInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmer_information', function (Blueprint $table) {
            $table->id();
            $table->integer('state_id');
            $table->integer('cultivation_id');
            $table->integer('glasshouse_type_id')->nullable();
            $table->integer('glasshouse_list_id')->nullable();;
            $table->integer('agricultural_list_id')->nullable();
            $table->smallInteger('year');
            $table->smallInteger('month');
            $table->smallInteger('day');
            $table->boolean('has_soil_test');
            $table->text('description');


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
        Schema::dropIfExists('farmer_information');
    }
}
