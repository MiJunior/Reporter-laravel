@extends('index')

@section('content')
<h2 align="center">Add new Event</h2>
    {!! Form::open(['url' => 'event', 'action' => 'EventController@store', 'enctype'=> "multipart/form-data"]) !!}
    @include('event._form')
    {!! Form::close() !!}
@endsection