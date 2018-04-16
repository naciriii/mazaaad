<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //

    public function index()
    {
    	$products = Product::all();

    	$data = [
    		'products' => $products
    	];

        return view('products.index')->with($data);

    }

    public function filterProducts(Request $request)
    {
    	$products = Product::all();
    	if($request->has('region')) {
    		$products = $products->where('region_id',$request->region_id);
    	}
    	if($request->has('name')) {
    		$products = $products->where('name','ILIKE','%'.$request->name.'%');
    	}
    	if($request->has('category')) {
    		$products = $products->where('category_id',$request->category);
    	}

    	return response()->json(['products' => $products]);

    }

    public function storeProduct(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required',
    		'start_price' => 'required',
    		'stop_date' => 'required',
    		'category_id' => 'required',
    		'region_id' => 'required',
    		'category_id' => 'required',
    		'pictures' => 'required',
    		'pictures.*'=>'image'

    	]);
    	$product = new Product;
    	$product->name = $request->name;
    	$product->start_price = $request->start_price;
    	$product->stop_date = $request->stop_date;
    	$product->category_id = $request->category_id;
    	$product->region_id = $request->region_id;
    	$product->save();
    	if($request->has('description')) {
    		$product_detail = new ProductDetail;
    		$product_detail->product_id = $product->id;
    		$product_detail->description = $request->description;
    		$product_detail->save();
    	}
    	foreach($request->file('pictures') as $p) {
    		$path = $this->upload($p);
    		$product_picture = new ProductPicture;
    		$product_picture->product_id = $product->id;
    		$product_picture->path = $path;
    		$product_picture->save();

    	}
    }

    public function myProducts()
    {
    	$products = Auth::user()->products;


    }


    public function editProduct($id) 
    {
    	$product = Product::find($id);
    }

    public function updateProduct($id, Request $request)
    {

    }

    public function deleteProduct($id)
    {
    	$product = Product::find($id);
    	ProductDetail::where('product_id',$product->id)->delete();
    	ProductPicture::where('product_id',$product->id)->delete();
    	Bid::where('product_id',$product->id)->delete();
    	$product->delete();
    }

    private function upload($picture) {

    	return $path;

    }

}
