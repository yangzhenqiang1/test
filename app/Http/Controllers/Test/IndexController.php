<?php

namespace App\Http\Controllers\Test;

use App\Magic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    function __construct(array $attributes = [])
    {
        dump('__construct');
    }

    function __destruct()
    {
        dump('destruct');
        // TODO: Implement __destruct() method.
    }

    //
    function __call($method, $parameters)
    {
        dump('方法不存在');
    }

    function __toString()
    {
        dump('__toString');
    }
    function __clone()
    {
        dump('克隆函数');
        // TODO: Implement __clone() method.
    }


    public function Magic()
    {
        dump('Magic_function');
    }
    public function index(Request $request)
    {
        /*//单例模式
        $sing = Singleton::getInstance();
        $sing->test();*/
        $magic = new Magic();
//        $clone = clone $magic;
    }

}