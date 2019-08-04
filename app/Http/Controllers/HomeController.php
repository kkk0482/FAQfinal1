<?php

namespace App\Http\Controllers;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use App\User;

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
        //$user = Auth::user();
        //$user = Question::all();
        //$questions = $user->questions()->paginate(6);
        //return view('home')->with('questions', $questions);
        $user = Question::all();
        $x = \App\Question::paginate(12);
        return view('home')->with('questions', $x);
    }
}
