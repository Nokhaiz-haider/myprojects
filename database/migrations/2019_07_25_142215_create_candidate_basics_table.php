<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateBasicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_basics', function (Blueprint $table) {
            $table->bigIncrements('id')->primarykey();
            $table->string('cand_id')->unique();
            $table->string('cand_cnic')->unique();
            $table->date('cnic_expDate');
            $table->string('cand_fname');
            $table->string('cand_lname');
            $table->string('cand_father');
            $table->string('cand_mother');
            $table->string('cand_gender');
            $table->string('cand_marital');
            $table->date('cand_dob');
            $table->integer('cand_age');
            $table->string('cand_nationality');
            $table->string('cand_religion');
            $table->string('cand_section');
            $table->string('cand_caste');
            $table->string('cand_domicile');
            $table->string('cand_email');
            $table->string('cand_phoneNo');
            $table->string('cand_mobileNo');
            $table->string('cand_city');
            $table->string('cand_province');
            $table->string('cand_address');
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
        Schema::dropIfExists('candidate_basics');
    }
}
