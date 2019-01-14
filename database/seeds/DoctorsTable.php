<?php

use Illuminate\Database\Seeder;

class DoctorsTable extends Seeder
{
    
    public function run()
    {
        DB::table('doctors')->insert([
            'admin_id' => 2,
            'identification_card' => 'asdasdas',
            'first_name' => 'fernando',
            'last_name' => 'silva',
            'gender' => 'M',
            'address' => 'Ecuador cerca del centro',

        ]);
        
        // vinculamos al dr fernando con la especialidad otorrino
        DB::table('doctor_specialty')->insert([
            'doctor_id' => 1,
            'specialty_id' => 10,
        ]);
    }
}
