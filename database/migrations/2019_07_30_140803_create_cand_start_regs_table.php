<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandStartRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cand_start_regs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cand_id');
            $table->string('cand_firstname');
            $table->string('cand_lastname');
            $table->string('cand_cnic');
            $table->string('cand_cv');
            $table->string('cand_occurence');
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
        Schema::dropIfExists('cand_start_regs');
    }
}
