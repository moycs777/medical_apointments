<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id')->nullable();
            $table->string('identification_card',10);
            $table->string('first_name',30);
            $table->string('last_name',30);
            $table->string('gender',1)->default('F');
            $table->string('address',100);
            $table->string('home_phone',12)->nullable();
            $table->string('work_phone',12)->nullable();
            $table->string('mobile_1',20)->nullable();
            $table->string('mobile_2',20)->nullable();
            $table->string('email',60)->unique()->nullable();
            $table->string('beeper',15)->nullable();
            $table->boolean('status')->default(true);  
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
        Schema::dropIfExists('doctors');
    }
}
