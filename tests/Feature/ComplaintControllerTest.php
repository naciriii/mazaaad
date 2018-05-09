<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class ComplaintControllerTest extends TestCase
{
    use WithoutMiddleware;
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStoreComplaint()
    {
    	$user = User::all()->first();
        if($user == null) {
            $user = new User;
            $user->name ='testingUser';
            $user->email ='test@tes.tes';
            $user->password =bcrypt('123456');
            $user->save();
        }
    	$response = $this->actingAs($user)->post('/complaints',['subject_id' => 1,'content'=>'tes tsgt est']);
    	$this->assertDatabaseHas('complaints',['subject'=>1,'content'=>'tes tsgt est','user_id'=>$user->id]);
        
    }
}
