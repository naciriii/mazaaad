<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $with = ['details'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function products()
    {
        return $this->hasMany('App\Product','user_id','id');
    }
    public function details()
    {
        return $this->hasOne('App\UserDetail','user_id','id');
    }
    public function complaints()
    {
        return $this->hasMany('App\Complaint','user_id','id');

    }
    public function bids()
    {
        return $this->hasMany('App\Bid','user_id','id');
    }
}
