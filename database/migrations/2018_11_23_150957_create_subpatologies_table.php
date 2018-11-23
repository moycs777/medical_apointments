<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubpatologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subpatologies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pathology_id')->unsigned();
            $table->string('name',60);
            $table->string('recipe',1200);
            $table->string('prescription',1200);
            $table->boolean('status')->default(true);
            $table->foreign('pathology_id')->references('id')->on('pathologies')
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
        Schema::dropIfExists('subpatologies');
    }
}
