<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreInterviewAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_interview_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cand_id');
            $table->string('qs_id');
            $table->string('qs_answer');
            $table->string('qs_comments');
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
        Schema::dropIfExists('pre_interview_answers');
    }
}
