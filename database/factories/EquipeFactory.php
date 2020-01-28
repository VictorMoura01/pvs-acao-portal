<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Equipe;
use Faker\Generator as Faker;

$factory->define(Equipe::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'disciplina' => 'Português',
        'ano' => 2016,
    ];
});
