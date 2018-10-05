<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
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
<<<<<<< 271cacc194c00a887a3b9c83e6191f39bfee0f08

    /** @test */
    public function about_route()
    {
        $response = $this->get('/about');

        $response->assertSee('about');
    }

    /** @test */
    public function checkInOrder()
    {
        $response = $this->get('/');

        $response->assertSeeInOrder(['Laravel','Documentation']);
    }
=======
>>>>>>> Test email first commit
}
