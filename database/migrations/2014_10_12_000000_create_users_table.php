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
//        User
//name
//email
//password
//nic
//street_address
//city
//state
//country
//exerience (trainer poin of view)
//image
//phone
//lat
//lng
//date_of_birth
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('role_id')->default(3)->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('cnic')->nullable();
            $table->string('address')->nullable();
            $table->integer('experience')->nullable();
            $table->string('image')->nullable();
            $table->string('country')->nullable();
            $table->integer('phone')->nullable();
            $table->integer('date_of_birth')->nullable();
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
