<?php

use Faker\Generator as Faker;

$factory->define(App\Spending::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'description'=>$faker->paragraph(rand(1,3)),
        'price' => $faker->randomFloat(2,2,2000),
        'status'=>$faker->randomElement(array("account","paid"))
    ];
});
