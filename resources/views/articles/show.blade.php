@extends('app')
@section('content')
    <h2>
        {{ $article->title }}
    </h2>
    <article>
        {{ $article->body }}
        @if($article->tags)
            <h2>Tags:</h2>
            @foreach($article->tags as $tag)
            {{ $tag['name'] }}
            @endforeach
        @endif
    </article>
@stop