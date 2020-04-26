<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //->withFooBar(100) 等价于 ->with('foo_bar', 100)
        return view('home')->with('articles', \App\Article::all());
        return view('home')->withArticles(\App\Article::all());
    }
}
