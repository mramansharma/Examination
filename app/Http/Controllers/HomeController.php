<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;
use Auth;

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
        $uId=Auth::user()->id;
        $result=Result::where('user_id',$uId)->get();
        return view('home',compact('result'));
    }
}
