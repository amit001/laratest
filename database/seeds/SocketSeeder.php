<?php

use Illuminate\Database\Seeder;

class SocketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 100)
        ->create()
        ->each(function ($u) {
	        $u->nodes()->save(factory(App\UserNode::class)->make())
	        ->create()
	        ->each(function ($ip) use (&$u) {
	        	$ip->sockets()->saveMany(factory(App\Socket::class, rand(1,8))->make());
	        });
	        
	    });
    }
}
