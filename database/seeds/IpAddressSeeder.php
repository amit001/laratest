<?php

use Illuminate\Database\Seeder;

class IpAddressSeeder extends Seeder
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
	        ->each(function ($ip){
	        	$ip->ipAddress()->save(factory(App\IpAddress::class, rand(1,8))->make());
	        });
	        
	    });
    }
}
