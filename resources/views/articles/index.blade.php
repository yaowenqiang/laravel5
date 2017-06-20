@extends('app')
@section('content')
    @foreach($articles as $article)
        <article>
            <h2>
                <a href="/articles/{{ $article->id  }}">{{ $article->title }}</a>
                <br>
                <a href="{{ action('ArticleController@show',[$article->id]) }}">{{ $article->title }}</a>
                <br>
                <a href="{{ url('articles',$article->id) }}">{{ $article->title }}</a>
            </h2>
            <div class="body">
                {{ $article->body }}
            </div>
        </article>
    @endforeach
@stop