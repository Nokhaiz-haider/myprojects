<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandFamilyMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cand_family_members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cand_id');
            $table->text('member_name');
            $table->integer('member_age')->nullable();
            $table->string('member_gender')->nullable();
            $table->integer('member_relation')->nullable();
            $table->integer('member_qual')->nullable();
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
        Schema::dropIfExists('cand_family_members');
    }
}
