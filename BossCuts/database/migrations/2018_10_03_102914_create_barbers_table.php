<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barbers');
    }
}
