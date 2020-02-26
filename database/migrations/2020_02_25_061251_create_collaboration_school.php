<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaborationSchool extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaboration_school', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('collaboration_id');
            $table->string('school_id',20);
            $table->foreign('collaboration_id')->references('id')->on('collaborations')->onDelete('cascade');
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
        Schema::dropIfExists('collaboration_school');
    }
}
