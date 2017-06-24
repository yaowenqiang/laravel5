@extends('app')
@section('content')
    <h1>Edit: {!! $article->title !!}</h1>
    {!! Form::model($article,['action'=>['ArticleController@update',$article->id],'method'=>'PATCH']) !!}
    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body','Body:') !!}
        {!! Form::textarea('body',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('published_at','Publish On:') !!}
        {{--           {!! Form::date('date',date('Y-m-d'),['class'=>'form-control']) !!}--}}
        {!! Form::date('published_at',\Carbon\Carbon::now(),['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Add Article',['class'=>'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    @if($errors->any())
        <ui class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ui>
    @endif
@stop
