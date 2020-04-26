<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index(){
        var_dump(\Illuminate\Support\Facades\Route::currentRouteAction());
        return 1;
    }
}
