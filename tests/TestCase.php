<?php

namespace Tests;

use App\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function loginAsAdmin()
    {
        $user = factory(User::class)->make([
            'is_admin' => '1',
        ]);

        $this->be($user);
    }

    public function loginAsUser()
    {
        $user = factory(User::class)->make([
            'is_admin' => '0',
        ]);
        $this->be($user);
    }
}
