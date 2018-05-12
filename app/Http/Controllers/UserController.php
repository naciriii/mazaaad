<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function getProfile()
    {
        return view('users.profile');

    }
    public function updateProfile()
    {
    	
    }
}
