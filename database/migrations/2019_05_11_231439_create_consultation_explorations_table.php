<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultationExplorationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultation_explorations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('exploration_id')->unsigned();
            $table->integer('consultation_id')->unsigned();
            $table->string('name',200);
            $table->foreign('exploration_id')->references('id')->on('explorations')
                  ->ondelete('cascade');
            $table->foreign('consultation_id')->references('id')->on('consultations')
                  ->ondelete('cascade');
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
        Schema::dropIfExists('consultation_explorations');
    }
}
