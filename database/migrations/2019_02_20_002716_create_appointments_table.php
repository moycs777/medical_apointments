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
           $table->integer('clinical_patient_id')->unsigned()->comment('Id del paciente');
           $table->integer('doctor_id')->unsigned()->comment('Id del Doctor');
           $table->integer('doctor_specialty_id')->unsigned()->comment('Id especialidad del doctor');
           $table->integer('insurance_id')->unsigned()->comment('Id del seguro');
           $table->date('appointment_date')->conment('Fecha de la cita o consulta');
           $table->string('reason_consultation',200)->conment('Motivo de la consulta');
           $table->enum('status', ['pendiente', 'confirmado','en consulta','atendido','anulado'])
                          ->default('pendiente');
           $table->foreign('clinical_patient_id')->references('id')->on('clinical_patients')
                ->ondelete('cascade')
                ->onupdate('cascade'); 

           $table->foreign('doctor_id')->references('id')->on('doctors')
                ->ondelete('cascade')
                ->onupdate('cascade');

           $table->foreign('doctor_specialty_id')->references('id')->on('doctor_specialty')
                ->ondelete('cascade')
                ->onupdate('cascade'); 

           $table->foreign('insurance_id')->references('id')->on('insurances')
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
