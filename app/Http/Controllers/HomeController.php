<?php

namespace App\Http\Controllers;
use Auth;
use App\Student;
use App\Attribute;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Auth::User()->id;
        $user=Student::findOrFail($id);
        return view('userprofile')->with('user',$user);
    }
}
