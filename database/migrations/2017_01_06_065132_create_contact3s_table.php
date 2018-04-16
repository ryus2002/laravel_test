<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContact3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact3s', function (Blueprint $table) {
            $table->increments('id');

            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('message');

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
        Schema::drop('contact3s');
    }
}
