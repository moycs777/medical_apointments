<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clinical_patient_id')->unsigned();
            $table->integer('doctor_id')->unsigned();
            $table->timestamp('appointment_date');
            $table->string('reason_consultation',200);
            $table->string('status',1)->default('0');
            $table->foreign('clinical_patient_id')->references('id')->on('clinical_patients')
                ->ondelete('cascade')
                ->onupdate('cascade'); 
            $table->foreign('doctor_id')->references('id')->on('doctors')
                ->ondelete('cascade')
                ->onupdate('cascade'); 
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
        Schema::dropIfExists('appointments');
    }
}
