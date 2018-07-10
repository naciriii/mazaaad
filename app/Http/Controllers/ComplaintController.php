<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complaint;
use App\ComplaintSubject;
use Auth;

class ComplaintController extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware('auth');
        Parent::__construct();
    }

    public function storeComplaint(Request $request)
    {
    	$this->validate($request, [
    		'subject_id' => 'required',
    		'content' => 'required'
    	]);
    	$complaint = new Complaint;
    	$complaint->subject = $request->subject_id;
    	$complaint->content = $request->content;
        $complaint->user_id = Auth::user()->id;
    	$complaint->save();
        return redirect()->back()->withSuccess('Your complaint has been submited');
    }
    public function addComplaint()
    {
        $subjects = ComplaintSubject::all();

        return view('complaints.index')->with(['subjects'=>$subjects]);
    }
}
