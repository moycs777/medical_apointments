<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropcolumnExplorationIdConsultations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
       
        Schema::table('consultations', function(Blueprint $table) {
            $table->dropForeign(['exploration_id']); 
            $table->dropColumn('exploration_id');
            
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consultations', function($table) {
             $table->integer('exploration_id');
        });
    }
}
