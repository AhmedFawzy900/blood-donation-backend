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
        Schema::create('user_personal_info', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('name');
            $table->string('national_Id');
            $table->string('phone_number');
            $table->string('gender');
            $table->string('type');
            $table->string('age');
            $table->string('password');
            $table->string('date');
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
        Schema::dropIfExists('user_personal_info');
    }
};
