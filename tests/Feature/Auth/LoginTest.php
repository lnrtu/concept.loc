<?php

namespace Tests\Feature\Auth;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
//    use DatabaseTransactions;
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_user_can_redirect_to_login_form()
    {
        $response = $this->get('/admin');
        $response->assertRedirect('/login');


    }

    public function test_user_can_login_with_correct_credentials()
    {
        $user = factory(User::class)->create([
            'password' => bcrypt($password = '123456'),
            'is_admin' => 0
        ]);
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => $password,
        ]);
        $response->assertRedirect('/admin');
        $this->assertAuthenticatedAs($user);
    }

    public function test_user_redirect_to_home__when_not_authenticated_as_admin()
    {
        $this->loginAsUser();
        $response = $this->get('/admin');
        $response->assertRedirect('/');
    }

    public function test_user_can_view_a_admin_form_when_authenticated_as_admin()
    {
        $this->loginAsAdmin();
        $response = $this->get('/admin');
        $response->assertSeeText('Панель управления сайтом');
    }


}
