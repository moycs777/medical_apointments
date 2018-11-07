<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeRecipePrescriptionToPathologies extends Migration
{

    public function up()
    {
        Schema::table('pathologies',function (Blueprint $table) {
            $table->text('recipe');
            $table->text('prescription');
        });
    }


    public function down()
    {
        //
    }
}
