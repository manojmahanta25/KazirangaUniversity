<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaborationDepartment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaboration_department', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('collaboration_id');
            $table->string('department_id',20);
            $table->foreign('collaboration_id')->references('id')->on('collaborations')->onDelete('cascade');
            $table->foreign('department_id')->references('depart_code')->on('departments')->onDelete('cascade');
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
        Schema::dropIfExists('collaboration_department');
    }
}
