<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class ArticleController extends Controller
{
    //
    public function show($id)
    {
        print_r('1');
        return view('article/show')->withArticle(Article::with('hasManyComments')->find($id));
    }
}
