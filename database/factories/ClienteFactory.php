<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'telefone' => '(00) 0000-0000',
        'dataNascimento' => '1990-09-09',
        'endereco' => $faker->streetAddress,
        'bairro' => $faker->streetName,
        'complemento' => $faker->secondaryAddress,
        'cep' => $faker->postcode,
    ];
});
