<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSwimmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('swimmers', function (Blueprint $table) {
             $table->increments('id');
             $table->unsignedInteger('group_id');
             $table->string('firstname');
             $table->string('Middlename');
             $table->string('lastname');
             $table->string('nickname');
             $table->string('uniquename');
             $table->integer('dob');
             $table->string('gender');
             $table->string('city_of_birth');
             $table->string('School')->nullable();
             $table->integer('date_of_joined')->nullable();
             $table->string('photo')->nullable();
             $table->string('country')->nullable();
             $table->string('state')->nullable();
             $table->string('city')->nullable();
             $table->string('father_name')->nullable();
             $table->string('mother_name')->nullable();
             $table->integer('height')->nullable();
             $table->integer('weight')->nullable();
             $table->string('rest_hr')->nullable();
             $table->string('max_hr')->nullable();
             $table->string('skin_fold')->nullable();
             $table->integer('distance')->nullable();
             $table->string('stroke')->nullable();
             $table->string('main')->nullable();
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
        Schema::dropIfExists('swimmers');
    }
}
