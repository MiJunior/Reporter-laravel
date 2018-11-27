@extends('index')

@section('content')
<h2 align="center">Add notes to Bans table</h2>
    {!! Form::model($ban, ['method' => 'PATCH', 'action' => ['BansController@update', $ban->id]]) !!}
        @include('ban._form')
    {!! Form::close() !!}
    @include('errors.list')

@endsection