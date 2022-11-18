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
        Schema::create('web_settings', function (Blueprint $table) {
            $table->id();
            $table->longText('logo')->nullable();
            $table->longText('favicon')->nullable();
            $table->longText('about_us')->nullable();
            $table->longText('our_mission')->nullable();
            $table->longText('our_vision')->nullable();
            $table->string('our_phone')->nullable();
            $table->string('our_addr')->nullable();
            $table->string('our_email')->nullable();
            $table->string('our_title')->nullable();
            $table->string('our_name')->nullable();
            $table->string('social_link')->nullable();
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
        Schema::dropIfExists('web_settings');
    }
};
