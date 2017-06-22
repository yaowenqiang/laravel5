@extends('app')
    @section('content')
       <h1>Write a New Article</h1>
       {!! Form::open(['url'=>'articles']) !!}
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
{{--        {{ var_dump($errors) }}--}}
    @stop