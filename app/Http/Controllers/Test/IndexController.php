<?php


namespace App\Http\Controllers\Test;


use App\Article;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Queue;

class IndexController
{
    public function index()
    {
////        $res = DB::table('articles')->simplePaginate(5);
//        $users = DB::table('articles')->paginate(5);
//        return view('test.index', ['users' => $users]);
//        $list = Article::select('id','title')->skip(2)->take(2)->get()->toArray();
//        dump($list);
//
//        foreach ($list as $v){
//            print_r($v['id']);
//        }

        /*  Article::chunk(5, function($users) {
              dump($users);
              foreach ($users as $user) {
                  //
                  print_r($user['id']);
              }
          });*/

        /*foreach (Article::cursor() as $Article) {
            //
            dump($Article->toArray());
        }*/

//        dump(Article::get()->toArray());

//        $model = Article::findOrFail(4);
//        dump($model);exit();

//        $Article = DB::table('articles')->where('id','1')->first();
//        dump($Article);
//        $Article ->user_id = 2;
//        dump($Article);
//        $Article = DB::table('articles')->update();
//        dump($Article);

//        dd(file_get_contents('index.php'));

//        $res = file_get_contents('a.txt');
//        dd($res[0]);

//        $res = Article::create(['title' => '222','user_id'=>1]);
//        $res->fill(['title' => 'Flight 22','user_id'=>2]);
        dump(Article::fill(['a']));
//        dd($res);

//        dd(Article::where('id','>','6')->update(['user_id'=>2]));
//        dd(date('H:i:s'));
//        dump(User::all());
//        $res = Queue::push('test_queue',['message'=>'test_message']);
//        dump($res);
    }
}