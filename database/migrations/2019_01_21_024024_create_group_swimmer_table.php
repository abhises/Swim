<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupSwimmerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_swimmer', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('groups')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('group_swimmer');
    }
}
