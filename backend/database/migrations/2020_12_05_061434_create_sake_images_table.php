<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSakeImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sake_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sake_id');
            $table->unsignedBigInteger('sake_caption_id');
            $table->text('image');
            $table->timestamps();

            $table->foreign('sake_id')->references('id')->on('sakes')->onDelete('cascade');
            $table->foreign('sake_caption_id')->references('id')->on('sake_captions')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sake_images');
    }
}
