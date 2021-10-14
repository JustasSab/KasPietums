<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Recipes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
/*            $table->unsignedBigInteger('category_id');*/
            $table->string('name')->nullable();
            $table->string('slug');
            $table->string('image')->nullable();//will contain url to image
            $table->text('ingredients')->nullable();
            $table->text('description')->nullable();
            $table->text('preparation')->nullable();
            $table->timestamps();
/*            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('recipes');
    }
}
