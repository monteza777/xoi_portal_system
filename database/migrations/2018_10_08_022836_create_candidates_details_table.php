<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('candidate_id');
            $table->string('company_name');
            $table->string('designation');
            $table->string('date_from');
            $table->string('date_to');
            $table->string('contact_number');
            $table->string('address');
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
        Schema::dropIfExists('candidates_details');
    }
}
