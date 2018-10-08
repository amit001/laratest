<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'usernode_id' => $faker->randomElement(\App\UserNode::pluck('id')->toArray()),
	    'ip_address' => "".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255),
    ];
});
