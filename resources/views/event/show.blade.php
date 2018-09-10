@extends('index')

@section ('content')

<h1><p class="text-center"><?=$event['title']?></p></h1>

@if (!empty($event['title']))
<div class="text-center">
<img class="img-fluid rounded" src="/images/uploads/images/original/<?=$event['img']?>" alt="">
</div>
@endif

<h3><p> Описание: </p></h2>
<p><i><?=$event['desc']?></i></p>

<h3><p>Награда:</p></h3>
<p class="text-primary"><?=$event['reward']?></p>
<p class="text-right"><?=$event['created_by']?></p>
@endsection