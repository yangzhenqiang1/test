<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Singleton extends Controller
{
    //
    static private $instance;
    private function __construct()
    {
        //构建函数设为private 私有的 不可以被别的类进行new操作
    }
    private function __clone()
    {
        // TODO: Implement __clone() method.
        //同上 不可以被克隆
    }

    static public function getInstance(){
        if (!self::$instance instanceof self){
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function test(){
        echo '这是单例模式test';
    }
}
