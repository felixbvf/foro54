<?php

namespace Tests\Unit;

use Tests\TestCase;
use Foro\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
        $user = factory(User::class)->create([
            'name' => 'Felix Balderrama',
        ]);

        $this->actingAs($user,'api')->visit('api/user')->see('Felix Balderrama');
    }
}
