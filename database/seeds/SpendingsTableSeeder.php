<?php

use Illuminate\Database\Seeder;

class SpendingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Genere et récupere seulement le prix
        factory(App\Spending::class, 30)->create()->each(function($spending){
            // echo $spending->price;


            $price = $spending->price;
            $users = App\User::pluck('id')->shuffle();

            //echo $spending->price;
            if($spending->price > 800){

                $number = rand(2,4);
                $spending->users()->attach(
                    $users->slice(0, $number)->all(),
                    ['price' => round($price/$number, 2)]
                );

            }else{
                $spending->users()->attach(
                    $users->slice(0,1)->all(),
                    ['price' => $spending->price]
                );
            }

        });

    }
}
