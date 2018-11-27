@extends('index')
@section('content')
    <h3>Roles</h3>
    <a class="btn btn-success" style="margin: 10px" href="{{route('role.create')}}"> Create new Role</a>
    <table class="table">
        <tr class="alw">
            <th class="alw">Name</th>
            <th class="alw">Display Name</th>
            <th class="alw">Description</th>
            <th class="alw">Action</th>
        </tr>
     @foreach ($roles as $role)
    <tbody>
<tr>
      
      <td class="alw">{{$role->name}}</td>
      <td class="alw">{{$role->display_name}}</td>
      <td class="alw">{{$role->description}}</td>
      <td class="alw"><a href="{{route('role.edit',$role->id)}}" class="fas fa-edit" ></a>
      <form action="{{route('role.destroy',$role->id)}}"  method="POST">
                       {{csrf_field()}}
                       {{method_field('DELETE')}}
                       <a class="fas fa-trash-alt" type="submit" value="Delete"></a>
                     </form>

        </tr>
        @endforeach
        </tbody>

    </table>


@endsection