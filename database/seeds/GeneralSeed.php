<?php

use Illuminate\Database\Seeder;

class GeneralSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 2; $i++) {
            DB::table('infos')->insert([
                'user_id'=> $i + 1,
                'membership' => "premium",
                'cover' => 'https://lorempixel.com/213/160/?60232'
            ]);
        }

        for ($i=15; $i < 35; $i++) {
            DB::table('infos')->insert([
                'user_id'=> $i + 1,
                'membership' => "silver",
                'cover' => 'https://lorempixel.com/213/160/?60232'
            ]);
        }

        for ($i=40; $i < 48; $i++) {
            DB::table('infos')->insert([
                'user_id'=> $i + 1,
                'membership' => "bronce",
                'cover' => 'https://lorempixel.com/213/160/?60232'
            ]);
        }
    }
}
