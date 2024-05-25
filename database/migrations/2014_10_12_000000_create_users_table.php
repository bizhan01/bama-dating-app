<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastName')->nullable();
            $table->text('bio')->default('بیا باهم معرفی شویم');
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('dob')->nullable();
            $table->string('job')->nullable();
            $table->string('degree')->nullable();
            $table->string('field_of_study')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->string('gender')->nullable();
            $table->string('sexual_desire')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('my_plan')->nullable();
            $table->string('profileImage')->default('user.png');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('userType')->default(2);
            $table->boolean('status')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
