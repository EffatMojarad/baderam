<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAgriculturalPlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agricultural_plants', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });


        DB::table('agricultural_plants')->insert(
            [
                ['title' => 'ذرت علوفه ای'],
                ['title' => 'قند چقندر'],
                ['title' => 'یونجه آبی'],
                ['title' => 'گوجه فرنگی'],
                ['title' => 'شبدر'],
                ['title' => 'عدس'],
                ['title' => 'سیب زمینی'],
                ['title' => 'جو'],
                ['title' => 'لوبیا'],
                ['title' => 'هندوانه'],
                ['title' => 'کلزا'],
                ['title' => 'آفتاب گردان آجیلی'],
                ['title' => 'خربزه'],
                ['title' => 'پیاز'],
                ['title' => 'پنبه']
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
        Schema::dropIfExists('agricultural_plants');
    }
}
