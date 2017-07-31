<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Input;
use App\Question;
use App\Result;
use Auth;

class NavigationController extends Controller
{
    //
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	//$question=Qestion::all();
    	$questions=Question::all();
    	return view('navigation.attempttest',compact('questions'));
    }

	public function check(request $request)
	{
		$db=new Result;
	 	$uId=Auth::user()->id;
		$count=0;
		$correct=0;
		$wrong=0;
		$rows=Question::count('id');
		for($i=1;$i<=$rows;$i++)
		{
			$answer=Question::where('id',$i)->first();
			if(($request->$i)=='')
			{}
			else
			{
				if(($request->$i)==($answer->answer))
				{	
					$count++;
					$correct++;
				}
				else
				{
					$count-=0.25;
					$wrong++;
				}
			}	
		}
		$db->user_id=$uId;
		$db->score=$count;
		$db->correct=$correct;
		$db->wrong=$wrong;
		$db->save();
		session()->flash('message','Test Completed Successfully!');
		return redirect('/home');
	}

	public function results()
	{
		$uId=Auth::user()->id;
		$last=Result::where('user_id',$uId)->orderBy('id','desc')->first();
		$results=Result::where('user_id',$uId)->get();
		return view('navigation.results',compact('last','results'));
	}
}

