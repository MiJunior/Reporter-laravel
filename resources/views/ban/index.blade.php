@extends('index')

@section('content')
    @role('admin')
    <h2 align="center">Add notes to Bans table</h2>
    {!! Form::open(['action' => 'BansController@store']) !!}
    @include('ban._form')
    {!! Form::close() !!}
    @include('errors.list')
    @endrole
    @role('gm')
    <h2 align="center">Add notes to Bans table</h2>
    {!! Form::open(['url' => 'ban']) !!}
    @include('ban._form')
    {!! Form::close() !!}
    @include('errors.list')
    @endrole
    <hr>
    <h2 align="center">Banes Table</h2>
    <table class="table" id="bantables">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>Нарушитель</th>
      <th>ID</th>
      <th>Пункт правил</th>
      <th>Тип бана</th>
      <th>Время</th>
      <th>Выдал</th>
      @role('admin')
      <th>mod</th>
      @endrole
    </tr>
  </thead>
  
    @foreach ($bans as $ban)
    <tbody>
    <tr>
      <th scope="row">{{$ban->id}}</th>
      <td>{{$ban->P_Nickname}}</td>
      <td>{{$ban->P_ID}}</td>
      <td>{{$ban->rule}}</td>
      <td>{{$ban->BanType}}</td>
      <td>{{$ban->BanTime}} second</td>
      <td>{{$ban->created_by}}</td>
      @role('admin')
        <td>
        <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('ban.destroy', $ban->id)}}" method="post">
        <a href="/ban/{{$ban->id}}/edit" class="fas fa-edit" ></a>
               @method('DELETE')
              {{ csrf_field() }}
              <button type="submit" class="btn sm"><i class="fas fa-trash-alt"></i></button>
            </form>
        </td>
      @endrole
    </tr>
    @endforeach
    
  </tbody>
    </table>
    {!! $bans->render();!!}
    
@stop