<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubclassificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subclassifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('classification_id')->unsigned();
            $table->string('name',60);
            $table->foreign('classification_id')->references('id')->on('classifications')
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
        Schema::dropIfExists('subclassifications');
    }
}
