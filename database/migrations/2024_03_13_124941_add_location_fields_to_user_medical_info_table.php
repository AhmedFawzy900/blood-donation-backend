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
        Schema::table('user_medical_info', function (Blueprint $table) {
            $table->string('location_latitude')->nullable()->after('note');
            $table->string('location_longitude')->nullable()->after('location_latitude');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_medical_info', function (Blueprint $table) {
            //
        });
    }
};
