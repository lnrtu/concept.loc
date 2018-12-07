<?php

namespace Tests\Feature\Admin;

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeTest extends TestCase
{
    use DatabaseTransactions;

    private $user;

    public function setup()
    {
        parent::setup();
        $this->user = factory(User::class)->make([
            'is_admin' => '1',
        ]);
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_show_admin_dashboard()
    {
        $response = $this->actingAs($this->user)->get('/admin');
        $response->assertSeeText('Панель управления сайтом');
    }
}
