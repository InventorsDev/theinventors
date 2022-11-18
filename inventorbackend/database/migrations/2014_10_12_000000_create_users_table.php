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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('mobile')->nullable();
            $table->bigInteger('member_type_id')->unsigned()->nullable();
            $table->bigInteger('designation')->unsigned()->nullable();
            $table->bigInteger('track_id')->unsigned()->nullable();
            $table->string('portfolio_link')->nullable();
            $table->string('social_link')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreign('designation')->references('id')->on('designations');
            $table->foreign('member_type_id')->references('id')->on('member_types');
            $table->foreign('track_id')->references('id')->on('tracks');
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
