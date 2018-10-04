<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarbersTable extends Migration
{
    public function up()
    {
        Schema::create('barbers', function (Blueprint $table) {
            
            $table->increments('id');

            $table->string("name", 30);
            $table->string("surname", 30);

            // Mon
            $table->time('mon_am_start')->nullable();
            $table->time('mon_am_finish')->nullable();
            $table->time('mon_pm_start')->nullable();
            $table->time('mon_pm_finish')->nullable();
            // Tue
            $table->time('tue_am_start')->nullable();
            $table->time('tue_am_finish')->nullable();
            $table->time('tue_pm_start')->nullable();
            $table->time('tue_pm_finish')->nullable();
            // Wed
            $table->time('wed_am_start')->nullable();
            $table->time('wed_am_finish')->nullable();
            $table->time('wed_pm_start')->nullable();
            $table->time('wed_pm_finish')->nullable();
            // Thu
            $table->time('thu_am_start')->nullable();
            $table->time('thu_am_finish')->nullable();
            $table->time('thu_pm_start')->nullable();
            $table->time('thu_pm_finish')->nullable();
            // Fri
            $table->time('fri_am_start')->nullable();
            $table->time('fri_am_finish')->nullable();
            $table->time('fri_pm_start')->nullable();
            $table->time('fri_pm_finish')->nullable();
            // Sat
            $table->time('sat_am_start')->nullable();
            $table->time('sat_am_finish')->nullable();
            $table->time('sat_pm_start')->nullable();
            $table->time('sat_pm_finish')->nullable();
            // Sun
            $table->time('sun_am_start')->nullable();
            $table->time('sun_am_finish')->nullable();
            $table->time('sun_pm_start')->nullable();
            $table->time('sun_pm_finish')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('barbers');
    }
}

/*
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarbersTable extends Migration
{
    public function up()
    {
        Schema::create('barbers', function (Blueprint $table) {
            $table->increments('ba_id');
            $table->string('ba_fname');
            $table->string('ba_sname');
            $table->integer('ba_mon_am_start');
            $table->integer('ba_mon_pm_start');
            $table->integer('ba_mon_am_finish');
            $table->integer('ba_mon_pm_finish');
            $table->integer('ba_tue_am_start');
            $table->integer('ba_tue_pm_start');
            $table->integer('ba_tue_am_finish');
            $table->integer('ba_tue_pm_finish');
            $table->integer('ba_wed_am_start');
            $table->integer('ba_wed_pm_start');
            $table->integer('ba_wed_am_finish');
            $table->integer('ba_wed_pm_finish');
            $table->integer('ba_thu_am_start');
            $table->integer('ba_thu_pm_start');
            $table->integer('ba_thu_am_finish');
            $table->integer('ba_thu_pm_finish');
            $table->integer('ba_fri_am_start');
            $table->integer('ba_fri_pm_start');
            $table->integer('ba_fri_am_finish');
            $table->integer('ba_fri_pm_finish');
            $table->integer('ba_sat_am_start');
            $table->integer('ba_sat_pm_start');
            $table->integer('ba_sat_am_finish');
            $table->integer('ba_sat_pm_finish');
            $table->integer('ba_sun_am_start');
            $table->integer('ba_sun_pm_start');
            $table->integer('ba_sun_am_finish');
            $table->integer('ba_sun_pm_finish');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('barbers');
    }
}
*/