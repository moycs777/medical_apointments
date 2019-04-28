<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnClinicalPatientsPhone1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('clinical_patients', function (Blueprint $table) {
            
            $table->string('phone_1',20)->nullable()->after('bloodtype');
                       
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
            $table->dropColumn('phone_1');
        });
    }
}
