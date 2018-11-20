<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicalPatientsTable extends Migration
{

    public function up()
    {
        Schema::create('clinical_patients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('dni')->inique();
            $table->string('last_name')->nullable();
            $table->string('address')->nullable();
            $table->string('gender',1)->default('M');
            $table->boolean('status')->default(true);  

            $table->timestamps();
        });
    }



    public function down()
    {
        Schema::dropIfExists('clinical_patients');
    }

}
