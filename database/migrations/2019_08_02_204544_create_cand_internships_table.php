<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandInternshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cand_internships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cand_id');
            $table->string('inst_name',250);
            $table->string('degree_prog')->nullable();
            $table->string('degree_session')->nullable();
            $table->string('intern_duration')->nullable();
            $table->string('fields_interest')->nullable();
            $table->string('fyp_project')->nullable();
            $table->string('fyp_promo')->nullable();
            $table->string('fyp_help')->nullable();
            $table->string('verify_letter')->nullable();
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
        Schema::dropIfExists('cand_internships');
    }
}
