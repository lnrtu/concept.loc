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

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_show_admin_dashboard()
    {
        $this->loginAsAdmin();
        $response = $this->get('/admin');
        $response->assertSeeText('Панель управления сайтом');
    }
}
