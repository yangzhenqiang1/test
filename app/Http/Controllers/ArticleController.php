<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Article;
class ArticleController extends Controller
{
    //
    public function show($id)
    {
        print_r(Article::find($id));
//        return view('article/show')->withArticle(Article::find($id));
        return view('article/show')->withArticle(Article::with('hasManyComments')->find($id));
    }
}
