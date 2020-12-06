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
            $table->bigIncrements('id');
            $table->string('name')->index();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('gender')->unsigned()->comment('性別 : 1 : 男性 2 : 女性')->nullable();
            $table->string('favorite_sake_name')->nullable();
            $table->text('user_self_introduction')->nullable();
            $table->text('image')->nullable();
            $table->unsignedBigInteger('sake_category_id')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('sake_category_id')->references('id')->on('sake_categories')->onDelete('cascade');
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
