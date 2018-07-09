<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Category;
use App\Region;
use App\Product;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
    	$categories = Category::orderBy('name','ASC')->get();
    	$regions = Region::orderBy('name','ASC')->get();
        view()->share(
        	[
        	'categories'=>$categories,
        	'regions' => $regions
        	]
        	);
             Product::whereDate('stop_date','<=',date('Y-m-d H:i:s'))->update(['is_available' => false]);

    }
}
