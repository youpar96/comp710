<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('j_id');
            $table->string('j_fname');
            $table->string('j_sname');
            $table->string('j_prefname');
            $table->string('j_email');
            $table->string('j_phone');
            $table->enum('j_pref_cont_meth', ['txt','phone','email']);
            $table->string('j_how_heard');
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
        Schema::dropIfExists('jobs');
    }
}
