<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DbTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDatabase()
	{
	    // Make call to application...

	    $this->assertDatabaseHas('users', [
	        'name' => 'Emie Lesch'
	    ]);

	    $this->assertDatabaseHas('user_node', [
	        'mac_id' => 'ab:92:5a:87:6f:d5'
	    ]);
	}
}
