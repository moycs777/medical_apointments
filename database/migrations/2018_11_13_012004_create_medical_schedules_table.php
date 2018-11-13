<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctor_id')->unsigned();
            $table->string('day',1);
            $table->string('hour_from_1',2)->default('00');
            $table->string('minutes_from_1',2)->default('00');
            $table->string('hour_until_1',2)->default('00');
            $table->string('minutes_until_1',2)->default('00');
            $table->string('hour_from_2',2)->default('00');
            $table->string('minutes_from_2',2)->default('00');
            $table->string('hour_until_2',2)->default('00');
            $table->string('minutes_until_2',2)->default('00');
            $table->boolean('status_1')->default(true);
            $table->boolean('status_2')->default(true);
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
        Schema::dropIfExists('medical_schedules');
    }
}
