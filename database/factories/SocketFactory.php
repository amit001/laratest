<?php

use Faker\Generator as Faker;

$factory->define(App\Socket::class, function (Faker $faker) {
    return [
        'node_id' => $faker->randomElement(\App\UserNode::pluck('id')->toArray()),
	    'ip_address' => "".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255),
	    'port' => mt_rand(1,65535),
    ];
});
