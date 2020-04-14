<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Attribute;
use App\Allactivity;

class StudentController extends Controller 
{
	public function insertform(){

	$id=Auth::User()->id;
	

    $inital=10;
    $attribute = new Attribute();
    $attribute->id=$id;
    $attribute->a1=$inital;
    $attribute->a2=$inital;
    $attribute->a3=$inital;
    $attribute->a4=$inital;
    $attribute->a5=$inital;
    $attribute->a6=$inital;
    $attribute->a7=$inital;
    $attribute->a8=$inital;
    $attribute->a9=$inital;
    $attribute->a10=$inital;
    $attribute->a11=$inital;
    $attribute->a12=$inital;

    $attribute->save();

	return view('reg_details');
}

public function insert(Request $request)
{
	$id=Auth::User()->id;
	$first_name = $request->input('name');
	$idnumber = $request->input('idnumber');
	$branch = $request->input('branch');
	$email = $request->input('email');
	$studyyear = $request->input('studyyear');
	$year = $request->input('year');
	$dob = $request->input('dob');
	$contact = $request->input('contact');

	$data=array('name'=>$first_name,"id"=>$id,"idnumber"=>$idnumber,"email"=>$email,"branch"=>$branch,"studyyear"=>$studyyear,"year"=>$year,"dob"=>$dob,"contact"=>$contact);
	DB::table('students')->insert($data);
	return redirect('home');
}

	public function performance()
	{
		$id=Auth::User()->id;
		$attribute=Attribute::where('id', $id)->first();

		$overall=$attribute->a1 + $attribute->a2 +$attribute->a3 +$attribute->a4 +$attribute->a5 +$attribute->a6 +$attribute->a7 +$attribute->a8 +$attribute->a9 +$attribute->a10 +$attribute->a11 +$attribute->a12;
		$overall=round($overall/12); 

		//return view('performance')->with('attribute',$attribute);
		return view('performance',compact('attribute','overall'));
	}

	public function recommend()
	{
		$id=Auth::User()->id;
		$rand=rand(10,100);
		$r1=($rand*7)%12;
		$r2=($r1+9)%12;
		$r1=$r1+1;
		$r2=$r2+1;

		$rec1=Allactivity::where('aaid', $r1)->first();
		$rec2=Allactivity::where('aaid', $r2)->first();
		return view('events',compact('rec2','rec1'));





	}

}
