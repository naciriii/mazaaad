<?php

namespace Tests\Feature;

use Tests\TestCase;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;



class RegisterAuthTest extends TestCase
{

	
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRegister()
    {
    	 $this->get('/register')
    	->assertStatus(200)
    			 ->assertSee('Register');
    			 $user = ['name'=>'naciri2',
    			 'email'=>'testing@tt.tt',
    			 'password'=>'123456789',
    			 'password_confirmation' => '123456789'];

    	$response=$this->post('/register',$user);
    	$this->assertDatabaseHas('users',['email'=>$user['email']]);
    	

        $this->assertTrue(true);
    }
}
