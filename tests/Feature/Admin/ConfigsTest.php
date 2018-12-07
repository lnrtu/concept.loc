<?php

namespace Tests\Feature\Admin;

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ConfigsTest extends TestCase
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
    public function test_show_configs_page()
    {
        $response = $this->actingAs($this->user)->get('/admin/configs');
        $response->assertSeeText('Список общих настроек сайта');
    }
}
