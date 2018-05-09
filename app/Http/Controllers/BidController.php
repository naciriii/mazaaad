<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bid;
use App\Product;

class BidController extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function onExpire(Request $request)
    {
    	$this->validate($request, [
    		'product_id' => 'required'
    		]);
    	$product = Product::find($request->product_id);
    	$bid = Bid::where('product_id',$request->product_id)
    				->orderBy('price','desc')
    				->first();
    	$bid->is_winning = true;
    	$bid->save();
    	$product->is_available = false;
    	$product->save();
    	//notify users


    	return response()->json(['status' => true]);



    }

    public function addBid(Request $request)
    {
    	$this->validate($request,[
    		'product_id' => 'required',
    		'price' => 'required']);
    	$user_id = Auth::user()->id;

    	$bid = Bid::where('product_id', $request->product_id)
    				  ->where('user_id', $user_id)
    				  ->first();
    				  	$max = Bid::maxBid($request->product_id)->price;
                        if($max == null) {
                            $max = Product::find($request->product_id)->start_price;
                        }
    	if($bid != null) {
    	
    		if ($request->price > $max) {
    			$bid->price = $request->price;
    			$bid->save();

    		}else {
    			//disallow 
                 return response()->json(['status' => false]);

    		}


    	} else {
            if($request->price > $max) {
    		$bid = new Bid;
    		$bid->user_id = $user_id;
            $bid->price = $request->price;
            $bid->product_id = $request->product_id;
            $bid->save();
        } else {
            //disallow
             return response()->json(['status' => false]);
        }

    	}	
        return response()->json(['status' => true]);		  
    }

}
