<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sakes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->index();
            $table->unsignedBigInteger('sake_category_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->integer('sake_percent')->nullable();
            $table->string('contry_name')->nullable();
            $table->string('area_name')->nullable();
            $table->string('ingredient_name')->nullable();
            $table->string('how_to_drink')->nullable();
            $table->integer('bottle_price')->nullable();
            $table->integer('can_price')->nullable();
            $table->integer('grass_price')->nullable();
            $table->text('sales_link')->nullable();

            $table->foreign('sake_category_id')->references('id')->on('sake_categories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('sakes');
    }
}
