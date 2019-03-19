<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions', function (Blueprint $table) {
            $table->increments('id');
            //$table->unsignedInteger('swimmer_id');
            $table->unsignedInteger('game_id');
            $table->integer('freestyle_50');
            $table->integer('freestyle_100');
            $table->integer('freestyle_200');
            $table->integer('freestyle_400');
            $table->integer('freestyle_800');
            $table->integer('freestyle_1500');
            $table->integer('breaststroke_50');
            $table->integer('breaststroke_100');
            $table->integer('breaststroke_200');
            $table->integer('butterfly_50');
            $table->integer('butterfly_100');
            $table->integer('butterfly_200');
            $table->integer('backstroker_50');
            $table->integer('backstroker_100');
            $table->integer('backstroker_200');
            $table->integer('IndMedley_200');
            $table->integer('IndMedley_400');
            $table->timestamps();
             $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competitions');
    }
}
