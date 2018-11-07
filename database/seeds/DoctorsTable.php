<?php

use Illuminate\Database\Seeder;

class DoctorsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
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
    }
}
