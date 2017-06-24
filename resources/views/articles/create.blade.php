@extends('app')
    @section('content')
       <h1>Write a New Article</h1>
       {!! Form::open(['url'=>'articles']) !!}
        @include('articles.form',['submitButtonText'=>"Add Article"])
       {!! Form::close() !!}
       @include('errors.list')
{{--        {{ var_dump($errors) }}--}}
    @stop