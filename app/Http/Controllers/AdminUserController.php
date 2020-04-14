<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Student;
use App\Activity;
use App\Attribute;

class AdminUserController extends Controller
{
	public function profile($id)
    {
        $user=Student::findOrFail($id);
        return view('admin.studentprofile')->with('user',$user);
    }

    public function performance($id)
	{
		$user=Student::findOrFail($id);
		$attribute=Attribute::where('id', $id)->first();

		$overall=$attribute->a1 + $attribute->a2 +$attribute->a3 +$attribute->a4 +$attribute->a5 +$attribute->a6 +$attribute->a7 +$attribute->a8 +$attribute->a9 +$attribute->a10 +$attribute->a11 +$attribute->a12;
		$overall=round($overall/12); 

		//return view('performance')->with('attribute',$attribute);
		return view('admin.studentperformance',compact('attribute','overall','user'));
	}

	public function viewcertificate($aid)
    {
        $user=Activity::where('aid', $aid)->get();
        // echo $user;
        return view('viewcertificate')->with('users',$user);
    }

    public function upload($id)
    {
        $user=Student::findOrFail($id);
        $usr=Activity::where('id', $id)->get();
        //$activities=Activity::findOrFail($id);

        //return view('uploads')->with('users',$user);
        return view('admin.studentuploads',compact('usr','user'));
	
    }

    public function timeline()
    {
        #$user=Activity::take(10)->get();
        $user = Activity::orderBy('aid', 'desc')->take(10)->get();
        
        //$activities=Activity::findOrFail($id);

        return view('admin.update')->with('users',$user);

    }

    
}
