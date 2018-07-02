<?php

namespace Tests\Feature;

use Tests\TestCase;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
use Auth;


class RegisterAuthEditTest extends TestCase
{
     use DatabaseTransactions;
	
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
    	$user = [
                 'name'=>'Naciri1938',
    			 'email'=>'testing@testing.testing',
    			 'password'=>'123456789',
    			 'password_confirmation' => '123456789',
                 ];
        $this->withoutMiddleware(VerifyCsrfToken::class);
    	$response = $this->post('/register',$user);
    	$this->assertDatabaseHas('users',['email' => $user['email']]);
    }

    public function testLogin()
    {
        $this->withoutMiddleware(VerifyCsrfToken::class);
        $user = User::where('email','test@tes.tes')->first();
        if($user == null) {
            $user = new User;
            $user->name ='testingUser';
            $user->email ='test@tes.tes';
            $user->password =bcrypt('123456');
            $user->save();
        }
        $credentials = [
        'email'=>$user->email,
        'password'=>'123456'
        ];

       $response = $this->post('/login', $credentials);
     
       $this->assertTrue(Auth::check());

    }
    public function testUpdateDetails()
    {

     $this->withoutMiddleware(VerifyCsrfToken::class);
     $user = User::where('email','test@tes.tes')->first();
        if($user == null) {
            $user = new User;
            $user->name ='testingUser';
            $user->email ='test@tes.tes';
            $user->password =bcrypt('123456');
            $user->save();
        }
        $data = [
        'name' => 'name',
        'value' => 'nacer'
        ];

        $this->actingAs($user)
            ->post('profile/update',$data);
        $updated_user = User::find($user->id);
        
        $this->assertTrue($updated_user->name == 'nacer');    

       

    }
     
}
