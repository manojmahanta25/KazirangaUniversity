<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseSchool extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_school', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_id',20);
            $table->string('school_id',20);
            $table->foreign('course_id')->references('course_code')->on('courses')->onDelete('cascade');
            $table->foreign('school_id')->references('school_code')->on('school')->onDelete('cascade');
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
        Schema::dropIfExists('course_school');
    }
}
