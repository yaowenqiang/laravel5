<?php

namespace App\Http\Controllers;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use App\Article;
use Carbon\Carbon;

//use App\Http\Requests;

class ArticleController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth',['only'=>'create']);
        $this->middleware('auth',['except'=>'create']);
    }

    public function index()
    {
//        return \Auth::user();
//        $articles = Article::all();
//        $articles = Article::orderBy('published_at','desc')->get();
//        $articles = Article::latest('published_at')->get();
//        $articles = Article::latest('published_at')->where('published_at','<=',Carbon::now())->get();
//        $articles = Article::latest('published_at')->published()->get();
        $articles = Article::latest('published_at')->published()->get();
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
//        dd($article->created_at);
//        dd($article->created_at->year);
//        dd($article->created_at->month);
//        dd($article->created_at->addDays(8));
//        dd($article->created_at->addDays(8)->format('Y-m'));
        dd($article->published_at);
        return view('articles.show',compact('article'));
    }

    public function create() {
        if(Auth::guest()) {
           redirect('articles');
        }
        return view('articles.create');
    }

//    public function store(Requests\CreateArticleRequest $request) {
    public function store(Request  $request) {
//        $input = Request::all();
//        $input['published_at'] = Carbon::now();
//        $input = Request::get('tittle');
//        Article::create(Request::all());
        \Auth::user()->articles()->save(new Article($request->all()));
//        $this->validate($request,['title'=>'required','body'=>'required']);
//        Article::create($request->all());
//        return $input;
//        return view('articles.create');
        return redirect('articles');
    }
    public function edit($id)
     {
         $article = Article::findOrFail($id);
        return view('articles.edit',compact('article'));
    }

    public function update($id,ArticleRequest $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }
}
