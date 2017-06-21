<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Article;
use Carbon\Carbon;

use App\Http\Requests;

class ArticleController extends Controller
{
    public function index()
    {
//        $articles = Article::all();
//        $articles = Article::orderBy('published_at','desc')->get();
        $articles = Article::latest('published_at')->get();
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

    public function create() {
        return view('articles.create');
    }

    public function store() {
        $input = Request::all();
        $input['published_at'] = Carbon::now();
//        $input = Request::get('tittle');
        Article::create($input);
//        return $input;
//        return view('articles.create');
        return redirect('articles');
    }
}
