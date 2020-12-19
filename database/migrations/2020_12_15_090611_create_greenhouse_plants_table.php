<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateGreenhousePlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('greenhouse_plants', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });


        DB::table('greenhouse_plants')->insert(
            [
                ['title' => 'خیار'],
                ['title' => 'گوجه فرنگی'],
                ['title' => 'انواع فلفل'],
                ['title' => 'بادمجان'],
                ['title' => 'توت فرنگی'],
                ['title' => 'آناناس'],
                ['title' => 'قارچ'],
                ['title' => 'زعفران'],
                ['title' => 'گیاهان دارویی'],
                ['title' =>  'هندوانه'],
                ['title' =>  'خربزه'],
                ['title' =>  'طالبی'],
                ['title' =>  'سبزی خوراکی'],
                ['title' =>   'گیاه و گل زینتی'],
                ['title' =>   'گیاه و گل اپارتمانی'],
                ['title' =>   'شاخه گل بریده']
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
        Schema::dropIfExists('greenhouse_plants');
    }
}
