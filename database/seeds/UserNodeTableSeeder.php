<?php

use Illuminate\Database\Seeder;

class UserNodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        factory(App\User::class, 100)->create()->each(function ($u) {
	        $u->nodes()->save(factory(App\UserNode::class)->make());
	    });

        
    }
}
