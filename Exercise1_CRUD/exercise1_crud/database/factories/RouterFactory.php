<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Router;
use Faker\Generator as Faker;
use Faker\Provider\Internet;
use Faker\Provider\Base;
use Faker\Provider\Lorem;

$factory->define(Router::class, function (Faker $faker) {
    return [
        'sap_id' => $faker->numerify('##################'),
        'hostname' => $faker->domainName('hostname'),
        'loopback' => $faker->localIpv4('loopback'),
        'mac_address' => $faker->macAddress('mac_address'),
        'type' => $faker->randomElement(['AG1','CSS'])
    ];
});
