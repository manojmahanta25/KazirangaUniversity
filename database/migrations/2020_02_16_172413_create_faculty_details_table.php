<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('faculty_id',20)->unique()->index();
            $table->foreign('faculty_id')->references('faculty_id')->on('faculties')->onDelete('cascade');
            $table->text('qualification')->nullable();
            $table->text('experience')->nullable();
            $table->text('works')->nullable();
            $table->text('awards')->nullable();
            $table->text('publications')->nullable();
            $table->text('addetails')->nullable();
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
        Schema::dropIfExists('faculty_details');
    }
}
