<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobAdvertismentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_advertisments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('department');
            $table->string('designation');
            $table->string('job_type');
            $table->string('req_experience');
            $table->string('age_limit');
            $table->string('qualification');
            $table->string('job_description');
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
        Schema::dropIfExists('job_advertisments');
    }
}
