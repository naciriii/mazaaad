<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
use App\Product;
use Illuminate\Http\UploadedFile;
use DB;

class ProductControllerTest extends TestCase
{
	 use WithoutMiddleware;
	 use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
   


    public function testAddProduct()
    {
    	$user = User::all()->first();
        if($user == null) {
            $user = new User;
            $user->name ='testingUser';
            $user->email ='test@tes.tes';
            $user->password =bcrypt('123456');
            $user->save();
        }
            $name = "testProduct".time();
        $response = $this->actingAs($user)
        ->post('/products/store',['name' => $name,'start_price'=>10,
        	'stop_date'=>'2018-10-10',
        	'category_id' => 1,
        	'region_id' => 1,
        	'user_id' => $user->id,
        	'main_pic' =>  UploadedFile::fake()->image('avatar.jpg'),
        	'pictures'=>[ 
        	UploadedFile::fake()->image('avatar1.jpg'),
        	 UploadedFile::fake()->image('avatar2.jpg'),
        	 UploadedFile::fake()->image('avatar3.jpg')]
        	 ]);
     $this->assertDatabaseHas('products',
     ['name'=>$name,'user_id'=>$user->id]);
     $this->assertTrue($user->products->where('name',$name)->first()!=null);
    }



    public function testShowProduct() {
    	$product = Product::first();
        
    	if($product != null) {
    		$response = $this->get('products/'.$product->id);
    		$response->assertStatus(200);
    		$response->assertViewHas('product');
    	}

    }
    public function testDeleteProduct() {
        $product = Product::first();
       
      

        
        if($product != null) {
            $response = $this->actingAs($product->owner)
                             ->get('products/delete/'.$product->id);


          $this->assertDatabaseMissing('products', 
            ['id'=>$product->id]);
        $this->assertDatabaseMissing('product_details',
         ['product_id'=>$product->id]);
        $this->assertDatabaseMissing('product_pictures',
         ['product_id'=>$product->id]);
         $this->assertDatabaseMissing('bids',
          ['product_id'=>$product->id]);
        }

    }
    public function testIndex() {
    	
 
    		$response = $this->get('products/');
    		$response->assertStatus(200);
    		$response->assertViewHas('products');
  
    

    }
    public function testSearchProducts() 
    {
      $response = $this->post(route('products.search'), [
        'name' => null,
        'category' => null,
        'region' => null,

        'price_min' => 50,
          'price_max' => null
        ]);
       return true;
       

    }
}
