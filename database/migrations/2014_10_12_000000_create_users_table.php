<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30)->nullable();
            $table->string('admin')->default(\App\User::REGULAR_USER);
            $table->string('username',20)->nullable();
            $table->integer('phone_number')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('profile_desc')->nullable();
            $table->string('google_token')->nullable();
            $table->string('status')->nullable();
            $table->string('refresh_token')->nullable();
            $table->string('skill')->nullable();
            $table->string('personality')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('verified')->default(\App\User::UNVERIFIED_USER);
            $table->string('available_date')->nullable();
            $table->string('available_time')->nullable();
            $table->string('note')->nullable();
            $table->string('verification_token')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
