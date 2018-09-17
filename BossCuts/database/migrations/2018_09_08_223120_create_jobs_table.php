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
            $table->string('j_fname', 30);
            $table->string('j_sname', 30);
            $table->string('j_prefname', 30);
            $table->string('j_email', 200);
            $table->string('j_phone', 20);
            $table->enum('j_pref_cont_meth', ['txt','phone','email']);
            $table->string('j_cover_letter', 1000);
            $table->string('j_cvpath', 200);
            $table->date('j_avail_date');
            $table->boolean('j_fulltime')->default(false);
            $table->boolean('j_parttime')->default(false);
            $table->boolean('j_casual')->default(false);
            $table->boolean('j_weekdays')->default(false);
            $table->boolean('j_saturdays')->default(false);
            $table->boolean('j_sundays')->default(false);
            $table->enum('j_workinNZ', ['citPR', 'visa', 'noVisa']);
            $table->string('j_work_visa_path', 200);
            $table->boolean('j_issues_movement');
            $table->boolean('j_issues_skin');
            $table->boolean('j_issues_RSI');
            $table->string('j_issues_notes', 1000);
            $table->boolean('j_declaration');
            $table->binary('j_signature');
            $table->enum('j_status', ['new', 'read', 'contact', 'hold', 'reject']);
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
