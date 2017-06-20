<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

use App\Http\Requests;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
//        return "many articles";
//        return $articles;
        return view('articles/index',compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
//        if(!$article) {
//            abort(404);
//        }
        return view('articles.show',compact('article'));
    }
}
