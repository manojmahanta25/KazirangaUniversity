<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('faculty_id',20)->unique()->index();
            $table->string('title',10);
            $table->string('givenName');
            $table->string('familyName');
            $table->string('email');
            $table->string('website')->nullable();
            $table->boolean('visible')->default(false);
            $table->string('status',50);
            $table->string('image')->nullable();
            $table->integer('priority')->default(0);
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
        Schema::dropIfExists('faculties');
    }
}
