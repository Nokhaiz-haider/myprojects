<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cand_education', function (Blueprint $table) {
            $table->bigIncrements('id')->primarykey();
            $table->string('cand_id');
            $table->string('cand_DegTitle');
            $table->string('cand_CompYear');
            $table->string('cand_Institue');
            $table->string('cand_Obtmcgpa');
            $table->string('cand_Totmcgpa');
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
        Schema::dropIfExists('cand_education');
    }
}
