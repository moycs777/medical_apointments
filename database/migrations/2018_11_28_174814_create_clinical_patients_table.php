<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinical_patients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->integer('insurance_id')->unsigned()->comment('Codigo del seguro medico');
            $table->string('dni')->unique();
            $table->string('first_name',30)->nullable;
            $table->string('last_name',30);
            $table->string('address')->nullable();
            $table->string('gender',1)->default('M');
            $table->text('personal_history')->nullable;
            $table->text('family_background')->nullable;
            $table->string('bloodtype',2);
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
        Schema::dropIfExists('clinical_patients');
    }
}
