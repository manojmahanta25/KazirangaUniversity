<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_code',20);
            $table->string('course_name');
            $table->string('type');
            $table->string('campus_recruitment');
            $table->string('skill_level');
            $table->string('language');
            $table->string('batch_size');
            $table->string('internship');
            $table->string('duration');
            $table->string('projects');
            $table->string('mode');
            $table->string('description')->nullable();
            $table->string('eligibility')->nullable();
            $table->string('syllabus')->nullable();
            $table->string('meta_tag')->nullable();
            $table->string('meta_des')->nullable();
            $table->string('image')->nullable();
            $table->bigInteger('fee_inr')->default(0);
            $table->bigInteger('fee_usd')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('courses');
    }
}
