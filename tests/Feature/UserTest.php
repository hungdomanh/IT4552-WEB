<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSignup()
    {
        $response = $this->get('/signup');
        $response->assertStatus(200);
        $response->assertSee('Signup');

        $res = $this->json('POST', '/signup', [
            'username' => 'test8', 
            'email'    => 'test8@gmail.com',
            'password' => '1',
            'password_confirm' => '1',
            'fullname' => 'test',
            'purpose'  => 1
            ]);
        $res->assertStatus(302);
        $res->assertRedirect('/');
        $this->followRedirects($res)->assertSee('Home');
    }

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
