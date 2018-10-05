<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UuidTraitTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function users_have_a_uuid()
    {
        $user = factory(User::class)->create();

        $this->assertTrue(isset($user->uuid));
    }
}