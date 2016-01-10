<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('articlescomment', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('articles_id')->unsigned();
        //     $table->string('articles_title');
        //     $table->string('username');
        //     $table->string('comment');

        //     $table->foreign('username')->references('name')->on('users');
        //     $table->foreign('articles_id')->references('id')->on('articles');
        //     $table->foreign('articles_title')->references('title')->on('articles');

        //     $table->timestamps();
        // });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::drop('articlescomment');
    }
}