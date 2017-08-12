<?php

use Faker\Generator as Faker;
use App\Card;

$factory->define(Card::class, function (Faker $faker) {
    return [
        'name' 		 => $faker->name,
        'bio'		 => $faker->sentence,
        'avatar_url' => 'http://placehold.it'
    ];
});
