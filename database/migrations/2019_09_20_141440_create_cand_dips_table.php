<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandDipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cand_dips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cand_id');
            $table->string('cand_dipname');
            $table->string('cand_dipmonth');
            $table->string('cand_dipinst');
            $table->string('cand_dipdateofcomp');
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
        Schema::dropIfExists('cand_dips');
    }
}
