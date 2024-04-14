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
        Schema::create('hospital_medical_info', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hospital_id');
            $table->string('count_A');
            $table->string('count_B');
            $table->string('count_O');
            $table->string('count_AB');
            $table->string('count_Ap');
            $table->string('count_Bp');
            $table->string('count_Op');
            $table->string('count_ABp');
            $table->string('location_latitude');
            $table->string('location_longitude');
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
        Schema::dropIfExists('hospital_medical_info');
    }
};
