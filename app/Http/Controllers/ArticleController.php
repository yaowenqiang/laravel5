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
//        $this->middleware('auth',['except'=>'create']);
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

    public function show(Article $article)
    {
//        $article = Article::findOrFail($id);
//        if(!$article) {
//            abort(404);
//        }
//        dd($article->created_at);
//        dd($article->created_at->year);
//        dd($article->created_at->month);
//        dd($article->created_at->addDays(8));
//        dd($article->created_at->addDays(8)->format('Y-m'));
        return view('articles.show',compact('article'));
    }

    public function create() {
//        if(\Auth::guest()) {
//           redirect('articles');
//        }
//        $tags = \App\Tag::lists('name','name');
        $tags = \App\Tag::lists('name','id');
        return view('articles.create',compact('tags'));
    }

//    public function store(Requests\CreateArticleRequest $request) {
    public function store(Request  $request) {
//        dd($request->all());
//        $input = Request::all();
//        $input['published_at'] = Carbon::now();
//        $input = Request::get('tittle');
        $this->createArticle($request);
//        \Auth::user()->articles()->save(new Article($request->all()));
//        $this->validate($request,['title'=>'required','body'=>'required']);
//        Article::create($request->all());
//        return $input;
//        return view('articles.create');
//        \Session::flush('flash_message','YOur article has been created');
//        \Session::flash('flash_message','YOur article has been created');
//        \Session::flash('flash_message_important',true);
//        return redirect('articles');
//        \Flash::info('')

//        flash('your article has been created');
//        flash()->success'your article has been created');
        flash()->overlay('your article has been created','Good Job');
//        $tags = \App\Tag::lists('name','id');
//        return view('articles.create',compact('tags'));
        return redirect('articles');
//        return redirect('articles')->with([
//            'flash_message'=>'Your article has been created'
//        ]);
    }
    public function edit(Article $article)
     {
         $tags = \App\Tag::lists('name','id');
         $tagIdLists = $article->tags()->lists('id')->toArray();
        return view('articles.edit',compact('article','tags','tagIdLists'));
    }

    public function update(Article $article,ArticleRequest $request)
    {
        $article->update($request->all());
        $tags = \App\Tag::lists('name','id');
        $this->syncTags($article,$request->input('tag_list'));
        $tagIdLists = $article->tags()->lists('id')->toArray();
        return view('articles.edit',compact('article','tags','tagIdLists'));
//        return redirect('articles');
    }

    public function  syncTags(Article $article,array $tags)
    {
        $article->tags()->sync($tags);
    }

    public function  createArticle(Request $request)
    {
        $article = Article::create($request->all());
        $this->syncTags($article,$request->input('tag_list'));
        return $article;
    }
}
