<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Activity;
use App\Attribute;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = Student::all();
        $certificates= Activity::all();
        //return view('admin')->with('users',$user);
        return view('admin',compact('users','certificates'));
    }

    

    public function createEvent()
    {
        
        return view('createevent');
    }

    public function viewUploads()
    {
        
        return view('viewuploads');
    }

    public function approve($aid)
    {
        Activity::where('aid', $aid)->update(['astatus' => 1]);
        $user=Activity::where('aid', $aid)->get();
        // echo $user;
        return view('approvecertificate')->with('users',$user); 
    }

    public function grade($aid)
    {

        $user=Activity::where('aid', $aid)->get();
        //$id=$user->id;
        return view('gradeactivity',compact('aid','user'));
    }

    public function reject($aid)
    {
        Activity::where('aid', $aid)->update(['astatus' => 2]);
        return redirect('admin');
    }

    public function update(Request $request,$id)
    {
        
        $user=Attribute::where('id', $id)->first();
        Attribute::find($user->gid)->increment('a1', $request->input('ga1'));
        Attribute::find($user->gid)->increment('a2', $request->input('ga2'));
        Attribute::find($user->gid)->increment('a3', $request->input('ga3'));
        Attribute::find($user->gid)->increment('a4', $request->input('ga4'));
        Attribute::find($user->gid)->increment('a5', $request->input('ga5'));
        Attribute::find($user->gid)->increment('a6', $request->input('ga6'));
        Attribute::find($user->gid)->increment('a7', $request->input('ga7'));
        Attribute::find($user->gid)->increment('a8', $request->input('ga8'));
        Attribute::find($user->gid)->increment('a9', $request->input('ga9'));
        Attribute::find($user->gid)->increment('a10', $request->input('ga10'));
        Attribute::find($user->gid)->increment('a11', $request->input('ga11'));
        Attribute::find($user->gid)->increment('a12', $request->input('ga12'));

        return redirect('admin');
    }


}
