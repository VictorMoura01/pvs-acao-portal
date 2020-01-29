<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Colaborador;
use Faker\Generator as Faker;

$factory->define(Colaborador::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'area_id' => 2,
        'ano' => 2015,
    ];
});
