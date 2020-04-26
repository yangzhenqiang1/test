<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
//        session('yang');
//        dump(session('yang','defalut'));
//        session(['yang'=>'zhen']);
//        dump(session('yang'));
//        dump($request->session()->all());die();
//        dump($request->is('*'));die();
//        // Without Query String...
//        $url = $request->url();
//        print_r($url);
//// With Query String...
//        $url = $request->fullUrl();
//        print_r($url);
        return view('admin/home');
    }
}
