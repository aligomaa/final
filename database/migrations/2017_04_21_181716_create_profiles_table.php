<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('work_name');
            $table->text('work_phone');
            $table->time('start_work'); // 24-format not am/pm
            $table->time('end_work'); // 24-format not am/pm $table->
            $table->text('work_address');
            $table->char('myFileSelect');
            $table->text('about_work');
            $table->integer('country_id')->unsigned();
            $table->integer('government_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->integer('street_id')->unsigned();
            $table->integer('specification_id')->unsigned();


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
        Schema::drop('profiles');
    }
}
