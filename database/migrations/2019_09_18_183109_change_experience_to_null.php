<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeExperienceToNull extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('cand_experiences', function (Blueprint $table) {
        $table->string('cand_Totalexp')->nullable();
    });
}

public function down()
{
    Schema::table('cand_experiences', function (Blueprint $table) {
        $table->dropColumn('cand_Totalexp');
    });
}
}
