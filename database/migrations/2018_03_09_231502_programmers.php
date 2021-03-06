<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Programmers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('networks' , function($myTable)
{
    $myTable->increments('id');
    $myTable->string('name');
    $myTable->string('lastname',30);
    $myTable->string('description',500);
    $myTable->date('created');
    $myTable->string('fullname');
    $myTable->timestamps();
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('networks');
    }
}
