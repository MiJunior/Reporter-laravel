@extends('index')

@section('content')
<h2 align="center">List of all Events</h2>
    <?php foreach($events as $event){ ?>
    <div class="card" style="margin:10px">
    <div class="card-header">
    @role('admin')
    <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('event.destroy', $event->id)}}" method="post">
        <a href="/event/{{$event->id}}/edit" class="btn btn-primary">Edit </a>
               @method('DELETE')
              {{ csrf_field() }} 
              <button type="submit" class="btn sm"><i class="fas fa-trash-alt"></i></button>
            </form>
    @endrole
    @role('gm')
    <a href="/event/{{$event->id}}/edit" class="btn btn-primary">Edit</a>
    @endrole
    </div>
    <div class="card-body">
    <h5 class="card-title"><?=$event['title']?></h5>
    <p class="card-text"><?=mb_substr($event['desc'],0,300)?>...</p>
    <a href="/event/{{$event->slug}}" class="btn btn-primary">Просмотр</a>
    @role('gm')
    <a href="/event/{{$event->id}}/edit" class="btn btn-primary">Редактировать</a>
    @endrole
    </div>
    </div>
    <?php } ?>
@endsection