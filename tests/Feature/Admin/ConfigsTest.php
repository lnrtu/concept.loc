<?php

namespace Tests\Feature\Admin;

use App\User;
use App\Configs;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ConfigsTest extends TestCase
{
//    use DatabaseTransactions;
    use RefreshDatabase;

    private $configs;

    public function setup()
    {
        parent::setup();
        $this->loginAsAdmin();
        $this->configs = factory(Configs::class)->create();
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_show_configs_page()
    {
        $response = $this->get('/admin/configs');
        $response->assertSeeText('Список общих настроек сайта');
        $response->assertSeeText('Тег Keywords');
    }
}
