<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandFuturePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cand_future_plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cand_id');
            $table->text('subj_studied');
            $table->text('good_qual');
            $table->text('weak_points');
            $table->text('job_importance');
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
        Schema::dropIfExists('cand_future_plans');
    }
}
