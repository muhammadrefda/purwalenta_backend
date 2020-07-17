<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_course', function (Blueprint $table) {
            $table->BigInteger('category_id')->unsigned();
            $table->BigInteger('course_id')->unsigned();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('course_id')->references('id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_course');
    }
}
