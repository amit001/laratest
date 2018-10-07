<?php

use Faker\Generator as Faker;

$factory->define(App\UserNode::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomElement(\App\User::pluck('id')->toArray()),
	    'mac_id' => implode(':', str_split(substr(md5(mt_rand()), 0, 12), 2)),
    ];
});
