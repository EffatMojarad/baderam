<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->increments('id');
            $table->string('state');
            $table->timestamps();
        });


        DB::table('states')->insert(
            [
                ['state' => 'تهران'],
                ['state' => 'آذربایجان شرقی'],
                ['state' => 'آذربایجان غربی'],
                ['state' => 'اردبیل'],
                ['state' => 'اصفهان'],
                ['state' => 'ایلام'],
                ['state' => 'بوشهر'],
                ['state' => 'چهار محال و بختياری'],
                ['state' => 'خراسان جنوبی'],
                ['state' => 'خراسان رضوی'],
                ['state' => 'خراسان شمالی'],
                ['state' => 'خوزستان'],
                ['state' => 'زنجان'],
                ['state' => 'سمنان'],
                ['state' => 'سيستان و بلوچستان'],
                ['state' => 'فارس'],
                ['state' => 'قزوين'],
                ['state' => 'قم'],
                ['state' => 'کردستان'],
                ['state' => 'کرمان'],
                ['state' => 'کرمانشاه'],
                ['state' => 'کهگيلويه و بوير احمد'],
                ['state' => 'گلستان'],
                ['state' => 'لرستان'],
                ['state' => 'گیلان'],
                ['state' => 'مازندران'],
                ['state' => 'مرکزی'],
                ['state' => 'هرمزگان'],
                ['state' => 'همدان'],
                ['state' => 'يزد'],
                ['state' => 'البرز']
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
        Schema::dropIfExists('states');
    }
}
