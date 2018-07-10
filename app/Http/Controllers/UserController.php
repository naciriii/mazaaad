<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;
use App\UserNotification;
use App\UserDetail;
use Spatie\Dropbox\Client;
use Spatie\FlysystemDropbox\DropboxAdapter;
use Illuminate\Http\UploadedFile; 

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
        Auth::user()->load('details');
        return view('users.profile');

    }
    public function updateProfile(Request $request)
    {
       
        $this->validate($request, [
            'name' => 'required',
            'value' => 'required'
            ]);
        $udt = null;
        $user = User::find(Auth::user()->id);
        if(in_array($request->name,['mobile','identifier','first_name','last_name',
            'secondaryEmail','birthday','picture'])) {
            if($user->details == null) {
                $udt = new UserDetail;
                $udt->user_id = $user->id;
              

            } else {
                $udt = UserDetail::where('user_id',$user->id)->first();
            }
        }
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
            case 'mobile':

           
                $udt->phone = $request->value;
                $status = ['status' => true];

           
            break;
              case 'identifier':

           
                $udt->identifier = $request->value;
                $status = ['status' => true];

           
            break;
              case 'birthday':

           
                $udt->birthday = $request->value;
                $status = ['status' => true];

           
            break;
              case 'first_name':

           
                $udt->first_name = $request->value;
                $status = ['status' => true];

           
            break;
             case 'last_name':

           
                $udt->last_name = $request->value;
                $status = ['status' => true];

           
            break;
             case 'secondaryEmail':

           
                $udt->email = $request->value;
                $status = ['status' => true];

           
            break;
             case 'picture':
             
             $path = $this->upload($request->file('value'));

                $udt->picture = $path;
                $status = ['status' => true,'picture'=>$path];

           
            break;
        }
        if(!array_has($status,'error')) {
            $user->save();
            if($udt != null) {
                $udt->save();
            }


        }
        return response()->json($status);
    	
    }

    public function viewNotifications() {
       UserNotification::where('user_id',Auth::user()->id)->update(['seen'=>true]);
       return response()->json(['status'=>true]);

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
