<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Product;
use App\User;

class BidTest extends TestCase
{
	use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function testAddbid()
    {
    	 $product = Product::whereDate('stop_date','>',date('Y-m-d H:i:s'))->where('is_available',true)->first();
    	
    	$user = User::where('id','!=',$product->user_id)->first();
        if($user == null) {
            $user = new User;
            $user->name ='testingUser';
            $user->email ='test@tes.tes';
            $user->password =bcrypt('123456');
            $user->save();
        }
   
		if($product == null) {
    		return $this->assert(true);
    	}
    	$this->withoutMiddleware(VerifyCsrfToken::class);

    		$response = $this->actingAs($user)->post(route('bids.addBid'), [
    		'price'=>$product->start_price+1,'product_id'=>$product->id
    		]);
    		//assert adding bid is successful
    		$response->assertJson(['status'=>true]);
    			 $this->assertDatabaseHas('bids',
     			['product_id'=>$product->id,'user_id'=>$user->id]);

    			 // assert adding bid is forbidden
    		$response2 = $this->actingAs($user)->post(route('bids.addBid'), [
    		'price'=>$product->start_price-1,'product_id'=>$product->id
    		]);
    		$response2->assertJson(['status'=>false]);

    	
    	

    }
    public function testFinishAuction()
    {
    	$product = Product::whereDate('stop_date','>',date('Y-m-d H:i:s'))->where('is_available',true)->first();
    	if($product == null) {
    		return $this->assert(true);
    	}
    	

    	$this->withoutMiddleware(VerifyCsrfToken::class);

    	$this->post('bids/expire', [
    		'from_owner'=>true,'product_id'=>$product->id
    		]);


    	 $this->assertDatabaseHas('products',
     ['id'=>$product->id,'is_available'=>false]);
    }
}
