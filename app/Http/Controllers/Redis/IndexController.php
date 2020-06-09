<?php

namespace App\Http\Controllers\Redis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    //
    public function index(Request $request)
    {
//        $arr = ['1', '2', '3',4,5];
//        print "<pre>";
//        session()->put('key1','value1');
////        echo session()->get('key1');
//        Session::put('key2','value2');
//        echo $request->session()->get('key2');
//        echo Session::get('key2');
//        print_r(array_chunk($arr,2));
//        dd(\Illuminate\Support\Facades\Route::currentRouteAction());

//        return 1;


        //redis     laravel中redis不需要new实例化

        //string类型
print_r('redisString');
//        //设置和获取
//        Redis::set('hello', 'world');
//        //设置过期时间 单位-秒
//        Redis::expire('hello', 60);
//        Redis::setex('hello2', 100, 'world2');
//        dump(Redis::get('hello'));
//        dump(Redis::get('hello2'));
//
//        //批量新增多个键值对
//        $arr = ['a' => '2', 'b' => 'w', 'c' => 'e'];
//        Redis::mset($arr);
//
//        //批量获取多个键值对
//        dump(Redis::mget(array_keys($arr)));
//
//        //删除key为hello的键值对
//        Redis::del('hello');
//
//        //批量删除多个键值对  可以是数组或者多个字符串  返回删除了的个数
//        dump(Redis::del(['a','b','c']));
//
//        //获取所有键名    返回值为索引数组
//        dump(Redis::keys('*'));
//        //获取所有以a开头的键名
//        dump(Redis::keys('a*'));
//
//        //将key a 改为key a1 成功时，返回值为 Predis\Response\Status Object ( [payload:Predis\Response\Status:private] => OK )
//        print_r(Redis::rename('a','a1'));
//
//        //获取键值对的总个数
//        dump(Redis::dbsize());
//
//        //获取key为hello的值的长度
//        dump(Redis::strlen('hello'));
//
//        //获取key为hello的剩余过期时间
//        dump(Redis::ttl('hello'));
//
//        //substr 获取第一到第三位字符
//        var_dump(Redis::substr('hello',0,2));
//
//        //判断是否存在 存在返回1 不存在返回0
//        dump(Redis::exists('hello'));
//
//        //number数字操作   如果不是数字会报错
//        //key为a的值-1 并返回-1后的数值
//        dump(Redis::decr('a'));
//
//        //key为a的值+1 并返回+1后的数值
//        dump(Redis::incr('a'));
//
//        //选择数据库，默认第0个，共有16个 0-15
//        Redis::select(2);
//
//        //移动当前数据库中的key到指定数据库 0-15
//        Redis::move('a',1);
//
//        //删除当前数据库的所有key
//        Redis::flushdb();
//
//        #删除所有数据库的所有key
//        Redis::flushall();
    }
}
