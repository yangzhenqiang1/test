<?php

namespace App\Http\Controllers\Redis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class SetController extends Controller
{
    //
    public function index(Request $request)
    {
//        //set类型
//
//        //demo1 展示好友和自己的共同好友的集合
//        Redis::flushAll();
//        Redis::sadd('my', 'a', 'b', 'c');
//        Redis::sAdd('myfriends', 'c', 'b', 'e');
//        dump(Redis::sinter('my', 'myfriends')); //展示两个key之间共有的元素
//        dump(Redis::sunion('my', 'myfriends')); //展示两个key之间共有的元素
//        //demo2 黑名单，白名单
//        Redis::sadd('myBlacklist', 'a', 'b');
//        $flag = Redis::sismember('myBlacklist', 'a');
//        dump($flag ? 1 : 0);
//
//        //创建
//        //添加一个或多个元素到集合中
//        Redis::sadd('set', 'a', 'b');
//
//        //获取
//        //返回集合中所有的元素
//        Redis::smembers('set');
//        //获取两个或两个以上集合的交集
//        Redis::sinter('set', 'set1', 'set2');
//        //获取两个或两个以上集合的并集
//        Redis::sunion('set', 'set1', 'set2');
//        //获取两个或者两个以上集合的差集
//        Redis::sdiff('set', 'set1', 'set2');
//
//        //删除
//        //删除一个或多个集合中的元素
//        Redis::srem('set','a','b');
//        //随机移除一个元素，并返回移除的元素
//        Redis::spop('set');
//        //将set的一个元素(a)移动到set1集合中去
//        Redis::smove('set','set1','a');
//        //判断元素是否是在指定集合中
//        Redis::sismember('set','a');

        //
        dump(Redis::sscan('myfeiends',1,'*'));
    }
}
