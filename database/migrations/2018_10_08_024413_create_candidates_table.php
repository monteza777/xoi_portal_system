<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('email_address')->nullable();
            $table->string('home_address')->nullable();
            $table->integer('age');
            $table->string('contact_number')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('qualification')->nullable();
            $table->string('education_summary')->nullable();
            $table->string('birthday')->nullable();
            $table->string('source')->nullable();
            $table->integer('work_exp')->nullable();
            $table->string('skill_set')->nullable();
            $table->binary('has_images')->nullable();
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
        Schema::dropIfExists('candidates');
    }
}
