<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function about_route()
    {
        $response = $this->get('/');

        $response->assertSee('login');
    }

    /** @test */
    public function checkInOrder()
    {
        $response = $this->get('/');

        $response->assertSeeInOrder(['Laravel','Documentation']);
        //$response->visit(['login']);

    }

}
