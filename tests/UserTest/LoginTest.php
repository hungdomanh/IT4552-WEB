<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
        $response->assertSee('Login');

        $res = $this->json('POST', '/login', ['username' => 'test1', 'password' => '1']);
        $res->assertStatus(302);
        $res->assertRedirect('/profile');
        $this->followRedirects($res)->assertSee('Profile');
    }

}
