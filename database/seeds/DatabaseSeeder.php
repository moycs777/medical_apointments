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
        factory(App\User::class, 50)->create()->each(function ($u) {
            //$u->posts()->save(factory(App\Post::class)->make());
        });
        factory(App\Photo::class, 200)->create()->each(function ($u) {
            //$u->posts()->save(factory(App\Post::class)->make());
        });
        factory(App\Category::class, 50)->create()->each(function ($u) {
            //$u->posts()->save(factory(App\Post::class)->make());
        });
        factory(App\Skill::class, 50)->create()->each(function ($u) {
            //$u->posts()->save(factory(App\Post::class)->make());
        });

        $this->call(GeneralSeed::class);
        $this->call(InfoUserSeeder::class);
        $this->call(PhotoUserSeeder::class);
        $this->call(AdminsTableSeeder::class);

    }
}
