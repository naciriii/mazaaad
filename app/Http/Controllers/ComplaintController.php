<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complaint;
use Auth;

class ComplaintController extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function addComplaint(Request $request)
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
    }
    public function getComplaints()
    {
        $complaints = Auth::user()->complaints;
    }
}
