<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\SoccerTeam::class, function(Faker $faker){
    return [
        'name' => $faker->streetName,
    ];
});