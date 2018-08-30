@extends('index')
@section('content')

<input class="form-control" type="text" placeholder="Close beta test " readonly>
    <form action="" method="post" style="margin-top:10px">
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Имя победителя">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Фамилия">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Фамилия">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Имя победител">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Фамилия">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Фамилия">
    </div>
  </div>
    </form>
    
@endsection
