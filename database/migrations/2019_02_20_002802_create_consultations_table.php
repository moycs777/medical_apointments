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
            $table->integer('appointment_id')->unsigned()->comment('Numero de la cita');
            $table->integer('exploration_id')->unsigned()->comment('Codigo de la exploracion');
            $table->integer('subpatology_id')->unsigned()->comment('Codigo de la subpatologia');
            $table->timestamp('date_consultation');
            $table->string('reason_consultation',200)->comment('fecha de la consulta');
            $table->text('disease')->comment('enfermedad');
            $table->text('diagnosis')->comment('Diagnostico');
            $table->string('weight',10)->comment('peso');
            $table->string('size',10)->comment('talla');
            $table->string('systolic_pressure',10)->comment('presion sistoloica');
            $table->string('diastolic_pressure',10)->comment('presion diastolica');
            $table->string('status');
            $table->foreign('appointment_id')->references('id')->on('appointments')
                  ->ondelete('cascade')
                  ->onupdate('cascade');  
            $table->foreign('exploration_id')->references('id')->on('explorations')
                  ->ondelete('cascade')
                  ->onupdate('cascade'); 
            $table->foreign('subpatology_id')->references('id')->on('subpatologies')
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
