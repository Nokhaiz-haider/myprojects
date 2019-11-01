<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandLifeStylesAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('life_styles_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cand_id');
            $table->string('lifeqs_description_id');
            $table->string('lifeqs_description_answer');         
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
        Schema::dropIfExists('cand_life_styles_answers');
    }
}
