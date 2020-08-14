<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PerfilVendedor;
use Faker\Generator as Faker;

$factory->define(PerfilVendedor::class, function (Faker $faker) {
    return [
        'descripcion' => 'Vendedor',
        'foto' => 'imagen.jpg',
        'cities_id' => 12688,
        'estado_id' => 1,
        'created_at' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = 'America/Bogota'),
    ];
});
