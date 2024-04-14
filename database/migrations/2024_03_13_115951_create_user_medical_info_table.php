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
        Schema::create('user_medical_info', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('surgery_last_3_months');
            $table->string('visted_dentist_last_3_months');
            $table->string('chronic_disease');
            $table->string('last_donate_time');
            $table->string('blood_type');
            $table->string('legal_to_donate');
            $table->string('note');
            $table->string('date');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('user_personal_info')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_medical_info');
    }
};
