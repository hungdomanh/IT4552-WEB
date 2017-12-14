<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class SignupTest extends TestCase
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
            'username' => 'test61', 
            'email'    => 'test61@gmail.com',
            'password' => '1',
            'password_confirm' => '1',
            'fullname' => 'test',
            'purpose'  => 1
            ]);
        $res->assertStatus(302);
        $res->assertRedirect('/');
        $this->followRedirects($res)->assertSee('Home');
    }

}
