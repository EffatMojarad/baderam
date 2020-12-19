<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateValueOfElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('value_of_elements', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });



        DB::table('value_of_elements')->insert(
            [
                ['title' => 'سطح نیتروژن خاک'],
                ['title' => 'سطح فسفر خاک'],
                ['title' => 'مقدار پتاسیم'],
                ['title' => 'مقدار آهن'],
                ['title' => 'مقدار منگنز'],
                ['title' => 'مقدار مس'],
                ['title' => 'مقدار روی'],
                ['title' => 'مقدار بور'],

            ]
        );


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('value_of_elements');
    }
}
