<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'moises',
            'email' => 'moycs777@gmail.com',
            'password'=> bcrypt('12345678'),
        ]);
        DB::table('roles')->insert([
            'name' => 'doctor',
            
        ]);
        DB::table('roles')->insert([
            'name' => 'secretary',
            
        ]);
        DB::table('admin_role')->insert([
            'role_id' => 1,
            'admin_id' => 1,
            
        ]);
    }
}
