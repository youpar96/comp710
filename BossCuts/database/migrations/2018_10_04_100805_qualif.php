<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Qualif extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualif', function (Blueprint $table) {
            
            $table->increments('id');
            
            $table->integer('idbarber')->unsigned();
            $table->integer('idstyle')->unsigned();
        });

        Schema::table('qualif', function($table) {
            $table->foreign('idbarber')->references('id')->on('barbers');
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
        Schema::dropIfExists('qualif');
    }
}
