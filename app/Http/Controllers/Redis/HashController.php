<?php

namespace App\Http\Controllers\Redis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class HashController extends Controller
{
    //
    public function index(Request $request)
    {
        //hash类型

        //创建
        //单个设置hash内容,字段已存在会覆盖
        dump(Redis::hset('test:hash:1', 'file2', 'value2.1'));

        //当该hash数据中key【file3】不存在时创建
        dump(Redis::hsetnx('test:hash:1', 'file3', 'value3.1'));

        //批量创建或修改
        dump(Redis::hmset('test:hash:2', ['file1' => 'value1', 'file2' => 'value2', 'file3' => 'value3']));
        dump(Redis::hmset('test:hash:2', ['file1' => 'value1.1', 'file2' => 'value2.1', 'file3' => 'value3.1']));

        //获取  hget test:hash:2 file1
        dump(Redis::hget('test:hash:2', 'file1'));

        //批量获取 返回值为一个索引数组
        dump(Redis::hmget('test:hash:2', ['file1', 'file3']));

        //获取该hash数据中所有数据 返回值为一个key=>value关联数组
        dump(Redis::hgetall('test:hash:2'));

        //获取该hash中所有的key值 返回值是一个索引数组
        dump(Redis::hkeys('test:hash:2'));

        //获取该hash中所有的value值 返回值是一个索引数组
        dump(Redis::hvals('test:hash:2'));

        //删除
        //删除test:hash:2 中key为file1 的key-value组合
        dump(Redis::hdel('test:hash:2', 'file1'));

        //判断是否存在 不存在返回0 存在返回1
        dump(Redis::hexists('test:hash:1', 'file1'));

        //获取该hash集中的key-value个数
        dump(Redis::hlen('test:hash:1'));

        //该hash的file3 的value值 加2  若不存在会自动创建值为0再加2 若非数字会报错  传值必须是整数  返回值是增加之后的数值
        dump(Redis::hincrby('test:hash:1', 'file4', 2));

        //增减浮点数  但是测试会出现异常 有时浮点数计算不正常 不建议使用
        dump(Redis::hincrbyfloat('test:hash:1', 'file5', 2.1));
    }
}
