<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LoginApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testlogin()
    {
        // $response = $this->get('/');

        // $response->assertStatus(200);
        // $user = User::where('status','=','1')->first();
        // $email = 'esther20@example.com';
        // $password = bcrypt('password');
        // $response = $this->json('POST','http://127.0.0.1:8000/api/v1/login',[
        //     'email'=> 'esther20@example.com',
        //     'password'=>bcrypt('password'),
        //     'updated_at' => '2022-10-17 20:27:11'
        // ]);
        // $response->assertStatus(200);

        $response = $this->postJson(route('login'),[
            'email' => 'esther20@example.com',
            'password'=> 'password',
            'updated_at' => '2022-10-17 20:27:11'
        ])->assertOk()
        // ->json()
        ;

        $this->assertArrayHasKey('token', $response->json());

    }
}
