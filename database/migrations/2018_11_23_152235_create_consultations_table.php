<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clinical_patient_id')->unsigned();
            $table->integer('doctor_id')->unsigned();
            $table->timestamp('date_consultation');
            $table->string('reason_consultation',200);
            $table->text('diagnosis');
            $table->text('disease');
            $table->text('exploration');
            $table->string('weight',5);
            $table->string('size',2);
            $table->string('systolic_pressure',5);
            $table->string('diastolic_pressure',5);
            $table->string('status');
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
        Schema::dropIfExists('consultations');

    }
}
