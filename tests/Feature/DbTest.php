<?php

namespace Tests\Feature;

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
    public function testUserTable()
    {
        $this->assertTrue(\Schema::hasTable('users'));
        $this->assertDatabaseHas('users',[
            'is_admin' => 1,
        ]);
    }
}
