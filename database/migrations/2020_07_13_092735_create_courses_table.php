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
            $table->id();
            $table->string('title');
            $table->string('description',500);
            $table->float('price');
            $table->string('imageIntroduction');
            $table->string('videoIntroduction');
            $table->string('videoModule');
            $table->tinyInteger('quantity')->unsigned();
            $table->BigInteger('tutorlenta_id')->unsigned();
            $table->timestamps();

            $table->foreign('tutorlenta_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course');
    }
}
