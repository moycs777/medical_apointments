<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExplorationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('explorations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('specialty_id')->unsigned();
            $table->text('name');
            $table->string('de',2);
            $table->boolean('status')->default(true);
            $table->foreign('specialty_id')->references('id')->on('specialties')
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
        Schema::dropIfExists('explorations');
    }
}
