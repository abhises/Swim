<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
             $table->unsignedInteger('role_id')->default(2);
            $table->string('firstname');
            $table->string('Middlename')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->string('name');
            $table->string('password');
            $table->integer('phone_no')->nullable();
            $table->string('photo')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
