<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';

    public function details()
    {
    	return $this->hasOne('App\ProductDetail','product_id','id');
    }
    public function category()
    {
    	return $this->belongsTo('App\Category','category_id','id');
    }
    public function pictures()
    {
    	return $this->hasMany('App\Picture','product_id','id');
    }
    public function region()
    {
    	return $this->belongsTo('App\Region','region_id','id');
    }
    public function owner()
    {
    	return $this->belongsTo('App\User','user_id','id');
    }
    public function bids()
    {
    	return $this->hasMany('App\Bid','product_id','id');
    }
}

