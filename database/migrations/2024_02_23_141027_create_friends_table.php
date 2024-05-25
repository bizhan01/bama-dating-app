<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     public function up()
      {
          Schema::create('friends', function (Blueprint $table) {
              $table->id();
              $table->unsignedBigInteger('user_id');
              $table->unsignedBigInteger('friend_id');
              $table->boolean('status')->default(false);
              $table->boolean('favorite')->default(false);
              $table->timestamps();

              $table->index('user_id');
              $table->index('friend_id');

              $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

              $table->foreign('friend_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
          });
      }
    // public function up()
    // {
    //     Schema::create('friends', function (Blueprint $table) {
    //         $table->id();
    //         $table->integer('user_id');
    //         $table->integer('friend_id');
    //         $table->integer('status')->default(0);
    //         $table->integer('favorite')->default(0);
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
        Schema::dropIfExists('friends');
    }
};
