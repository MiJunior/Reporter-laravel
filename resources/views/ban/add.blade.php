@extends('index')

@section('content')
<h2 align="center">Add notes to Bans table</h2>
    {!! Form::open(['url' => 'ban']) !!}
    @include('ban._form')
    {!! Form::close() !!}
    @include('errors.list')

@endsection