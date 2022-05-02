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
            $table->string('name')->nullable();
            $table->string('role_id')->nullable();
            $table->string('mobile')->unique();
            $table->string('otp')->nullable();
            $table->string('email')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('user_type')->nullable();
            $table->string('thumbnail')->nullable();
            $table->boolean('active')->default(True);
            $table->boolean('basic_details')->default(False);
            $table->string('total_coin_amount')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('device_id')->nullable();
            $table->string('address')->nullable();
            $table->unsignedInteger('class_id')->nullable();
            $table->unsignedInteger('state_id')->nullable();
            $table->unsignedInteger('city_id')->nullable();
            $table->text('social_media_link')->nullable(); 
            $table->string('deafult_language')->nullable(); 
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
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
}
