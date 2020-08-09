<?php

namespace App\Http\Controllers\Push;

use App\Common;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * android 友盟推送
     */
    public function index(){
        $http_method = 'POST';
        $push_config = Common::pushConfig();//推送需要配置的信息
        $url = $push_config['url'];
        $params = [
            'policy' => [
                'expire_time' => '2020-04-12 17:31:57'
            ],
            'description' => 'yang_test7',
            'production_mode' => 'true',
            'appkey' => $push_config['appkey'],
            'payload' => [
                'body' => [
                    'title' => 'seven',
                    'ticker' => 'seven',
                    'text' => '7777777',
                    'after_open' => 'go_app',
                    'play_vibrate' => 'false',
                    'play_lights' => 'false',
                    'play_sound' => 'true'
                ],
                'display_type' => 'notification',
                'extra' => [
                    'name' => 'yang'
                ]
            ],
            'device_tokens' => $push_config['device_tokens'],
            'type' => 'unicast',
            'timestamp' => time()
        ];
        $post_body = json_encode($params);
        $app_master_secret = $push_config['app_master_secret'];
        $md5_str = md5($http_method.$url.$post_body.$app_master_secret);


//        print '<pre>';
        print_r('json_body:###'.$post_body.PHP_EOL);
        print_r('@@@@@@@@@@@@@@'.PHP_EOL);
        print_r($http_method.$url.$post_body.$app_master_secret.PHP_EOL);
        print_r('@@@@@@@@@@@@@@'.PHP_EOL);
        print_r('sign:###'.$md5_str.PHP_EOL);


        $headers_arr[] = 'Content-Type: application/json';
        $post_url = "$url?sign=$md5_str";
        print_r($post_url.PHP_EOL);
        $res = post_url($post_url,$post_body,$headers_arr);
        dump($res);
    }
}
