<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cand_experiences', function (Blueprint $table) {
            $table->bigIncrements('id')->primarykey();
            $table->string('cand_id');
            $table->string('cand_OrgName');
            $table->string('cand_JobTitle');
            $table->date('cand_StartDate');
            $table->date('cand_EndDate');
            $table->string('cand_Totalexp');
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
        Schema::dropIfExists('cand_experiences');
    }
}
