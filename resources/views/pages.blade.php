@extends('app')
@section('content')
    @if($name == 'john')
        HI,john
    @else
       HI,guest.
    @endif
    @if(count($people))
        <ul>
            @foreach($people as $person)
                <li>{{ $person }}</li>
            @endforeach
        </ul>
    @endif
    <h1>Pages <?= $name;?></h1>
    <h1>Pages {{ $name }} {{ $last }}</h1>
    <h1>Pages {!! $name !!}</h1>
@stop
