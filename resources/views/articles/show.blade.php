@extends('app')
@section('content')
    <h2>
        {{ $article->title }}
    </h2>
    <article>
        {{ $article->body }}
        @unless($article->tags->isEmpty())
        @if($article->tags)
            <h2>Tags:</h2>
            <ul>
                @foreach($article->tags as $tag)
                    <li>{{ $tag['name'] }}</li>
                @endforeach
            </ul>
        @endif
        @endunless
    </article>
@stop