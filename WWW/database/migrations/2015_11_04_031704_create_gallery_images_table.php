<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_images', function (Blueprint $table) {
            $table->increments('id');

            $table->tinyInteger('gallery_id')->unsigned();
            $table->tinyInteger('gallery_id')->references('id')->on('gallery');

            $table->integer('image_id')->unsigned();
            $table->integer('image_id')->references('id')->on('images'); 

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
        Schema::drop('gallery_images');
    }
}
