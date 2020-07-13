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
            $table->string('name');
            $table->text('description');
            $table->text('short_description')->nullable(); 
            $table->bigInteger('producer_name')->nullable();
            $table->bigInteger('free_course')->default(0)->nullable();            
            $table->string('auther')->nullable();
            $table->string('duration')->nullable();
            $table->text('attach_doc')->nullable();
            $table->text('promo_video')->nullable();
            $table->text('thumbnail');
            $table->string('views_counter')->default(0);
            $table->float('price', 8, 2);
            $table->float('discount_price', 8, 2)->nullable();            
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('category_id','150')->nullable();
            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->boolean('status')->default(0);
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
