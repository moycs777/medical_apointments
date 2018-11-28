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
            $table->integer('clinical_patient_id')->unsigned()->comment('paciente');
            $table->integer('doctor_id')->unsigned()->comment('doctor');
            $table->timestamp('date_consultation');
            $table->string('reason_consultation',200)->comment('fecha de la consulta');
            $table->text('disease')->comment('enfermedad');
            $table->text('exploration')->comment('exploracion');
            $table->string('weight',5)->comment('peso');
            $table->string('size',2)->comment('talla');
            $table->string('systolic_pressure',5)->comment('presion sistoloica');
            $table->string('diastolic_pressure',5)->comment('presion diastolica');
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
