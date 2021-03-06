<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionSwimmerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competition_swimmer', function (Blueprint $table) {
            $table->increments('id');
              $table->integer('competition_id')->unsigned();
            $table->foreign('competition_id')->references('id')->on('competitions')->onUpdate('cascade')->onDelete('cascade');
              $table->integer('swimmer_id')->unsigned();
            $table->foreign('swimmer_id')->references('id')->on('swimmers')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('competition_swimmer');
    }
}
