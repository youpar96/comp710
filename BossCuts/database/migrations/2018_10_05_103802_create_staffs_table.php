<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('s_fname');
            $table->string('s_sname');
            $table->integer('mon_am_start');
            $table->integer('mon_pm_start');
            $table->integer('mon_am_finish');
            $table->integer('mon_pm_finish');
            $table->integer('tue_am_start');
            $table->integer('tue_pm_start');
            $table->integer('tue_am_finish');
            $table->integer('tue_pm_finish');
            $table->integer('wed_am_start');
            $table->integer('wed_pm_start');
            $table->integer('wed_am_finish');
            $table->integer('wed_pm_finish');
            $table->integer('thu_am_start');
            $table->integer('thu_pm_start');
            $table->integer('thu_am_finish');
            $table->integer('thu_pm_finish');
            $table->integer('fri_am_start');
            $table->integer('fri_pm_start');
            $table->integer('fri_am_finish');
            $table->integer('fri_pm_finish');
            $table->integer('sat_am_start');
            $table->integer('sat_pm_start');
            $table->integer('sat_am_finish');
            $table->integer('sat_pm_finish');
            $table->integer('sun_am_start');
            $table->integer('sun_pm_start');
            $table->integer('sun_am_finish');
            $table->integer('sun_pm_finish');
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
        Schema::dropIfExists('staffs');
    }
}
