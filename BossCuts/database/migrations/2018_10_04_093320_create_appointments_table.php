<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('idbarber')->unsigned();
            $table->integer('iduser')->unsigned()->nullable();
            $table->integer('idstyle')->unsigned();
            $table->dateTime('appointmentstart');
            $table->dateTime('appointmentfinish');

            // To use when costumer wants to make an appointment without login
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('pref_reminder_meth');

            $table->timestamps();
        });

        Schema::table('appointments', function($table) {
            $table->foreign('idbarber')->references('id')->on('barbers');
            $table->foreign('iduser')->references('id')->on('users');
            $table->foreign('idstyle')->references('id')->on('styles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
