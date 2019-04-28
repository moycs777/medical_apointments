<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnClinicalPatientsPhone2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('clinical_patients', function (Blueprint $table) {
            
            $table->string('phone_2',20)->nullable()->after('phone_1');
                       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('clinical_patients', function (Blueprint $table) {
            $table->dropColumn('phone_2');
        });
    }
}
