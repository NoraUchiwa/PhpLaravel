<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 20)->create()->each(function($user){

            $file = file_get_contents('http://lorempicsum.com/futurama/250/250/'. rand(1,9)); // flux
            $link = str_random(12) . '.jpg';

            File::put(
                public_path('images') . '/' . $link,  // dans le dossier public dossier images
                $file  // nom du fichier
            );


            $user->picture()->create([
                'name' => 'Default',
                'avatar' => $link
            ]);

            $started = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-12 22:20:00')->toDateTimeString();
            $ended = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', '2017-07-12 22:20:00')->toDateTimeString();

            // pour calculer la différence en jours entre deux dates :

            $s = \Carbon\Carbon::parse($started);
            $e = \Carbon\Carbon::parse($ended);

            $days = $s->diffInDays($e); // donne le nombre de jour(s)


            $user->part()->create([
                'day' => $days,
                'started' => $started,
                'ended' => $ended,
            ]);
        });
    }


}
