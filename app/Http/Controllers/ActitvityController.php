<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use Illuminate\Http\Request;
use App\Activity;
use App\Http\Controllers\Controller;

class ActitvityController extends Controller
{
    public function index()
    {
    	return view('addcertificate');
    }

    public function insert(Request $request)
    {
    	$activity = new Activity();

    	$activity->aname= $request->input('aname');
		$activity->atype= $request->input('atype');
    	$activity->ascope= $request->input('ascope');
    	$activity->adate= $request->input('adate');
        $activity->alink= $request->input('alink');
        $activity->adesc= $request->input('adesc');

    	if ($request->hasfile('afile'))
    	{
    		$file=$request->file('afile');
    		$extension=$file->getClientOriginalExtension();
    		$filename=time().'.'.$extension;
    		$file->move('uploads/activity/',$filename);
    		$activity->image=$filename;
    	} else {
    		return $request;
    		$activity->image='';
    	}

    	 $id=Auth::User()->id;
         $sname=Auth::User()->name;
    	 $activity->id=$id;
         $activity->sname=$sname;
    	 $astatus=0;
    	 $activity->astatus=$astatus;

    	 $activity->save();

    	//return view('uploads')->with('activity',$activity);
        return redirect('upload');
    }

    public function upload()
    {
        $id=Auth::User()->id;
        $user=Activity::where('id', $id)->get();
        //$activities=Activity::findOrFail($id);

        return view('uploads')->with('users',$user);

    }

    public function viewcertificate($aid)
    {
        $user=Activity::where('aid', $aid)->get();
        // echo $user;
        return view('viewcertificate')->with('users',$user);
    }

    public function timeline()
    {
        #$user=Activity::take(10)->get();
        $user = Activity::orderBy('aid', 'desc')->take(10)->get();
        
        //$activities=Activity::findOrFail($id);

        return view('update')->with('users',$user);

    }


}
