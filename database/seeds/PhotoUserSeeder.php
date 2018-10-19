<?php

use Illuminate\Database\Seeder;

class PhotoUserSeeder extends Seeder
{

    public function run()
    {
        for ($i=0; $i < 49; $i++) {
            $inicio = $i + 1;
            $fin = $inicio + 2;
            $photoStart = rand($inicio, $fin);
            $photoEnd = $photoStart + 3;
            for ($x=$photoStart; $x < $photoEnd; $x++) {
                DB::table('photo_user')->insert([
                    'photo_id' => $x + 1,
                    'user_id'=> $i + 1,
                ]);
            }

        }



    }


}
