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
        Schema::create('donate_requests', function (Blueprint $table) {
            $table->id();
            $table->string('from_id');
            $table->string('to_id');
            $table->string('status');
            $table->string('distance');
            $table->string('donor_type');
            $table->string('blood_type');
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
        Schema::dropIfExists('_donate_requests');
    }
};
