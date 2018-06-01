<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile; 
use App\Product;
use App\ProductDetail;
use App\ProductPicture;
use App\Picture;
use App\Region;
use Spatie\Dropbox\Client;
use Spatie\FlysystemDropbox\DropboxAdapter;
use Auth;

class ProductController extends Controller
{
    //
    public function __construct()
    {
        Parent::__construct();
        $this->middleware('auth',['except'=>['index','getByCategory',
            'show',
            'filterProducts',
            ]]);
    }
   

    public function index()
    {
    	$products = Product::all();
        $regions = Region::all();

    	$data = [
    		'products' => $products,
            'regions' => $regions
    	];

        return view('products.index')->with($data);

    }

    public function getByCategory($category_id)
    {}

    public function show($id){
        $product = Product::find($id);

        $data = [
        'product' => $product];
        ;

        return view('products.details')->with($data);

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

    public function addProduct() 
    {
       
        $regions = Region::all();

        $data = ['regions' => $regions
    ];
        return view('products.add')->with($data);

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
            'main_pic'=>'required|image',
    		'pictures' => 'required',
    		'pictures.*'=>'image'

    	]);

    	$product = new Product;
    	$product->name = $request->name;
    	$product->start_price = $request->start_price;
    	$product->stop_date = $request->stop_date;
    	$product->category_id = $request->category_id;
    	$product->region_id = $request->region_id;
        $product->user_id = Auth::user()->id;
    	$product->save();
    	if($request->has('description')) {
    		$product_detail = new ProductDetail;
    		$product_detail->product_id = $product->id;
    		$product_detail->description = $request->description;
    		$product_detail->save();
    	}
        $main_pic_path = $this->upload($request->file('main_pic'));
        $main = new ProductPicture;
        $main->product_id = $product->id;
         $pic = new Picture;
            $pic->path =$main_pic_path;
            $pic->save();
        $main->picture_id=$pic->id;
        $main->is_main = true;
        $main->save();
    	foreach($request->file('pictures') as $p) {
    		$path = $this->upload($p);
            $pic = new Picture;
            $pic->path =$path;
            $pic->save();

    		$product_picture = new ProductPicture;
    		$product_picture->product_id = $product->id;
    		$product_picture->picture_id = $pic->id;
            $product_picture->is_main = false;
    		$product_picture->save();

    	}
        return redirect()->route('products.myProducts');

    }

    public function getMyProducts()
    {
    	$products = Auth::user()->products;

        $products->load('details','category','mainPicture','pictures');
        $data = ['products' => $products];
        return view('users.myProducts')->with($data);


    }


    public function editProduct($id) 
    {
    	$product = Product::find($id);
        $regions = Region::all();

        $data = ['product' => $product,
        'regions' => $regions];
        return view('products.editProduct')->with($data);
    }

    public function updateProduct($id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'start_price' => 'required',
            'stop_date' => 'required',
            'category_id' => 'required',
            'region_id' => 'required',
            'category_id' => 'required'
           

        ]);
        $product = Product::find($id);
        $product->name = $request->name;
        $product->start_price = $request->start_price;
        $product->stop_date = $request->stop_date;
        $product->category_id = $request->category_id;
        $product->region_id = $request->region_id;
        $product->user_id = Auth::user()->id;
        $product->save();
        if($request->has('description')) {
            $product_detail =  ProductDetail::where('product_id',$product->id)->first();
            $product_detail->description = $request->description;
            $product_detail->save();
        }
            if($request->hasFile('main_pic')) {
                $main_pic = ProductPicture::where('product_id',$product->id)
                ->where('is_main',true)->first();
                $picture = Picture::find($main_pic->picture_id);
                 $main_pic_path = $this->upload($request->file('main_pic'));
                 $picture->path=$main_pic_path;
                 $picture->save();


             }

             return redirect()->back();


    }

    public function deleteProduct($id)
    {
    	$product = Product::find($id);
    	ProductDetail::where('product_id',$product->id)->delete();
    	ProductPicture::where('product_id',$product->id)->delete();
    	Bid::where('product_id',$product->id)->delete();
    	$product->delete();
        return redirect()->back();
    }

    private function upload(UploadedFile $picture) {

    	$content = file_get_contents($picture);
        $filename=time().'-product'.$picture->getClientOriginalName();
        $path = 'products/'.$filename;
        \Storage::disk('dropbox')->put($path, $content);
        $url = $this->getFileUrl($path);
        return $url;

    }
   private function getFileUrl($path) {
        $client = new Client('vJafwr0JYsAAAAAAAAAAJxly-x2kxVrJhlOunY3VAGrbSd_ItnyboxBz6UbEJbM-');
        $link = $client->createSharedLinkWithSettings($path,['requested_visibility' => 'public']);
     $path=explode('?', $link['url']);
     return $path[0].'?raw=1'; 

    

    }


}
