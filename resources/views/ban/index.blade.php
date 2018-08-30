@extends('index')

@section('content')
    <h2 align="center">Add notes to Bans table</h2>
    {!! Form::open(['url' => 'ban']) !!}
        <!-- Nickname Form input -->
        <div class="form-group">
            {!! Form::label('P_Nickname', 'Nickname:') !!}
            {!! Form::text('P_Nickname', null, ['class'=>'form-control', 'placeholder' => 'Ник нарушителя']) !!}
        </div>
        <!--ID Form input -->
        <div class="form-group">
            {!! Form::label('P_ID', 'ID:') !!}
            {!! Form::text('P_ID', null, ['class'=>'form-control', 'placeholder' => 'ID нарушителя']) !!}
        </div>
        <!-- Rule Form input -->
        <div class="form-group">
            {!! Form::label('rule', 'Rule:') !!}
            {!! Form::text('rule', null, ['class'=>'form-control', 'placeholder' => 'Пункт правил(число)']) !!}
        </div>
        <!-- Ban type Form input -->
        <div class="form-group">
            {!! Form::label('BanType', 'Ban type:') !!}
            {!! Form::select('BanType', ['Бан Чата' => 'Бан Чата', 'Бан Аккаунта' => 'Бан Аккаунта', 'Бан Персонажа' => 'Бан Персонажа' ], null, ['class'=>'form-control']); !!}
        </div>
        <!-- Ban time Form input -->
        <div class="form-group">
            {!! Form::label('BanTime', 'Ban time:') !!}
            {!! Form::text('BanTime', null, ['class'=>'form-control', 'placeholder' => 'Время бана в секундах']) !!}
        </div>
        
        <!-- submit -->
        <div class="form-group">
            {!!Form::submit('Add notes', ['class' => 'btn btn-primary form-control'])!!}
        </div>
    {!! Form::close() !!}
    {{$username = Auth::user()->name }}
    {{var_dump($username)}}
    @if ($errors->any())
        <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
    @endif
    
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
      <th>mod</th>
    </tr>
  </thead>
  
    @foreach ($bans as $ban)
    <tbody>
    <tr>
      <th scope="row">{{$ban->bans_id}}</th>
      <td>{{$ban->P_Nickname}}</td>
      <td>{{$ban->P_ID}}</td>
      <td>{{$ban->rule}}</td>
      <td>{{$ban->BanType}}</td>
      <td>{{$ban->BanTime}}</td>
      <td>{{$ban->created_by}}</td>
      <td><i class="fas fa-edit" href=""></i> <i class="fas fa-trash-alt"></i></td>
    </tr>
    @endforeach
    
  </tbody>
    </table>
    {!! $bans->render();!!}
    
@stop