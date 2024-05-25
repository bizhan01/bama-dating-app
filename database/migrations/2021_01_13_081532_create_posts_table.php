<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     public function up()
        {
            Schema::create('posts', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id');
                $table->text('post_description');
                $table->string('post_img', 255)->nullable();
                $table->tinyInteger('status')->default(1);
                $table->timestamps();

                $table->index('user_id');

                $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            });
        }
    // public function up()
    // {
    //     Schema::create('posts', function (Blueprint $table) {
    //         $table->increments('id');
    //         $table->integer('user_id');
    //         $table->text('post_description');
    //         $table->string('post_img');
    //         $table->integer('status')->default(1);
    //         $table->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
