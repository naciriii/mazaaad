<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        
        $products = Product::where('is_valid',true)->where('is_available',false)
        ->take(8)->get();
        return view('welcome')->withProducts($products);
    }
}
