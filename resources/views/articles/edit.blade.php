@extends('app')
@section('content')
    <h1>Edit: {!! $article->title !!}</h1>
    {!! Form::model($article,['action'=>['ArticleController@update',$article->id],'method'=>'PATCH']) !!}
    @include('articles.form',['submitButtonText'=>'Edit Article'])
    {!! Form::close() !!}
    @include('errors.list')
@stop
