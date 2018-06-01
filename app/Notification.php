<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //
    protected $with = "bid";


    public function bid() {
    	return $this->belongsTo('App\Bid','bid_id','id');
    }
}
