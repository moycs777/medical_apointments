<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 1)->create()->each(function ($u) {
            //$u->posts()->save(factory(App\Post::class)->make());
        });


        $this->call(AdminsTableSeeder::class);

        $this->call(DoctorsTable::class);

        //DB::unprepared(File::get('database/sql/com.sql'));



    }
}
