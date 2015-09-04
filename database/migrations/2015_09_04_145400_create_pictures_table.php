<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('link');
            $table->string('link_small');
            $table->integer('posts_id')->unsigned();
            $table->timestamps();

            $table->foreign('posts_id')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pictures', function(Blueprint $table){
            $table->dropForeign('pictures_posts_id_foreign');
        });
    }
}
