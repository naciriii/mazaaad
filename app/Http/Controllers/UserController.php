<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;
use App\UserNotification;

class UserController extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware('auth');
        Parent::__construct();
    }

    public function getProfile()
    {
        return view('users.profile');

    }
    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'value' => 'required'
            ]);
        $user = User::find(Auth::user()->id);
        switch($request->name) {
            case 'name' :
            $user->name = $request->value;
            $status = ['status' => true];
            break;
            case 'password':
            if(Hash::check($request->old,$user->password)) {
                $user->password = Hash::make($request->value);
                  $status = ['status' => true];
            } else {
                  $status = ['status' => false, 'error' => 'Old Password does not match.'];
            }
            break;
            case 'email':
            if(User::where('email',$request->value)
                ->where('id','!=',$user->id)->count()) {
                  $status = ['status' => false, 'error' => 'Email Already exists.'];
            } else {
                $user->email = $request->value;
                $status = ['status' => true];

            }
            break;
        }
        if(!array_has($status,'error')) {
            $user->save();


        }
        return response()->json($status);
    	
    }

    public function viewNotifications() {
       UserNotification::where('user_id',Auth::user()->id)->update(['seen'=>true]);
       return response()->json(['status'=>true]);

    }
}
