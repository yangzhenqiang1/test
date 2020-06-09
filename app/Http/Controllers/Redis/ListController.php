<?php

namespace App\Http\Controllers\Redis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class ListController extends Controller
{
    //
    public function index(Request $request)
    {
        //list类型

        //在左（头部）添加数据到list中  不存在时创建  返回值为添加元素后list的长度
        dump(Redis::lpush('test:list:1', '12'));
        //在左（头部）添加数据到list中  不存在时不创建  返回0
        dump(Redis::lpushx('test:list:1', '12'));
        //在右（尾部）添加数据到list中  不存在时创建  返回值为添加元素后list的长度
        dump(Redis::rpush('test:list:1', '13'));
        //在右（尾部）添加数据到list中  不存在时不创建  返回0
        dump(Redis::rpushx('test:list:1', '12'));

        //从左（头部）取出list中数据 返回值为取出的数据 若不存在当前key的话，返回null
        dump(Redis::lpop('test:list:1'));
        //从右（尾部）取出list中数据 返回值为取出的数据
        dump(Redis::rpop('test:list:1'));

        //获取该key中所有数据 是个数组
        dump(Redis::lrange('list', 0, -1));

        //获取key为list的list集合中 索引为0的数据
        dump(Redis::lindex('list', 0));

        //将list集合中索引为0的value值改为www
        dump(Redis::lset('list', 0, 'www'));

        //删除list列表右边的最后一个元素将其追加到list1列表,list1不存在会创建  返回值为那个元素的value值
        dump(Redis::rpoplpush('list','list1'));

        //只保留索引0到索引1的value值 其余的都删除
        dump(Redis::ltrim('list',0,1));

        //获取该list的长度
        dump(Redis::llen('list'));
    }
}
