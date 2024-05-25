<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
      {
          Schema::create('ads', function (Blueprint $table) {
              $table->id();
              $table->unsignedBigInteger('user_id');
              $table->string('ads_title', 255);
              $table->text('ads_description');
              $table->string('ads_img', 255);
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
    //     Schema::create('ads', function (Blueprint $table) {
    //         $table->increments('id');
    //         $table->integer('user_id');
    //         $table->string('ads_title');
    //         $table->text('ads_description');
    //         $table->string('ads_img');
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
        Schema::dropIfExists('advertisements');
    }
}
