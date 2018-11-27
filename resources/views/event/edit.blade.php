@extends('index')

@section('content')
<h2 align="center">Edit </h2>
    {!! Form::model($event, ['method' => 'PATCH', 'action' => ['EventController@update', $event->id], 'enctype'=>'multipart/form-data']) !!}
        @include('event._form')
    {!! Form::close() !!}
    @include('errors.list')
@endsection